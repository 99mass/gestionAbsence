
<?php 
    @session_start();

             $series=htmlspecialchars(trim(strip_tags($_GET['serie'])));
                $niveaux=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
                $classes=htmlspecialchars(trim(strip_tags($_GET['classe'])));
                // appelle de la base de donnée en fonction de la classe choisi
                    require_once("../../core/series/dbSerie_{$series}.php");

    // Recuper l'id de l'eleve séléctionner
     if(isset($_GET['id']))
            { 
                /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
                 */
                $id =strip_tags(htmlspecialchars($_GET['id']));
                $sql="SELECT * FROM   mp_{$niveaux}_{$series}_{$classes}
                        LEFT OUTER JOIN  {$niveaux}_{$series}_{$classes} ON mp_{$niveaux}_{$series}_{$classes}.id_proprietaire={$niveaux}_{$series}_{$classes}.id 
                       WHERE  mp_{$niveaux}_{$series}_{$classes}.id_proprietaire  =:id ;";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(":id", $id,PDO::PARAM_INT);
                $stmt->execute();
                $ligne_id = $stmt->fetch(PDO::FETCH_ASSOC);

                }
            $idpersonnel=$ligne_id['id'];

                /**
                 * fonction pour recuper le nombre d'absence
                 *
                 * @param  $niveau
                 * @param  $serie
                 * @param  $classe
                 * @param  $idpers
                 * @param  $mois
                 * @param  $dbase
                 * @return void
                 */
            function  nombre_absence($niveau,$serie,$classe,$idpers,$mois,$dbase){
                $query=$dbase->query( "SELECT COUNT(*) AS total FROM mp_{$niveau}_{$serie}_{$classe}
                                    WHERE  presence='absent' AND MONTH(date_cours)='".$mois."'
                                     AND mp_{$niveau}_{$serie}_{$classe}.id_proprietaire='".$idpers."'");                      
                $result=$query->fetch();
                $nombre=$result['total'];
                return $nombre;
            }

                // ici on calule le nombre d'absence en heure
            $Janvier=nombre_absence($niveaux,$series,$classes,$idpersonnel,1,$db);
            $Fevrier=nombre_absence($niveaux,$series,$classes,$idpersonnel,2,$db);
            $Mars=nombre_absence($niveaux,$series,$classes,$idpersonnel,3,$db);
            $Avril=nombre_absence($niveaux,$series,$classes,$idpersonnel,4,$db);
            $Mai=nombre_absence($niveaux,$series,$classes,$idpersonnel,5,$db);
            $Juin=nombre_absence($niveaux,$series,$classes,$idpersonnel,6,$db);
            $Juillet=nombre_absence($niveaux,$series,$classes,$idpersonnel,7,$db);
            $Aout=nombre_absence($niveaux,$series,$classes,$idpersonnel,8,$db);
            $Septembre=nombre_absence($niveaux,$series,$classes,$idpersonnel,9,$db);
            $Octobre=nombre_absence($niveaux,$series,$classes,$idpersonnel,10,$db);
            $Novembre=nombre_absence($niveaux,$series,$classes,$idpersonnel,11,$db);
            $Decembre=nombre_absence($niveaux,$series,$classes,$idpersonnel,12,$db);
?>
