<?php 
          require_once("../../core/series/dbSerie_lp.php");
       //   serie lp
//        *********************************Jour Actuelle*************//
       $serie_seconde_lp_a=totalAbsence('seconde','lp','a',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_lp_b=totalAbsence('seconde','lp','b',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_lp_c=totalAbsence('seconde','lp','c',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_lp_d=totalAbsence('seconde','lp','d',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_lp_total=$serie_seconde_lp_a+$serie_seconde_lp_b+$serie_seconde_lp_c+$serie_seconde_lp_d;
         
       $serie_premiere_lp_a=totalAbsence('premiere','lp','a',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_lp_b=totalAbsence('premiere','lp','b',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_lp_c=totalAbsence('premiere','lp','c',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_lp_d=totalAbsence('premiere','lp','d',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_lp_total=$serie_premiere_lp_a+$serie_premiere_lp_b+$serie_premiere_lp_c+$serie_premiere_lp_d;

       $serie_terminal_lp_a=totalAbsence('terminal','lp','a',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_lp_b=totalAbsence('terminal','lp','b',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_lp_c=totalAbsence('terminal','lp','c',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_lp_d=totalAbsence('terminal','lp','d',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_lp_total=$serie_terminal_lp_a+$serie_terminal_lp_b+$serie_terminal_lp_c+$serie_terminal_lp_d;
       $serie_lp_total=$serie_seconde_lp_total+$serie_premiere_lp_total+$serie_terminal_lp_total;


//        *********************Suivant le Mois Courant****************//
       $Mois_courant_seconde_lp_a=totalAbsence('seconde','lp','a',$db,$moisActuelle,'');
       $Mois_courant_seconde_lp_b=totalAbsence('seconde','lp','b',$db,$moisActuelle,'');
       $Mois_courant_seconde_lp_c=totalAbsence('seconde','lp','c',$db,$moisActuelle,'');
       $Mois_courant_seconde_lp_d=totalAbsence('seconde','lp','d',$db,$moisActuelle,'');
       $Mois_courant_seconde_lp_total=$Mois_courant_seconde_lp_a+$Mois_courant_seconde_lp_b+$Mois_courant_seconde_lp_c+$Mois_courant_seconde_lp_d;
         
       $Mois_courant_premiere_lp_a=totalAbsence('premiere','lp','a',$db,$moisActuelle,'');
       $Mois_courant_premiere_lp_b=totalAbsence('premiere','lp','b',$db,$moisActuelle,'');
       $Mois_courant_premiere_lp_c=totalAbsence('premiere','lp','c',$db,$moisActuelle,'');
       $Mois_courant_premiere_lp_d=totalAbsence('premiere','lp','d',$db,$moisActuelle,'');
       $Mois_courant_premiere_lp_total=$Mois_courant_premiere_lp_a+$Mois_courant_premiere_lp_b+$Mois_courant_premiere_lp_c+$Mois_courant_premiere_lp_d;

       $Mois_courant_terminal_lp_a=totalAbsence('terminal','lp','a',$db,$moisActuelle,'');
       $Mois_courant_terminal_lp_b=totalAbsence('terminal','lp','b',$db,$moisActuelle,'');
       $Mois_courant_terminal_lp_c=totalAbsence('terminal','lp','c',$db,$moisActuelle,'');
       $Mois_courant_terminal_lp_d=totalAbsence('terminal','lp','d',$db,$moisActuelle,'');
       $Mois_courant_terminal_lp_total=$Mois_courant_terminal_lp_a+$Mois_courant_terminal_lp_b+$Mois_courant_terminal_lp_c+$Mois_courant_terminal_lp_d;
       $serie_lp_total_mois_courant=$Mois_courant_seconde_lp_total+$Mois_courant_premiere_lp_total+$Mois_courant_terminal_lp_total;


 //        *********************Suivant les Differente Mois ****************//
       // -----------------Janvier---------------------------//
       $Mois_Janvier_seconde_lp_a=totalAbsence('seconde','lp','a',$db,1,'');
       $Mois_Janvier_seconde_lp_b=totalAbsence('seconde','lp','b',$db,1,'');
       $Mois_Janvier_seconde_lp_c=totalAbsence('seconde','lp','c',$db,1,'');
       $Mois_Janvier_seconde_lp_d=totalAbsence('seconde','lp','d',$db,1,'');
       $Mois_Janvier_seconde_lp_total=$Mois_Janvier_seconde_lp_a+$Mois_Janvier_seconde_lp_b+$Mois_Janvier_seconde_lp_c+$Mois_Janvier_seconde_lp_d;
         
       $Mois_Janvier_premiere_lp_a=totalAbsence('premiere','lp','a',$db,1,'');
       $Mois_Janvier_premiere_lp_b=totalAbsence('premiere','lp','b',$db,1,'');
       $Mois_Janvier_premiere_lp_c=totalAbsence('premiere','lp','c',$db,1,'');
       $Mois_Janvier_premiere_lp_d=totalAbsence('premiere','lp','d',$db,1,'');
       $Mois_Janvier_premiere_lp_total=$Mois_Janvier_premiere_lp_a+$Mois_Janvier_premiere_lp_b+$Mois_Janvier_premiere_lp_c+$Mois_Janvier_premiere_lp_d;

       $Mois_Janvier_terminal_lp_a=totalAbsence('terminal','lp','a',$db,1,'');
       $Mois_Janvier_terminal_lp_b=totalAbsence('terminal','lp','b',$db,1,'');
       $Mois_Janvier_terminal_lp_c=totalAbsence('terminal','lp','c',$db,1,'');
       $Mois_Janvier_terminal_lp_d=totalAbsence('terminal','lp','d',$db,1,'');
       $Mois_Janvier_terminal_lp_total=$Mois_Janvier_terminal_lp_a+$Mois_Janvier_terminal_lp_b+$Mois_Janvier_terminal_lp_c+$Mois_Janvier_terminal_lp_d;
       $serie_lp_total_mois_Janvier=$Mois_Janvier_seconde_lp_total+$Mois_Janvier_premiere_lp_total+$Mois_Janvier_terminal_lp_total;
                                   //-----------------------Fevrier------------------- /
        $Mois_Fevrier_seconde_lp_a=totalAbsence('seconde','lp','a',$db,2,'');
       $Mois_Fevrier_seconde_lp_b=totalAbsence('seconde','lp','b',$db,2,'');
       $Mois_Fevrier_seconde_lp_c=totalAbsence('seconde','lp','c',$db,2,'');
       $Mois_Fevrier_seconde_lp_d=totalAbsence('seconde','lp','d',$db,2,'');
       $Mois_Fevrier_seconde_lp_total=$Mois_Fevrier_seconde_lp_a+$Mois_Fevrier_seconde_lp_b+$Mois_Fevrier_seconde_lp_c+$Mois_Fevrier_seconde_lp_d;
         
       $Mois_Fevrier_premiere_lp_a=totalAbsence('premiere','lp','a',$db,2,'');
       $Mois_Fevrier_premiere_lp_b=totalAbsence('premiere','lp','b',$db,2,'');
       $Mois_Fevrier_premiere_lp_c=totalAbsence('premiere','lp','c',$db,2,'');
       $Mois_Fevrier_premiere_lp_d=totalAbsence('premiere','lp','d',$db,2,'');
       $Mois_Fevrier_premiere_lp_total=$Mois_Fevrier_premiere_lp_a+$Mois_Fevrier_premiere_lp_b+$Mois_Fevrier_premiere_lp_c+$Mois_Fevrier_premiere_lp_d;

       $Mois_Fevrier_terminal_lp_a=totalAbsence('terminal','lp','a',$db,2,'');
       $Mois_Fevrier_terminal_lp_b=totalAbsence('terminal','lp','b',$db,2,'');
       $Mois_Fevrier_terminal_lp_c=totalAbsence('terminal','lp','c',$db,2,'');
       $Mois_Fevrier_terminal_lp_d=totalAbsence('terminal','lp','d',$db,2,'');
       $Mois_Fevrier_terminal_lp_total=$Mois_Fevrier_terminal_lp_a+$Mois_Fevrier_terminal_lp_b+$Mois_Fevrier_terminal_lp_c+$Mois_Fevrier_terminal_lp_d;
       $serie_lp_total_mois_Fevrier=$Mois_Fevrier_seconde_lp_total+$Mois_Fevrier_premiere_lp_total+$Mois_Fevrier_terminal_lp_total;
                                    //-----------------------Mars------------------- /
        $Mois_Mars_seconde_lp_a=totalAbsence('seconde','lp','a',$db,3,'');
       $Mois_Mars_seconde_lp_b=totalAbsence('seconde','lp','b',$db,3,'');
       $Mois_Mars_seconde_lp_c=totalAbsence('seconde','lp','c',$db,3,'');
       $Mois_Mars_seconde_lp_d=totalAbsence('seconde','lp','d',$db,3,'');
       $Mois_Mars_seconde_lp_total=$Mois_Mars_seconde_lp_a+$Mois_Mars_seconde_lp_b+$Mois_Mars_seconde_lp_c+$Mois_Mars_seconde_lp_d;
         
       $Mois_Mars_premiere_lp_a=totalAbsence('premiere','lp','a',$db,3,'');
       $Mois_Mars_premiere_lp_b=totalAbsence('premiere','lp','b',$db,3,'');
       $Mois_Mars_premiere_lp_c=totalAbsence('premiere','lp','c',$db,3,'');
       $Mois_Mars_premiere_lp_d=totalAbsence('premiere','lp','d',$db,3,'');
       $Mois_Mars_premiere_lp_total=$Mois_Mars_premiere_lp_a+$Mois_Mars_premiere_lp_b+$Mois_Mars_premiere_lp_c+$Mois_Mars_premiere_lp_d;

       $Mois_Mars_terminal_lp_a=totalAbsence('terminal','lp','a',$db,3,'');
       $Mois_Mars_terminal_lp_b=totalAbsence('terminal','lp','b',$db,3,'');
       $Mois_Mars_terminal_lp_c=totalAbsence('terminal','lp','c',$db,3,'');
       $Mois_Mars_terminal_lp_d=totalAbsence('terminal','lp','d',$db,3,'');
       $Mois_Mars_terminal_lp_total=$Mois_Mars_terminal_lp_a+$Mois_Mars_terminal_lp_b+$Mois_Mars_terminal_lp_c+$Mois_Mars_terminal_lp_d;
       $serie_lp_total_mois_Mars=$Mois_Mars_seconde_lp_total+$Mois_Mars_premiere_lp_total+$Mois_Mars_terminal_lp_total;

                                    //-----------------------Mars------------------- /
        $Mois_Avril_seconde_lp_a=totalAbsence('seconde','lp','a',$db,4,'');
       $Mois_Avril_seconde_lp_b=totalAbsence('seconde','lp','b',$db,4,'');
       $Mois_Avril_seconde_lp_c=totalAbsence('seconde','lp','c',$db,4,'');
       $Mois_Avril_seconde_lp_d=totalAbsence('seconde','lp','d',$db,4,'');
       $Mois_Avril_seconde_lp_total=$Mois_Avril_seconde_lp_a+$Mois_Avril_seconde_lp_b+$Mois_Avril_seconde_lp_c+$Mois_Avril_seconde_lp_d;
         
       $Mois_Avril_premiere_lp_a=totalAbsence('premiere','lp','a',$db,4,'');
       $Mois_Avril_premiere_lp_b=totalAbsence('premiere','lp','b',$db,4,'');
       $Mois_Avril_premiere_lp_c=totalAbsence('premiere','lp','c',$db,4,'');
       $Mois_Avril_premiere_lp_d=totalAbsence('premiere','lp','d',$db,4,'');
       $Mois_Avril_premiere_lp_total=$Mois_Avril_premiere_lp_a+$Mois_Avril_premiere_lp_b+$Mois_Avril_premiere_lp_c+$Mois_Avril_premiere_lp_d;

       $Mois_Avril_terminal_lp_a=totalAbsence('terminal','lp','a',$db,4,'');
       $Mois_Avril_terminal_lp_b=totalAbsence('terminal','lp','b',$db,4,'');
       $Mois_Avril_terminal_lp_c=totalAbsence('terminal','lp','c',$db,4,'');
       $Mois_Avril_terminal_lp_d=totalAbsence('terminal','lp','d',$db,4,'');
       $Mois_Avril_terminal_lp_total=$Mois_Avril_terminal_lp_a+$Mois_Avril_terminal_lp_b+$Mois_Avril_terminal_lp_c+$Mois_Avril_terminal_lp_d;
       $serie_lp_total_mois_Avril=$Mois_Avril_seconde_lp_total+$Mois_Avril_premiere_lp_total+$Mois_Avril_terminal_lp_total;

        //-----------------------Mai------------------- /
        $Mois_Mai_seconde_lp_a=totalAbsence('seconde','lp','a',$db,5,'');
       $Mois_Mai_seconde_lp_b=totalAbsence('seconde','lp','b',$db,5,'');
       $Mois_Mai_seconde_lp_c=totalAbsence('seconde','lp','c',$db,5,'');
       $Mois_Mai_seconde_lp_d=totalAbsence('seconde','lp','d',$db,5,'');
       $Mois_Mai_seconde_lp_total=$Mois_Mai_seconde_lp_a+$Mois_Mai_seconde_lp_b+$Mois_Mai_seconde_lp_c+$Mois_Mai_seconde_lp_d;
         
       $Mois_Mai_premiere_lp_a=totalAbsence('premiere','lp','a',$db,5,'');
       $Mois_Mai_premiere_lp_b=totalAbsence('premiere','lp','b',$db,5,'');
       $Mois_Mai_premiere_lp_c=totalAbsence('premiere','lp','c',$db,5,'');
       $Mois_Mai_premiere_lp_d=totalAbsence('premiere','lp','d',$db,5,'');
       $Mois_Mai_premiere_lp_total=$Mois_Mai_premiere_lp_a+$Mois_Mai_premiere_lp_b+$Mois_Mai_premiere_lp_c+$Mois_Mai_premiere_lp_d;

       $Mois_Mai_terminal_lp_a=totalAbsence('terminal','lp','a',$db,5,'');
       $Mois_Mai_terminal_lp_b=totalAbsence('terminal','lp','b',$db,5,'');
       $Mois_Mai_terminal_lp_c=totalAbsence('terminal','lp','c',$db,5,'');
       $Mois_Mai_terminal_lp_d=totalAbsence('terminal','lp','d',$db,5,'');
       $Mois_Mai_terminal_lp_total=$Mois_Mai_terminal_lp_a+$Mois_Mai_terminal_lp_b+$Mois_Mai_terminal_lp_c+$Mois_Mai_terminal_lp_d;
       $serie_lp_total_mois_Mai=$Mois_Mai_seconde_lp_total+$Mois_Mai_premiere_lp_total+$Mois_Mai_terminal_lp_total;
        //-----------------------Juin------------------- /
        $Mois_Juin_seconde_lp_a=totalAbsence('seconde','lp','a',$db,6,'');
       $Mois_Juin_seconde_lp_b=totalAbsence('seconde','lp','b',$db,6,'');
       $Mois_Juin_seconde_lp_c=totalAbsence('seconde','lp','c',$db,6,'');
       $Mois_Juin_seconde_lp_d=totalAbsence('seconde','lp','d',$db,6,'');
       $Mois_Juin_seconde_lp_total=$Mois_Juin_seconde_lp_a+$Mois_Juin_seconde_lp_b+$Mois_Juin_seconde_lp_c+$Mois_Juin_seconde_lp_d;
         
       $Mois_Juin_premiere_lp_a=totalAbsence('premiere','lp','a',$db,6,'');
       $Mois_Juin_premiere_lp_b=totalAbsence('premiere','lp','b',$db,6,'');
       $Mois_Juin_premiere_lp_c=totalAbsence('premiere','lp','c',$db,6,'');
       $Mois_Juin_premiere_lp_d=totalAbsence('premiere','lp','d',$db,6,'');
       $Mois_Juin_premiere_lp_total=$Mois_Juin_premiere_lp_a+$Mois_Juin_premiere_lp_b+$Mois_Juin_premiere_lp_c+$Mois_Juin_premiere_lp_d;

       $Mois_Juin_terminal_lp_a=totalAbsence('terminal','lp','a',$db,6,'');
       $Mois_Juin_terminal_lp_b=totalAbsence('terminal','lp','b',$db,6,'');
       $Mois_Juin_terminal_lp_c=totalAbsence('terminal','lp','c',$db,6,'');
       $Mois_Juin_terminal_lp_d=totalAbsence('terminal','lp','d',$db,6,'');
       $Mois_Juin_terminal_lp_total=$Mois_Juin_terminal_lp_a+$Mois_Juin_terminal_lp_b+$Mois_Juin_terminal_lp_c+$Mois_Juin_terminal_lp_d;
       $serie_lp_total_mois_Juin=$Mois_Juin_seconde_lp_total+$Mois_Juin_premiere_lp_total+$Mois_Juin_terminal_lp_total;
        //-----------------------Juillet------------------- /
        $Mois_Juillet_seconde_lp_a=totalAbsence('seconde','lp','a',$db,7,'');
       $Mois_Juillet_seconde_lp_b=totalAbsence('seconde','lp','b',$db,7,'');
       $Mois_Juillet_seconde_lp_c=totalAbsence('seconde','lp','c',$db,7,'');
       $Mois_Juillet_seconde_lp_d=totalAbsence('seconde','lp','d',$db,7,'');
       $Mois_Juillet_seconde_lp_total=$Mois_Juillet_seconde_lp_a+$Mois_Juillet_seconde_lp_b+$Mois_Juillet_seconde_lp_c+$Mois_Juillet_seconde_lp_d;
         
       $Mois_Juillet_premiere_lp_a=totalAbsence('premiere','lp','a',$db,7,'');
       $Mois_Juillet_premiere_lp_b=totalAbsence('premiere','lp','b',$db,7,'');
       $Mois_Juillet_premiere_lp_c=totalAbsence('premiere','lp','c',$db,7,'');
       $Mois_Juillet_premiere_lp_d=totalAbsence('premiere','lp','d',$db,7,'');
       $Mois_Juillet_premiere_lp_total=$Mois_Juillet_premiere_lp_a+$Mois_Juillet_premiere_lp_b+$Mois_Juillet_premiere_lp_c+$Mois_Juillet_premiere_lp_d;

       $Mois_Juillet_terminal_lp_a=totalAbsence('terminal','lp','a',$db,7,'');
       $Mois_Juillet_terminal_lp_b=totalAbsence('terminal','lp','b',$db,7,'');
       $Mois_Juillet_terminal_lp_c=totalAbsence('terminal','lp','c',$db,7,'');
       $Mois_Juillet_terminal_lp_d=totalAbsence('terminal','lp','d',$db,7,'');
       $Mois_Juillet_terminal_lp_total=$Mois_Juillet_terminal_lp_a+$Mois_Juillet_terminal_lp_b+$Mois_Juillet_terminal_lp_c+$Mois_Juillet_terminal_lp_d;
       $serie_lp_total_mois_Juillet=$Mois_Juillet_seconde_lp_total+$Mois_Juillet_premiere_lp_total+$Mois_Juillet_terminal_lp_total;
        //-----------------------Octobre------------------- /
        $Mois_Octobre_seconde_lp_a=totalAbsence('seconde','lp','a',$db,10,'');
       $Mois_Octobre_seconde_lp_b=totalAbsence('seconde','lp','b',$db,10,'');
       $Mois_Octobre_seconde_lp_c=totalAbsence('seconde','lp','c',$db,10,'');
       $Mois_Octobre_seconde_lp_d=totalAbsence('seconde','lp','d',$db,10,'');
       $Mois_Octobre_seconde_lp_total=$Mois_Octobre_seconde_lp_a+$Mois_Octobre_seconde_lp_b+$Mois_Octobre_seconde_lp_c+$Mois_Octobre_seconde_lp_d;
         
       $Mois_Octobre_premiere_lp_a=totalAbsence('premiere','lp','a',$db,10,'');
       $Mois_Octobre_premiere_lp_b=totalAbsence('premiere','lp','b',$db,10,'');
       $Mois_Octobre_premiere_lp_c=totalAbsence('premiere','lp','c',$db,10,'');
       $Mois_Octobre_premiere_lp_d=totalAbsence('premiere','lp','d',$db,10,'');
       $Mois_Octobre_premiere_lp_total=$Mois_Octobre_premiere_lp_a+$Mois_Octobre_premiere_lp_b+$Mois_Octobre_premiere_lp_c+$Mois_Octobre_premiere_lp_d;

       $Mois_Octobre_terminal_lp_a=totalAbsence('terminal','lp','a',$db,10,'');
       $Mois_Octobre_terminal_lp_b=totalAbsence('terminal','lp','b',$db,10,'');
       $Mois_Octobre_terminal_lp_c=totalAbsence('terminal','lp','c',$db,10,'');
       $Mois_Octobre_terminal_lp_d=totalAbsence('terminal','lp','d',$db,10,'');
       $Mois_Octobre_terminal_lp_total=$Mois_Octobre_terminal_lp_a+$Mois_Octobre_terminal_lp_b+$Mois_Octobre_terminal_lp_c+$Mois_Octobre_terminal_lp_d;
       $serie_lp_total_mois_Octobre=$Mois_Octobre_seconde_lp_total+$Mois_Octobre_premiere_lp_total+$Mois_Octobre_terminal_lp_total;
        //-----------------------Novembre------------------- /
        $Mois_Novembre_seconde_lp_a=totalAbsence('seconde','lp','a',$db,11,'');
       $Mois_Novembre_seconde_lp_b=totalAbsence('seconde','lp','b',$db,11,'');
       $Mois_Novembre_seconde_lp_c=totalAbsence('seconde','lp','c',$db,11,'');
       $Mois_Novembre_seconde_lp_d=totalAbsence('seconde','lp','d',$db,11,'');
       $Mois_Novembre_seconde_lp_total=$Mois_Novembre_seconde_lp_a+$Mois_Novembre_seconde_lp_b+$Mois_Novembre_seconde_lp_c+$Mois_Novembre_seconde_lp_d;
         
       $Mois_Novembre_premiere_lp_a=totalAbsence('premiere','lp','a',$db,11,'');
       $Mois_Novembre_premiere_lp_b=totalAbsence('premiere','lp','b',$db,11,'');
       $Mois_Novembre_premiere_lp_c=totalAbsence('premiere','lp','c',$db,11,'');
       $Mois_Novembre_premiere_lp_d=totalAbsence('premiere','lp','d',$db,11,'');
       $Mois_Novembre_premiere_lp_total=$Mois_Novembre_premiere_lp_a+$Mois_Novembre_premiere_lp_b+$Mois_Novembre_premiere_lp_c+$Mois_Novembre_premiere_lp_d;

       $Mois_Novembre_terminal_lp_a=totalAbsence('terminal','lp','a',$db,11,'');
       $Mois_Novembre_terminal_lp_b=totalAbsence('terminal','lp','b',$db,11,'');
       $Mois_Novembre_terminal_lp_c=totalAbsence('terminal','lp','c',$db,11,'');
       $Mois_Novembre_terminal_lp_d=totalAbsence('terminal','lp','d',$db,11,'');
       $Mois_Novembre_terminal_lp_total=$Mois_Novembre_terminal_lp_a+$Mois_Novembre_terminal_lp_b+$Mois_Novembre_terminal_lp_c+$Mois_Novembre_terminal_lp_d;
       $serie_lp_total_mois_Novembre=$Mois_Novembre_seconde_lp_total+$Mois_Novembre_premiere_lp_total+$Mois_Novembre_terminal_lp_total;
        //-----------------------Decembre------------------- /
        $Mois_Decembre_seconde_lp_a=totalAbsence('seconde','lp','a',$db,12,'');
       $Mois_Decembre_seconde_lp_b=totalAbsence('seconde','lp','b',$db,12,'');
       $Mois_Decembre_seconde_lp_c=totalAbsence('seconde','lp','c',$db,12,'');
       $Mois_Decembre_seconde_lp_d=totalAbsence('seconde','lp','d',$db,12,'');
       $Mois_Decembre_seconde_lp_total=$Mois_Decembre_seconde_lp_a+$Mois_Decembre_seconde_lp_b+$Mois_Decembre_seconde_lp_c+$Mois_Decembre_seconde_lp_d;
         
       $Mois_Decembre_premiere_lp_a=totalAbsence('premiere','lp','a',$db,12,'');
       $Mois_Decembre_premiere_lp_b=totalAbsence('premiere','lp','b',$db,12,'');
       $Mois_Decembre_premiere_lp_c=totalAbsence('premiere','lp','c',$db,12,'');
       $Mois_Decembre_premiere_lp_d=totalAbsence('premiere','lp','d',$db,12,'');
       $Mois_Decembre_premiere_lp_total=$Mois_Decembre_premiere_lp_a+$Mois_Decembre_premiere_lp_b+$Mois_Decembre_premiere_lp_c+$Mois_Decembre_premiere_lp_d;

       $Mois_Decembre_terminal_lp_a=totalAbsence('terminal','lp','a',$db,12,'');
       $Mois_Decembre_terminal_lp_b=totalAbsence('terminal','lp','b',$db,12,'');
       $Mois_Decembre_terminal_lp_c=totalAbsence('terminal','lp','c',$db,12,'');
       $Mois_Decembre_terminal_lp_d=totalAbsence('terminal','lp','d',$db,12,'');
       $Mois_Decembre_terminal_lp_total=$Mois_Decembre_terminal_lp_a+$Mois_Decembre_terminal_lp_b+$Mois_Decembre_terminal_lp_c+$Mois_Decembre_terminal_lp_d;
       $serie_lp_total_mois_Decembre=$Mois_Decembre_seconde_lp_total+$Mois_Decembre_premiere_lp_total+$Mois_Decembre_terminal_lp_total;

     
?>