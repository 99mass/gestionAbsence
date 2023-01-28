<?php 
    @session_start();

            /**
             * requetes pour afficher la liste des eleves
             */
    
     date_default_timezone_set('GMT');   // la fonction date_default_timezone_set() permet d'affiche au format GMT 
     $dateAujoudHui=date('Y-m-d');             // la variable  $dateAujoudHui permet de recuperr la date d'aujourd'hui
     $heurActuelle=date('H:i', time());  // la variable $heurActuelle permet de recuperer l'heur Actuelle       

    /**
     * appel du controllers verification_roles.php
     */
    require_once('../../controllers/verification_role.php');

    $serie=htmlspecialchars(trim(strip_tags($_GET['serie'])));
    $niveau=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
    $classe=htmlspecialchars(trim(strip_tags($_GET['classe'])));

     // appelle de la base de donnée en fonction de la classe choisi
            require_once("../../core/series/dbSerie_{$serie}.php");

                /**
                 * afficher la liste des eleves  dont la presence est null
                 */
                 $sql = "SELECT DISTINCT  {$niveau}_{$serie}_{$classe}.id,prenom,nom, DATE_FORMAT(date_naissance, '%d/%m/%Y') AS date_naissances,sex,presence,date_cours,heure_cours
                        FROM {$niveau}_{$serie}_{$classe} 
                        INNER JOIN mp_{$niveau}_{$serie}_{$classe} ON {$niveau}_{$serie}_{$classe}.id= mp_{$niveau}_{$serie}_{$classe}.id_proprietaire
                        WHERE  presence ='null'
                        ORDER BY nom";
                    $query = $db->prepare($sql);
                $query->execute();
                $resutats = $query->fetchAll(PDO::FETCH_ASSOC);
           
?>