<?php 
        /**
         * dans cette page on a le requete pour afficher la liste d'absence d
         */
         @session_start();    
            /**
             * liste_absence() permet de afficher la liste d'absence en fonction du mois  et du jour ou du jour seule
             *
             * @param  $jour
             * @param  $mois
             * @param  $niveau
             * @param  $serie
             * @param  $classe
             * @param  $data_base
             */
            function liste_absence($jour,$mois,$niveau,$serie,$classe,$data_base){
             $sql = "SELECT  {$niveau}_{$serie}_{$classe}.id, prenom,nom, DATE_FORMAT(date_naissance, '%d/%m/%Y') AS date_naissances,
                             mp_{$niveau}_{$serie}_{$classe}.id AS id_FK,presence,DATE_FORMAT(date_cours, '%d/%m/%Y') AS date_cour,
                              TIME_FORMAT(heure_cours,'%Hh%imn') AS heure,cours,motifs_absence
                    FROM  {$niveau}_{$serie}_{$classe} 
                    INNER JOIN mp_{$niveau}_{$serie}_{$classe} ON {$niveau}_{$serie}_{$classe}.id= mp_{$niveau}_{$serie}_{$classe}.id_proprietaire
                    WHERE  presence='absent' AND  DATE_FORMAT(date_cours, '%d')={$jour} AND DATE_FORMAT(date_cours, '%m')={$mois} 
                     ORDER  BY mp_{$niveau}_{$serie}_{$classe}.id DESC";
                 $query = $data_base->prepare($sql);
                $query->execute();
                    // recuper tout information de la base de donnes
                $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
                return $resultat;
            }
                /**
                 * la fonction liste_absence_sans_le_jour() permet de rechercher une liste d'absence a partire du mois seule
                 *
                 * @param  $mois
                 * @param  $niveau
                 * @param  $serie
                 * @param  $classe
                 * @param  $data_base
                 */
             function liste_absence_sans_le_jour($mois,$niveau,$serie,$classe,$data_base){
             $sql = "SELECT  {$niveau}_{$serie}_{$classe}.id, prenom,nom, DATE_FORMAT(date_naissance, '%d/%m/%Y') AS date_naissances,
                    mp_{$niveau}_{$serie}_{$classe}.id AS id_FK,presence,DATE_FORMAT(date_cours, '%d/%m/%Y') AS date_cour,
                    TIME_FORMAT(heure_cours,'%Hh%imn') AS heure,cours,motifs_absence
                    FROM  {$niveau}_{$serie}_{$classe} 
                    INNER JOIN mp_{$niveau}_{$serie}_{$classe} ON {$niveau}_{$serie}_{$classe}.id= mp_{$niveau}_{$serie}_{$classe}.id_proprietaire
                    WHERE  presence='absent' AND DATE_FORMAT(date_cours, '%m')={$mois} 
                     ORDER  BY mp_{$niveau}_{$serie}_{$classe}.id ";
                 $query = $data_base->prepare($sql);
                $query->execute();
                    // recuper tout information de la base de donnes
                $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
                return $resultat;
            }

            

              date_default_timezone_set('GMT');       // la fonction date_default_timezone_set() permet d'affiche au format GMT 
                    $dateAujoudHui=date('Y-m-d');           // la variable  $dateAujoudHui permet de recuperr la date d'aujourd'hui
                    $jourActuel=date('d');
                    $moisActuel=date('m'); 
                    $heurActuelle=date('H:i', time());    // la variable $heurActuelle permet de recuperer l'heur Actuelle   
        
                //ici on recupere les parametre passaient en URL c'est a dire le niveau la serie et la classe choisi 
                $series=htmlspecialchars(trim(strip_tags($_GET['serie'])));
                $niveaux=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
                $classes=htmlspecialchars(trim(strip_tags($_GET['classe'])));
                // appelle de la base de donnée en fonction de la classe choisi
                    require_once("../../core/series/dbSerie_{$series}.php");

            /**
             *on verifie si on a saisi le jour et le mois qu'on veut rechercher la liste de presence;
             *si le mois est founi pas le jour on prendra pour le jour le jour actuel
             *si le jour est fourni et pas le mois on prendrera comme reference pour le mois le mois actuel
             */
            // iciles valeurs rechercher ne sont pas vide 
           if(!empty($_POST['jour_chercher']) || !empty($_POST['mois_chercher'])){
               $moisChercher=htmlspecialchars(trim(strip_tags($_POST['mois_chercher'])));
               $jour_chercher=htmlspecialchars(trim(strip_tags($_POST['jour_chercher'])));
                            // le jour n'est pas donner
                        if ($jour_chercher==0 && $moisChercher!=0) {
                             $liste_absence=liste_absence_sans_le_jour($moisChercher,$niveaux,$series,$classes,$db);
                        }
                        // le mois n'est pas donné
                         else   if ($jour_chercher!=0 && $moisChercher==0) {
                            $moisChercher=$moisActuel;
                            $liste_absence=liste_absence($jour_chercher,$moisChercher,$niveaux,$series,$classes,$db);
                        }else {
                            // le jour et le mois on été donnés
                             $liste_absence=liste_absence($jour_chercher,$moisChercher,$niveaux,$series,$classes,$db);
                        }
               
            }else{
                // si on est proffeusseur on recherche a partir du jour et du mois
                  if($_SESSION['user']['role']=='PF'){
                    $liste_absence=liste_absence($jourActuel,$moisActuel,$niveaux,$series,$classes,$db);
                  }else {
                    // sino on recherche a partir du mois
                        $liste_absence=liste_absence_sans_le_jour($moisActuel,$niveaux,$series,$classes,$db);                    
                  }
                
            }

?>
          