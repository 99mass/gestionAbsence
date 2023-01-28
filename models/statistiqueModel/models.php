<?php 
        /**
         * requetes pour compter le nombre d'absence sur chaque classe de l'école
         */


     date_default_timezone_set('GMT');       // la fonction date_default_timezone_set() permet d'affiche au format GMT 
             $jourActuelle=date('d'); 
              $moisActuelle=date('m');          

            /**
             * la fonction totalAbsence()permet de recuperer le nombre totale d'absence d'une Table donnée
             *
             * @param $niveau
             * @param $serie
             * @param $classe
             * @param $dbase
             * @param $mActuelle
             * @param $jActuelle
             */
         function totalAbsence($niveau,$serie,$classe,$dbase,$mActuelle,$jActuelle){
              // ici on a donne le jour donc on va recuper le nombre d'absence en fonction du jour et du mois
                if ($jActuelle!='') {
                $query= $dbase->query( "SELECT COUNT(*) AS total FROM mp_{$niveau}_{$serie}_{$classe} 
                                     WHERE  presence ='absent' AND  MONTH(date_cours)='".$mActuelle."' AND DATE_FORMAT(date_cours,'%d')='".$jActuelle."'");                      
                   
                }
              // ici on n'a pas donné le jour donc on va recuper le nombre d'absence en fonction du mois seul
                 else {
                 $query=$dbase->query( "SELECT COUNT(*) AS total FROM mp_{$niveau}_{$serie}_{$classe} 
                                    WHERE  presence ='absent' AND  MONTH(date_cours)='".$mActuelle."' "); 
                }
               $result=$query->fetch();
                 $resultats=$result['total'];
                
                 return $resultats;
         }
       //   appel aux fichiers pour affiche le nombre d'absence de chaque serie en fonction du moi ou du jour
         require_once('../../models/statistiqueModel/series/serie_s1.php');
         require_once('../../models/statistiqueModel/series/serie_s2.php');
         require_once('../../models/statistiqueModel/series/serie_s3.php');
         require_once('../../models/statistiqueModel/series/serie_l1.php');
         require_once('../../models/statistiqueModel/series/serie_l2.php');
         require_once('../../models/statistiqueModel/series/serie_lp.php');
         require_once('../../models/statistiqueModel/series/serie_steg.php');
         require_once('../../models/statistiqueModel/series/serie_t.php');

