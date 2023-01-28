<?php 
          require_once("../../core/series/dbSerie_l1.php");
       //   serie l1
//        *********************************Jour Actuelle*************//
       $serie_seconde_l1_a=totalAbsence('seconde','l1','a',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_l1_b=totalAbsence('seconde','l1','b',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_l1_c=totalAbsence('seconde','l1','c',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_l1_d=totalAbsence('seconde','l1','d',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_l1_total=$serie_seconde_l1_a+$serie_seconde_l1_b+$serie_seconde_l1_c+$serie_seconde_l1_d;
         
       $serie_premiere_l1_a=totalAbsence('premiere','l1','a',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_l1_b=totalAbsence('premiere','l1','b',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_l1_c=totalAbsence('premiere','l1','c',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_l1_d=totalAbsence('premiere','l1','d',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_l1_total=$serie_premiere_l1_a+$serie_premiere_l1_b+$serie_premiere_l1_c+$serie_premiere_l1_d;

       $serie_terminal_l1_a=totalAbsence('terminal','l1','a',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_l1_b=totalAbsence('terminal','l1','b',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_l1_c=totalAbsence('terminal','l1','c',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_l1_d=totalAbsence('terminal','l1','d',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_l1_total=$serie_terminal_l1_a+$serie_terminal_l1_b+$serie_terminal_l1_c+$serie_terminal_l1_d;
       $serie_l1_total=$serie_seconde_l1_total+$serie_premiere_l1_total+$serie_terminal_l1_total;


//        *********************Suivant le Mois Courant****************//
       $Mois_courant_seconde_l1_a=totalAbsence('seconde','l1','a',$db,$moisActuelle,'');
       $Mois_courant_seconde_l1_b=totalAbsence('seconde','l1','b',$db,$moisActuelle,'');
       $Mois_courant_seconde_l1_c=totalAbsence('seconde','l1','c',$db,$moisActuelle,'');
       $Mois_courant_seconde_l1_d=totalAbsence('seconde','l1','d',$db,$moisActuelle,'');
       $Mois_courant_seconde_l1_total=$Mois_courant_seconde_l1_a+$Mois_courant_seconde_l1_b+$Mois_courant_seconde_l1_c+$Mois_courant_seconde_l1_d;
         
       $Mois_courant_premiere_l1_a=totalAbsence('premiere','l1','a',$db,$moisActuelle,'');
       $Mois_courant_premiere_l1_b=totalAbsence('premiere','l1','b',$db,$moisActuelle,'');
       $Mois_courant_premiere_l1_c=totalAbsence('premiere','l1','c',$db,$moisActuelle,'');
       $Mois_courant_premiere_l1_d=totalAbsence('premiere','l1','d',$db,$moisActuelle,'');
       $Mois_courant_premiere_l1_total=$Mois_courant_premiere_l1_a+$Mois_courant_premiere_l1_b+$Mois_courant_premiere_l1_c+$Mois_courant_premiere_l1_d;

       $Mois_courant_terminal_l1_a=totalAbsence('terminal','l1','a',$db,$moisActuelle,'');
       $Mois_courant_terminal_l1_b=totalAbsence('terminal','l1','b',$db,$moisActuelle,'');
       $Mois_courant_terminal_l1_c=totalAbsence('terminal','l1','c',$db,$moisActuelle,'');
       $Mois_courant_terminal_l1_d=totalAbsence('terminal','l1','d',$db,$moisActuelle,'');
       $Mois_courant_terminal_l1_total=$Mois_courant_terminal_l1_a+$Mois_courant_terminal_l1_b+$Mois_courant_terminal_l1_c+$Mois_courant_terminal_l1_d;
       $serie_l1_total_mois_courant=$Mois_courant_seconde_l1_total+$Mois_courant_premiere_l1_total+$Mois_courant_terminal_l1_total;

 //        *********************Suivant les Differente Mois ****************//
       // -----------------Janvier---------------------------//
       $Mois_Janvier_seconde_l1_a=totalAbsence('seconde','l1','a',$db,1,'');
       $Mois_Janvier_seconde_l1_b=totalAbsence('seconde','l1','b',$db,1,'');
       $Mois_Janvier_seconde_l1_c=totalAbsence('seconde','l1','c',$db,1,'');
       $Mois_Janvier_seconde_l1_d=totalAbsence('seconde','l1','d',$db,1,'');
       $Mois_Janvier_seconde_l1_total=$Mois_Janvier_seconde_l1_a+$Mois_Janvier_seconde_l1_b+$Mois_Janvier_seconde_l1_c+$Mois_Janvier_seconde_l1_d;
         
       $Mois_Janvier_premiere_l1_a=totalAbsence('premiere','l1','a',$db,1,'');
       $Mois_Janvier_premiere_l1_b=totalAbsence('premiere','l1','b',$db,1,'');
       $Mois_Janvier_premiere_l1_c=totalAbsence('premiere','l1','c',$db,1,'');
       $Mois_Janvier_premiere_l1_d=totalAbsence('premiere','l1','d',$db,1,'');
       $Mois_Janvier_premiere_l1_total=$Mois_Janvier_premiere_l1_a+$Mois_Janvier_premiere_l1_b+$Mois_Janvier_premiere_l1_c+$Mois_Janvier_premiere_l1_d;

       $Mois_Janvier_terminal_l1_a=totalAbsence('terminal','l1','a',$db,1,'');
       $Mois_Janvier_terminal_l1_b=totalAbsence('terminal','l1','b',$db,1,'');
       $Mois_Janvier_terminal_l1_c=totalAbsence('terminal','l1','c',$db,1,'');
       $Mois_Janvier_terminal_l1_d=totalAbsence('terminal','l1','d',$db,1,'');
       $Mois_Janvier_terminal_l1_total=$Mois_Janvier_terminal_l1_a+$Mois_Janvier_terminal_l1_b+$Mois_Janvier_terminal_l1_c+$Mois_Janvier_terminal_l1_d;
       $serie_l1_total_mois_Janvier=$Mois_Janvier_seconde_l1_total+$Mois_Janvier_premiere_l1_total+$Mois_Janvier_terminal_l1_total;
                                   //-----------------------Fevrier------------------- /
        $Mois_Fevrier_seconde_l1_a=totalAbsence('seconde','l1','a',$db,2,'');
       $Mois_Fevrier_seconde_l1_b=totalAbsence('seconde','l1','b',$db,2,'');
       $Mois_Fevrier_seconde_l1_c=totalAbsence('seconde','l1','c',$db,2,'');
       $Mois_Fevrier_seconde_l1_d=totalAbsence('seconde','l1','d',$db,2,'');
       $Mois_Fevrier_seconde_l1_total=$Mois_Fevrier_seconde_l1_a+$Mois_Fevrier_seconde_l1_b+$Mois_Fevrier_seconde_l1_c+$Mois_Fevrier_seconde_l1_d;
         
       $Mois_Fevrier_premiere_l1_a=totalAbsence('premiere','l1','a',$db,2,'');
       $Mois_Fevrier_premiere_l1_b=totalAbsence('premiere','l1','b',$db,2,'');
       $Mois_Fevrier_premiere_l1_c=totalAbsence('premiere','l1','c',$db,2,'');
       $Mois_Fevrier_premiere_l1_d=totalAbsence('premiere','l1','d',$db,2,'');
       $Mois_Fevrier_premiere_l1_total=$Mois_Fevrier_premiere_l1_a+$Mois_Fevrier_premiere_l1_b+$Mois_Fevrier_premiere_l1_c+$Mois_Fevrier_premiere_l1_d;

       $Mois_Fevrier_terminal_l1_a=totalAbsence('terminal','l1','a',$db,2,'');
       $Mois_Fevrier_terminal_l1_b=totalAbsence('terminal','l1','b',$db,2,'');
       $Mois_Fevrier_terminal_l1_c=totalAbsence('terminal','l1','c',$db,2,'');
       $Mois_Fevrier_terminal_l1_d=totalAbsence('terminal','l1','d',$db,2,'');
       $Mois_Fevrier_terminal_l1_total=$Mois_Fevrier_terminal_l1_a+$Mois_Fevrier_terminal_l1_b+$Mois_Fevrier_terminal_l1_c+$Mois_Fevrier_terminal_l1_d;
       $serie_l1_total_mois_Fevrier=$Mois_Fevrier_seconde_l1_total+$Mois_Fevrier_premiere_l1_total+$Mois_Fevrier_terminal_l1_total;
                                    //-----------------------Mars------------------- /
        $Mois_Mars_seconde_l1_a=totalAbsence('seconde','l1','a',$db,3,'');
       $Mois_Mars_seconde_l1_b=totalAbsence('seconde','l1','b',$db,3,'');
       $Mois_Mars_seconde_l1_c=totalAbsence('seconde','l1','c',$db,3,'');
       $Mois_Mars_seconde_l1_d=totalAbsence('seconde','l1','d',$db,3,'');
       $Mois_Mars_seconde_l1_total=$Mois_Mars_seconde_l1_a+$Mois_Mars_seconde_l1_b+$Mois_Mars_seconde_l1_c+$Mois_Mars_seconde_l1_d;
         
       $Mois_Mars_premiere_l1_a=totalAbsence('premiere','l1','a',$db,3,'');
       $Mois_Mars_premiere_l1_b=totalAbsence('premiere','l1','b',$db,3,'');
       $Mois_Mars_premiere_l1_c=totalAbsence('premiere','l1','c',$db,3,'');
       $Mois_Mars_premiere_l1_d=totalAbsence('premiere','l1','d',$db,3,'');
       $Mois_Mars_premiere_l1_total=$Mois_Mars_premiere_l1_a+$Mois_Mars_premiere_l1_b+$Mois_Mars_premiere_l1_c+$Mois_Mars_premiere_l1_d;

       $Mois_Mars_terminal_l1_a=totalAbsence('terminal','l1','a',$db,3,'');
       $Mois_Mars_terminal_l1_b=totalAbsence('terminal','l1','b',$db,3,'');
       $Mois_Mars_terminal_l1_c=totalAbsence('terminal','l1','c',$db,3,'');
       $Mois_Mars_terminal_l1_d=totalAbsence('terminal','l1','d',$db,3,'');
       $Mois_Mars_terminal_l1_total=$Mois_Mars_terminal_l1_a+$Mois_Mars_terminal_l1_b+$Mois_Mars_terminal_l1_c+$Mois_Mars_terminal_l1_d;
       $serie_l1_total_mois_Mars=$Mois_Mars_seconde_l1_total+$Mois_Mars_premiere_l1_total+$Mois_Mars_terminal_l1_total;

                                    //-----------------------Mars------------------- /
        $Mois_Avril_seconde_l1_a=totalAbsence('seconde','l1','a',$db,4,'');
       $Mois_Avril_seconde_l1_b=totalAbsence('seconde','l1','b',$db,4,'');
       $Mois_Avril_seconde_l1_c=totalAbsence('seconde','l1','c',$db,4,'');
       $Mois_Avril_seconde_l1_d=totalAbsence('seconde','l1','d',$db,4,'');
       $Mois_Avril_seconde_l1_total=$Mois_Avril_seconde_l1_a+$Mois_Avril_seconde_l1_b+$Mois_Avril_seconde_l1_c+$Mois_Avril_seconde_l1_d;
         
       $Mois_Avril_premiere_l1_a=totalAbsence('premiere','l1','a',$db,4,'');
       $Mois_Avril_premiere_l1_b=totalAbsence('premiere','l1','b',$db,4,'');
       $Mois_Avril_premiere_l1_c=totalAbsence('premiere','l1','c',$db,4,'');
       $Mois_Avril_premiere_l1_d=totalAbsence('premiere','l1','d',$db,4,'');
       $Mois_Avril_premiere_l1_total=$Mois_Avril_premiere_l1_a+$Mois_Avril_premiere_l1_b+$Mois_Avril_premiere_l1_c+$Mois_Avril_premiere_l1_d;

       $Mois_Avril_terminal_l1_a=totalAbsence('terminal','l1','a',$db,4,'');
       $Mois_Avril_terminal_l1_b=totalAbsence('terminal','l1','b',$db,4,'');
       $Mois_Avril_terminal_l1_c=totalAbsence('terminal','l1','c',$db,4,'');
       $Mois_Avril_terminal_l1_d=totalAbsence('terminal','l1','d',$db,4,'');
       $Mois_Avril_terminal_l1_total=$Mois_Avril_terminal_l1_a+$Mois_Avril_terminal_l1_b+$Mois_Avril_terminal_l1_c+$Mois_Avril_terminal_l1_d;
       $serie_l1_total_mois_Avril=$Mois_Avril_seconde_l1_total+$Mois_Avril_premiere_l1_total+$Mois_Avril_terminal_l1_total;

        //-----------------------Mai------------------- /
        $Mois_Mai_seconde_l1_a=totalAbsence('seconde','l1','a',$db,5,'');
       $Mois_Mai_seconde_l1_b=totalAbsence('seconde','l1','b',$db,5,'');
       $Mois_Mai_seconde_l1_c=totalAbsence('seconde','l1','c',$db,5,'');
       $Mois_Mai_seconde_l1_d=totalAbsence('seconde','l1','d',$db,5,'');
       $Mois_Mai_seconde_l1_total=$Mois_Mai_seconde_l1_a+$Mois_Mai_seconde_l1_b+$Mois_Mai_seconde_l1_c+$Mois_Mai_seconde_l1_d;
         
       $Mois_Mai_premiere_l1_a=totalAbsence('premiere','l1','a',$db,5,'');
       $Mois_Mai_premiere_l1_b=totalAbsence('premiere','l1','b',$db,5,'');
       $Mois_Mai_premiere_l1_c=totalAbsence('premiere','l1','c',$db,5,'');
       $Mois_Mai_premiere_l1_d=totalAbsence('premiere','l1','d',$db,5,'');
       $Mois_Mai_premiere_l1_total=$Mois_Mai_premiere_l1_a+$Mois_Mai_premiere_l1_b+$Mois_Mai_premiere_l1_c+$Mois_Mai_premiere_l1_d;

       $Mois_Mai_terminal_l1_a=totalAbsence('terminal','l1','a',$db,5,'');
       $Mois_Mai_terminal_l1_b=totalAbsence('terminal','l1','b',$db,5,'');
       $Mois_Mai_terminal_l1_c=totalAbsence('terminal','l1','c',$db,5,'');
       $Mois_Mai_terminal_l1_d=totalAbsence('terminal','l1','d',$db,5,'');
       $Mois_Mai_terminal_l1_total=$Mois_Mai_terminal_l1_a+$Mois_Mai_terminal_l1_b+$Mois_Mai_terminal_l1_c+$Mois_Mai_terminal_l1_d;
       $serie_l1_total_mois_Mai=$Mois_Mai_seconde_l1_total+$Mois_Mai_premiere_l1_total+$Mois_Mai_terminal_l1_total;
        //-----------------------Juin------------------- /
        $Mois_Juin_seconde_l1_a=totalAbsence('seconde','l1','a',$db,6,'');
       $Mois_Juin_seconde_l1_b=totalAbsence('seconde','l1','b',$db,6,'');
       $Mois_Juin_seconde_l1_c=totalAbsence('seconde','l1','c',$db,6,'');
       $Mois_Juin_seconde_l1_d=totalAbsence('seconde','l1','d',$db,6,'');
       $Mois_Juin_seconde_l1_total=$Mois_Juin_seconde_l1_a+$Mois_Juin_seconde_l1_b+$Mois_Juin_seconde_l1_c+$Mois_Juin_seconde_l1_d;
         
       $Mois_Juin_premiere_l1_a=totalAbsence('premiere','l1','a',$db,6,'');
       $Mois_Juin_premiere_l1_b=totalAbsence('premiere','l1','b',$db,6,'');
       $Mois_Juin_premiere_l1_c=totalAbsence('premiere','l1','c',$db,6,'');
       $Mois_Juin_premiere_l1_d=totalAbsence('premiere','l1','d',$db,6,'');
       $Mois_Juin_premiere_l1_total=$Mois_Juin_premiere_l1_a+$Mois_Juin_premiere_l1_b+$Mois_Juin_premiere_l1_c+$Mois_Juin_premiere_l1_d;

       $Mois_Juin_terminal_l1_a=totalAbsence('terminal','l1','a',$db,6,'');
       $Mois_Juin_terminal_l1_b=totalAbsence('terminal','l1','b',$db,6,'');
       $Mois_Juin_terminal_l1_c=totalAbsence('terminal','l1','c',$db,6,'');
       $Mois_Juin_terminal_l1_d=totalAbsence('terminal','l1','d',$db,6,'');
       $Mois_Juin_terminal_l1_total=$Mois_Juin_terminal_l1_a+$Mois_Juin_terminal_l1_b+$Mois_Juin_terminal_l1_c+$Mois_Juin_terminal_l1_d;
       $serie_l1_total_mois_Juin=$Mois_Juin_seconde_l1_total+$Mois_Juin_premiere_l1_total+$Mois_Juin_terminal_l1_total;
        //-----------------------Juillet------------------- /
        $Mois_Juillet_seconde_l1_a=totalAbsence('seconde','l1','a',$db,7,'');
       $Mois_Juillet_seconde_l1_b=totalAbsence('seconde','l1','b',$db,7,'');
       $Mois_Juillet_seconde_l1_c=totalAbsence('seconde','l1','c',$db,7,'');
       $Mois_Juillet_seconde_l1_d=totalAbsence('seconde','l1','d',$db,7,'');
       $Mois_Juillet_seconde_l1_total=$Mois_Juillet_seconde_l1_a+$Mois_Juillet_seconde_l1_b+$Mois_Juillet_seconde_l1_c+$Mois_Juillet_seconde_l1_d;
         
       $Mois_Juillet_premiere_l1_a=totalAbsence('premiere','l1','a',$db,7,'');
       $Mois_Juillet_premiere_l1_b=totalAbsence('premiere','l1','b',$db,7,'');
       $Mois_Juillet_premiere_l1_c=totalAbsence('premiere','l1','c',$db,7,'');
       $Mois_Juillet_premiere_l1_d=totalAbsence('premiere','l1','d',$db,7,'');
       $Mois_Juillet_premiere_l1_total=$Mois_Juillet_premiere_l1_a+$Mois_Juillet_premiere_l1_b+$Mois_Juillet_premiere_l1_c+$Mois_Juillet_premiere_l1_d;

       $Mois_Juillet_terminal_l1_a=totalAbsence('terminal','l1','a',$db,7,'');
       $Mois_Juillet_terminal_l1_b=totalAbsence('terminal','l1','b',$db,7,'');
       $Mois_Juillet_terminal_l1_c=totalAbsence('terminal','l1','c',$db,7,'');
       $Mois_Juillet_terminal_l1_d=totalAbsence('terminal','l1','d',$db,7,'');
       $Mois_Juillet_terminal_l1_total=$Mois_Juillet_terminal_l1_a+$Mois_Juillet_terminal_l1_b+$Mois_Juillet_terminal_l1_c+$Mois_Juillet_terminal_l1_d;
       $serie_l1_total_mois_Juillet=$Mois_Juillet_seconde_l1_total+$Mois_Juillet_premiere_l1_total+$Mois_Juillet_terminal_l1_total;
        //-----------------------Octobre------------------- /
        $Mois_Octobre_seconde_l1_a=totalAbsence('seconde','l1','a',$db,10,'');
       $Mois_Octobre_seconde_l1_b=totalAbsence('seconde','l1','b',$db,10,'');
       $Mois_Octobre_seconde_l1_c=totalAbsence('seconde','l1','c',$db,10,'');
       $Mois_Octobre_seconde_l1_d=totalAbsence('seconde','l1','d',$db,10,'');
       $Mois_Octobre_seconde_l1_total=$Mois_Octobre_seconde_l1_a+$Mois_Octobre_seconde_l1_b+$Mois_Octobre_seconde_l1_c+$Mois_Octobre_seconde_l1_d;
         
       $Mois_Octobre_premiere_l1_a=totalAbsence('premiere','l1','a',$db,10,'');
       $Mois_Octobre_premiere_l1_b=totalAbsence('premiere','l1','b',$db,10,'');
       $Mois_Octobre_premiere_l1_c=totalAbsence('premiere','l1','c',$db,10,'');
       $Mois_Octobre_premiere_l1_d=totalAbsence('premiere','l1','d',$db,10,'');
       $Mois_Octobre_premiere_l1_total=$Mois_Octobre_premiere_l1_a+$Mois_Octobre_premiere_l1_b+$Mois_Octobre_premiere_l1_c+$Mois_Octobre_premiere_l1_d;

       $Mois_Octobre_terminal_l1_a=totalAbsence('terminal','l1','a',$db,10,'');
       $Mois_Octobre_terminal_l1_b=totalAbsence('terminal','l1','b',$db,10,'');
       $Mois_Octobre_terminal_l1_c=totalAbsence('terminal','l1','c',$db,10,'');
       $Mois_Octobre_terminal_l1_d=totalAbsence('terminal','l1','d',$db,10,'');
       $Mois_Octobre_terminal_l1_total=$Mois_Octobre_terminal_l1_a+$Mois_Octobre_terminal_l1_b+$Mois_Octobre_terminal_l1_c+$Mois_Octobre_terminal_l1_d;
       $serie_l1_total_mois_Octobre=$Mois_Octobre_seconde_l1_total+$Mois_Octobre_premiere_l1_total+$Mois_Octobre_terminal_l1_total;
        //-----------------------Novembre------------------- /
        $Mois_Novembre_seconde_l1_a=totalAbsence('seconde','l1','a',$db,11,'');
       $Mois_Novembre_seconde_l1_b=totalAbsence('seconde','l1','b',$db,11,'');
       $Mois_Novembre_seconde_l1_c=totalAbsence('seconde','l1','c',$db,11,'');
       $Mois_Novembre_seconde_l1_d=totalAbsence('seconde','l1','d',$db,11,'');
       $Mois_Novembre_seconde_l1_total=$Mois_Novembre_seconde_l1_a+$Mois_Novembre_seconde_l1_b+$Mois_Novembre_seconde_l1_c+$Mois_Novembre_seconde_l1_d;
         
       $Mois_Novembre_premiere_l1_a=totalAbsence('premiere','l1','a',$db,11,'');
       $Mois_Novembre_premiere_l1_b=totalAbsence('premiere','l1','b',$db,11,'');
       $Mois_Novembre_premiere_l1_c=totalAbsence('premiere','l1','c',$db,11,'');
       $Mois_Novembre_premiere_l1_d=totalAbsence('premiere','l1','d',$db,11,'');
       $Mois_Novembre_premiere_l1_total=$Mois_Novembre_premiere_l1_a+$Mois_Novembre_premiere_l1_b+$Mois_Novembre_premiere_l1_c+$Mois_Novembre_premiere_l1_d;

       $Mois_Novembre_terminal_l1_a=totalAbsence('terminal','l1','a',$db,11,'');
       $Mois_Novembre_terminal_l1_b=totalAbsence('terminal','l1','b',$db,11,'');
       $Mois_Novembre_terminal_l1_c=totalAbsence('terminal','l1','c',$db,11,'');
       $Mois_Novembre_terminal_l1_d=totalAbsence('terminal','l1','d',$db,11,'');
       $Mois_Novembre_terminal_l1_total=$Mois_Novembre_terminal_l1_a+$Mois_Novembre_terminal_l1_b+$Mois_Novembre_terminal_l1_c+$Mois_Novembre_terminal_l1_d;
       $serie_l1_total_mois_Novembre=$Mois_Novembre_seconde_l1_total+$Mois_Novembre_premiere_l1_total+$Mois_Novembre_terminal_l1_total;
        //-----------------------Decembre------------------- /
        $Mois_Decembre_seconde_l1_a=totalAbsence('seconde','l1','a',$db,12,'');
       $Mois_Decembre_seconde_l1_b=totalAbsence('seconde','l1','b',$db,12,'');
       $Mois_Decembre_seconde_l1_c=totalAbsence('seconde','l1','c',$db,12,'');
       $Mois_Decembre_seconde_l1_d=totalAbsence('seconde','l1','d',$db,12,'');
       $Mois_Decembre_seconde_l1_total=$Mois_Decembre_seconde_l1_a+$Mois_Decembre_seconde_l1_b+$Mois_Decembre_seconde_l1_c+$Mois_Decembre_seconde_l1_d;
         
       $Mois_Decembre_premiere_l1_a=totalAbsence('premiere','l1','a',$db,12,'');
       $Mois_Decembre_premiere_l1_b=totalAbsence('premiere','l1','b',$db,12,'');
       $Mois_Decembre_premiere_l1_c=totalAbsence('premiere','l1','c',$db,12,'');
       $Mois_Decembre_premiere_l1_d=totalAbsence('premiere','l1','d',$db,12,'');
       $Mois_Decembre_premiere_l1_total=$Mois_Decembre_premiere_l1_a+$Mois_Decembre_premiere_l1_b+$Mois_Decembre_premiere_l1_c+$Mois_Decembre_premiere_l1_d;

       $Mois_Decembre_terminal_l1_a=totalAbsence('terminal','l1','a',$db,12,'');
       $Mois_Decembre_terminal_l1_b=totalAbsence('terminal','l1','b',$db,12,'');
       $Mois_Decembre_terminal_l1_c=totalAbsence('terminal','l1','c',$db,12,'');
       $Mois_Decembre_terminal_l1_d=totalAbsence('terminal','l1','d',$db,12,'');
       $Mois_Decembre_terminal_l1_total=$Mois_Decembre_terminal_l1_a+$Mois_Decembre_terminal_l1_b+$Mois_Decembre_terminal_l1_c+$Mois_Decembre_terminal_l1_d;
       $serie_l1_total_mois_Decembre=$Mois_Decembre_seconde_l1_total+$Mois_Decembre_premiere_l1_total+$Mois_Decembre_terminal_l1_total;

     
?>