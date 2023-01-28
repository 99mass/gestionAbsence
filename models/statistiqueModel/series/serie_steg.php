<?php 
          require_once("../../core/series/dbSerie_steg.php");
       //   serie steg
//        *********************************Jour Actuelle*************//
       $serie_seconde_steg_a=totalAbsence('seconde','steg','a',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_steg_b=totalAbsence('seconde','steg','b',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_steg_c=totalAbsence('seconde','steg','c',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_steg_d=totalAbsence('seconde','steg','d',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_steg_total=$serie_seconde_steg_a+$serie_seconde_steg_b+$serie_seconde_steg_c+$serie_seconde_steg_d;
         
       $serie_premiere_steg_a=totalAbsence('premiere','steg','a',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_steg_b=totalAbsence('premiere','steg','b',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_steg_c=totalAbsence('premiere','steg','c',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_steg_d=totalAbsence('premiere','steg','d',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_steg_total=$serie_premiere_steg_a+$serie_premiere_steg_b+$serie_premiere_steg_c+$serie_premiere_steg_d;

       $serie_terminal_steg_a=totalAbsence('terminal','steg','a',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_steg_b=totalAbsence('terminal','steg','b',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_steg_c=totalAbsence('terminal','steg','c',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_steg_d=totalAbsence('terminal','steg','d',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_steg_total=$serie_terminal_steg_a+$serie_terminal_steg_b+$serie_terminal_steg_c+$serie_terminal_steg_d;
       $serie_steg_total=$serie_seconde_steg_total+$serie_premiere_steg_total+$serie_terminal_steg_total;


//        *********************Suivant le Mois Courant****************//
       $Mois_courant_seconde_steg_a=totalAbsence('seconde','steg','a',$db,$moisActuelle,'');
       $Mois_courant_seconde_steg_b=totalAbsence('seconde','steg','b',$db,$moisActuelle,'');
       $Mois_courant_seconde_steg_c=totalAbsence('seconde','steg','c',$db,$moisActuelle,'');
       $Mois_courant_seconde_steg_d=totalAbsence('seconde','steg','d',$db,$moisActuelle,'');
       $Mois_courant_seconde_steg_total=$Mois_courant_seconde_steg_a+$Mois_courant_seconde_steg_b+$Mois_courant_seconde_steg_c+$Mois_courant_seconde_steg_d;
         
       $Mois_courant_premiere_steg_a=totalAbsence('premiere','steg','a',$db,$moisActuelle,'');
       $Mois_courant_premiere_steg_b=totalAbsence('premiere','steg','b',$db,$moisActuelle,'');
       $Mois_courant_premiere_steg_c=totalAbsence('premiere','steg','c',$db,$moisActuelle,'');
       $Mois_courant_premiere_steg_d=totalAbsence('premiere','steg','d',$db,$moisActuelle,'');
       $Mois_courant_premiere_steg_total=$Mois_courant_premiere_steg_a+$Mois_courant_premiere_steg_b+$Mois_courant_premiere_steg_c+$Mois_courant_premiere_steg_d;

       $Mois_courant_terminal_steg_a=totalAbsence('terminal','steg','a',$db,$moisActuelle,'');
       $Mois_courant_terminal_steg_b=totalAbsence('terminal','steg','b',$db,$moisActuelle,'');
       $Mois_courant_terminal_steg_c=totalAbsence('terminal','steg','c',$db,$moisActuelle,'');
       $Mois_courant_terminal_steg_d=totalAbsence('terminal','steg','d',$db,$moisActuelle,'');
       $Mois_courant_terminal_steg_total=$Mois_courant_terminal_steg_a+$Mois_courant_terminal_steg_b+$Mois_courant_terminal_steg_c+$Mois_courant_terminal_steg_d;
       $serie_steg_total_mois_courant=$Mois_courant_seconde_steg_total+$Mois_courant_premiere_steg_total+$Mois_courant_terminal_steg_total;
     

 //        *********************Suivant les Differente Mois ****************//
       // -----------------Janvier---------------------------//
       $Mois_Janvier_seconde_steg_a=totalAbsence('seconde','steg','a',$db,1,'');
       $Mois_Janvier_seconde_steg_b=totalAbsence('seconde','steg','b',$db,1,'');
       $Mois_Janvier_seconde_steg_c=totalAbsence('seconde','steg','c',$db,1,'');
       $Mois_Janvier_seconde_steg_d=totalAbsence('seconde','steg','d',$db,1,'');
       $Mois_Janvier_seconde_steg_total=$Mois_Janvier_seconde_steg_a+$Mois_Janvier_seconde_steg_b+$Mois_Janvier_seconde_steg_c+$Mois_Janvier_seconde_steg_d;
         
       $Mois_Janvier_premiere_steg_a=totalAbsence('premiere','steg','a',$db,1,'');
       $Mois_Janvier_premiere_steg_b=totalAbsence('premiere','steg','b',$db,1,'');
       $Mois_Janvier_premiere_steg_c=totalAbsence('premiere','steg','c',$db,1,'');
       $Mois_Janvier_premiere_steg_d=totalAbsence('premiere','steg','d',$db,1,'');
       $Mois_Janvier_premiere_steg_total=$Mois_Janvier_premiere_steg_a+$Mois_Janvier_premiere_steg_b+$Mois_Janvier_premiere_steg_c+$Mois_Janvier_premiere_steg_d;

       $Mois_Janvier_terminal_steg_a=totalAbsence('terminal','steg','a',$db,1,'');
       $Mois_Janvier_terminal_steg_b=totalAbsence('terminal','steg','b',$db,1,'');
       $Mois_Janvier_terminal_steg_c=totalAbsence('terminal','steg','c',$db,1,'');
       $Mois_Janvier_terminal_steg_d=totalAbsence('terminal','steg','d',$db,1,'');
       $Mois_Janvier_terminal_steg_total=$Mois_Janvier_terminal_steg_a+$Mois_Janvier_terminal_steg_b+$Mois_Janvier_terminal_steg_c+$Mois_Janvier_terminal_steg_d;
       $serie_steg_total_mois_Janvier=$Mois_Janvier_seconde_steg_total+$Mois_Janvier_premiere_steg_total+$Mois_Janvier_terminal_steg_total;
                                   //-----------------------Fevrier------------------- /
        $Mois_Fevrier_seconde_steg_a=totalAbsence('seconde','steg','a',$db,2,'');
       $Mois_Fevrier_seconde_steg_b=totalAbsence('seconde','steg','b',$db,2,'');
       $Mois_Fevrier_seconde_steg_c=totalAbsence('seconde','steg','c',$db,2,'');
       $Mois_Fevrier_seconde_steg_d=totalAbsence('seconde','steg','d',$db,2,'');
       $Mois_Fevrier_seconde_steg_total=$Mois_Fevrier_seconde_steg_a+$Mois_Fevrier_seconde_steg_b+$Mois_Fevrier_seconde_steg_c+$Mois_Fevrier_seconde_steg_d;
         
       $Mois_Fevrier_premiere_steg_a=totalAbsence('premiere','steg','a',$db,2,'');
       $Mois_Fevrier_premiere_steg_b=totalAbsence('premiere','steg','b',$db,2,'');
       $Mois_Fevrier_premiere_steg_c=totalAbsence('premiere','steg','c',$db,2,'');
       $Mois_Fevrier_premiere_steg_d=totalAbsence('premiere','steg','d',$db,2,'');
       $Mois_Fevrier_premiere_steg_total=$Mois_Fevrier_premiere_steg_a+$Mois_Fevrier_premiere_steg_b+$Mois_Fevrier_premiere_steg_c+$Mois_Fevrier_premiere_steg_d;

       $Mois_Fevrier_terminal_steg_a=totalAbsence('terminal','steg','a',$db,2,'');
       $Mois_Fevrier_terminal_steg_b=totalAbsence('terminal','steg','b',$db,2,'');
       $Mois_Fevrier_terminal_steg_c=totalAbsence('terminal','steg','c',$db,2,'');
       $Mois_Fevrier_terminal_steg_d=totalAbsence('terminal','steg','d',$db,2,'');
       $Mois_Fevrier_terminal_steg_total=$Mois_Fevrier_terminal_steg_a+$Mois_Fevrier_terminal_steg_b+$Mois_Fevrier_terminal_steg_c+$Mois_Fevrier_terminal_steg_d;
       $serie_steg_total_mois_Fevrier=$Mois_Fevrier_seconde_steg_total+$Mois_Fevrier_premiere_steg_total+$Mois_Fevrier_terminal_steg_total;
                                    //-----------------------Mars------------------- /
        $Mois_Mars_seconde_steg_a=totalAbsence('seconde','steg','a',$db,3,'');
       $Mois_Mars_seconde_steg_b=totalAbsence('seconde','steg','b',$db,3,'');
       $Mois_Mars_seconde_steg_c=totalAbsence('seconde','steg','c',$db,3,'');
       $Mois_Mars_seconde_steg_d=totalAbsence('seconde','steg','d',$db,3,'');
       $Mois_Mars_seconde_steg_total=$Mois_Mars_seconde_steg_a+$Mois_Mars_seconde_steg_b+$Mois_Mars_seconde_steg_c+$Mois_Mars_seconde_steg_d;
         
       $Mois_Mars_premiere_steg_a=totalAbsence('premiere','steg','a',$db,3,'');
       $Mois_Mars_premiere_steg_b=totalAbsence('premiere','steg','b',$db,3,'');
       $Mois_Mars_premiere_steg_c=totalAbsence('premiere','steg','c',$db,3,'');
       $Mois_Mars_premiere_steg_d=totalAbsence('premiere','steg','d',$db,3,'');
       $Mois_Mars_premiere_steg_total=$Mois_Mars_premiere_steg_a+$Mois_Mars_premiere_steg_b+$Mois_Mars_premiere_steg_c+$Mois_Mars_premiere_steg_d;

       $Mois_Mars_terminal_steg_a=totalAbsence('terminal','steg','a',$db,3,'');
       $Mois_Mars_terminal_steg_b=totalAbsence('terminal','steg','b',$db,3,'');
       $Mois_Mars_terminal_steg_c=totalAbsence('terminal','steg','c',$db,3,'');
       $Mois_Mars_terminal_steg_d=totalAbsence('terminal','steg','d',$db,3,'');
       $Mois_Mars_terminal_steg_total=$Mois_Mars_terminal_steg_a+$Mois_Mars_terminal_steg_b+$Mois_Mars_terminal_steg_c+$Mois_Mars_terminal_steg_d;
       $serie_steg_total_mois_Mars=$Mois_Mars_seconde_steg_total+$Mois_Mars_premiere_steg_total+$Mois_Mars_terminal_steg_total;

                                    //-----------------------Mars------------------- /
        $Mois_Avril_seconde_steg_a=totalAbsence('seconde','steg','a',$db,4,'');
       $Mois_Avril_seconde_steg_b=totalAbsence('seconde','steg','b',$db,4,'');
       $Mois_Avril_seconde_steg_c=totalAbsence('seconde','steg','c',$db,4,'');
       $Mois_Avril_seconde_steg_d=totalAbsence('seconde','steg','d',$db,4,'');
       $Mois_Avril_seconde_steg_total=$Mois_Avril_seconde_steg_a+$Mois_Avril_seconde_steg_b+$Mois_Avril_seconde_steg_c+$Mois_Avril_seconde_steg_d;
         
       $Mois_Avril_premiere_steg_a=totalAbsence('premiere','steg','a',$db,4,'');
       $Mois_Avril_premiere_steg_b=totalAbsence('premiere','steg','b',$db,4,'');
       $Mois_Avril_premiere_steg_c=totalAbsence('premiere','steg','c',$db,4,'');
       $Mois_Avril_premiere_steg_d=totalAbsence('premiere','steg','d',$db,4,'');
       $Mois_Avril_premiere_steg_total=$Mois_Avril_premiere_steg_a+$Mois_Avril_premiere_steg_b+$Mois_Avril_premiere_steg_c+$Mois_Avril_premiere_steg_d;

       $Mois_Avril_terminal_steg_a=totalAbsence('terminal','steg','a',$db,4,'');
       $Mois_Avril_terminal_steg_b=totalAbsence('terminal','steg','b',$db,4,'');
       $Mois_Avril_terminal_steg_c=totalAbsence('terminal','steg','c',$db,4,'');
       $Mois_Avril_terminal_steg_d=totalAbsence('terminal','steg','d',$db,4,'');
       $Mois_Avril_terminal_steg_total=$Mois_Avril_terminal_steg_a+$Mois_Avril_terminal_steg_b+$Mois_Avril_terminal_steg_c+$Mois_Avril_terminal_steg_d;
       $serie_steg_total_mois_Avril=$Mois_Avril_seconde_steg_total+$Mois_Avril_premiere_steg_total+$Mois_Avril_terminal_steg_total;

        //-----------------------Mai------------------- /
        $Mois_Mai_seconde_steg_a=totalAbsence('seconde','steg','a',$db,5,'');
       $Mois_Mai_seconde_steg_b=totalAbsence('seconde','steg','b',$db,5,'');
       $Mois_Mai_seconde_steg_c=totalAbsence('seconde','steg','c',$db,5,'');
       $Mois_Mai_seconde_steg_d=totalAbsence('seconde','steg','d',$db,5,'');
       $Mois_Mai_seconde_steg_total=$Mois_Mai_seconde_steg_a+$Mois_Mai_seconde_steg_b+$Mois_Mai_seconde_steg_c+$Mois_Mai_seconde_steg_d;
         
       $Mois_Mai_premiere_steg_a=totalAbsence('premiere','steg','a',$db,5,'');
       $Mois_Mai_premiere_steg_b=totalAbsence('premiere','steg','b',$db,5,'');
       $Mois_Mai_premiere_steg_c=totalAbsence('premiere','steg','c',$db,5,'');
       $Mois_Mai_premiere_steg_d=totalAbsence('premiere','steg','d',$db,5,'');
       $Mois_Mai_premiere_steg_total=$Mois_Mai_premiere_steg_a+$Mois_Mai_premiere_steg_b+$Mois_Mai_premiere_steg_c+$Mois_Mai_premiere_steg_d;

       $Mois_Mai_terminal_steg_a=totalAbsence('terminal','steg','a',$db,5,'');
       $Mois_Mai_terminal_steg_b=totalAbsence('terminal','steg','b',$db,5,'');
       $Mois_Mai_terminal_steg_c=totalAbsence('terminal','steg','c',$db,5,'');
       $Mois_Mai_terminal_steg_d=totalAbsence('terminal','steg','d',$db,5,'');
       $Mois_Mai_terminal_steg_total=$Mois_Mai_terminal_steg_a+$Mois_Mai_terminal_steg_b+$Mois_Mai_terminal_steg_c+$Mois_Mai_terminal_steg_d;
       $serie_steg_total_mois_Mai=$Mois_Mai_seconde_steg_total+$Mois_Mai_premiere_steg_total+$Mois_Mai_terminal_steg_total;
        //-----------------------Juin------------------- /
        $Mois_Juin_seconde_steg_a=totalAbsence('seconde','steg','a',$db,6,'');
       $Mois_Juin_seconde_steg_b=totalAbsence('seconde','steg','b',$db,6,'');
       $Mois_Juin_seconde_steg_c=totalAbsence('seconde','steg','c',$db,6,'');
       $Mois_Juin_seconde_steg_d=totalAbsence('seconde','steg','d',$db,6,'');
       $Mois_Juin_seconde_steg_total=$Mois_Juin_seconde_steg_a+$Mois_Juin_seconde_steg_b+$Mois_Juin_seconde_steg_c+$Mois_Juin_seconde_steg_d;
         
       $Mois_Juin_premiere_steg_a=totalAbsence('premiere','steg','a',$db,6,'');
       $Mois_Juin_premiere_steg_b=totalAbsence('premiere','steg','b',$db,6,'');
       $Mois_Juin_premiere_steg_c=totalAbsence('premiere','steg','c',$db,6,'');
       $Mois_Juin_premiere_steg_d=totalAbsence('premiere','steg','d',$db,6,'');
       $Mois_Juin_premiere_steg_total=$Mois_Juin_premiere_steg_a+$Mois_Juin_premiere_steg_b+$Mois_Juin_premiere_steg_c+$Mois_Juin_premiere_steg_d;

       $Mois_Juin_terminal_steg_a=totalAbsence('terminal','steg','a',$db,6,'');
       $Mois_Juin_terminal_steg_b=totalAbsence('terminal','steg','b',$db,6,'');
       $Mois_Juin_terminal_steg_c=totalAbsence('terminal','steg','c',$db,6,'');
       $Mois_Juin_terminal_steg_d=totalAbsence('terminal','steg','d',$db,6,'');
       $Mois_Juin_terminal_steg_total=$Mois_Juin_terminal_steg_a+$Mois_Juin_terminal_steg_b+$Mois_Juin_terminal_steg_c+$Mois_Juin_terminal_steg_d;
       $serie_steg_total_mois_Juin=$Mois_Juin_seconde_steg_total+$Mois_Juin_premiere_steg_total+$Mois_Juin_terminal_steg_total;
        //-----------------------Juillet------------------- /
        $Mois_Juillet_seconde_steg_a=totalAbsence('seconde','steg','a',$db,7,'');
       $Mois_Juillet_seconde_steg_b=totalAbsence('seconde','steg','b',$db,7,'');
       $Mois_Juillet_seconde_steg_c=totalAbsence('seconde','steg','c',$db,7,'');
       $Mois_Juillet_seconde_steg_d=totalAbsence('seconde','steg','d',$db,7,'');
       $Mois_Juillet_seconde_steg_total=$Mois_Juillet_seconde_steg_a+$Mois_Juillet_seconde_steg_b+$Mois_Juillet_seconde_steg_c+$Mois_Juillet_seconde_steg_d;
         
       $Mois_Juillet_premiere_steg_a=totalAbsence('premiere','steg','a',$db,7,'');
       $Mois_Juillet_premiere_steg_b=totalAbsence('premiere','steg','b',$db,7,'');
       $Mois_Juillet_premiere_steg_c=totalAbsence('premiere','steg','c',$db,7,'');
       $Mois_Juillet_premiere_steg_d=totalAbsence('premiere','steg','d',$db,7,'');
       $Mois_Juillet_premiere_steg_total=$Mois_Juillet_premiere_steg_a+$Mois_Juillet_premiere_steg_b+$Mois_Juillet_premiere_steg_c+$Mois_Juillet_premiere_steg_d;

       $Mois_Juillet_terminal_steg_a=totalAbsence('terminal','steg','a',$db,7,'');
       $Mois_Juillet_terminal_steg_b=totalAbsence('terminal','steg','b',$db,7,'');
       $Mois_Juillet_terminal_steg_c=totalAbsence('terminal','steg','c',$db,7,'');
       $Mois_Juillet_terminal_steg_d=totalAbsence('terminal','steg','d',$db,7,'');
       $Mois_Juillet_terminal_steg_total=$Mois_Juillet_terminal_steg_a+$Mois_Juillet_terminal_steg_b+$Mois_Juillet_terminal_steg_c+$Mois_Juillet_terminal_steg_d;
       $serie_steg_total_mois_Juillet=$Mois_Juillet_seconde_steg_total+$Mois_Juillet_premiere_steg_total+$Mois_Juillet_terminal_steg_total;
        //-----------------------Octobre------------------- /
        $Mois_Octobre_seconde_steg_a=totalAbsence('seconde','steg','a',$db,10,'');
       $Mois_Octobre_seconde_steg_b=totalAbsence('seconde','steg','b',$db,10,'');
       $Mois_Octobre_seconde_steg_c=totalAbsence('seconde','steg','c',$db,10,'');
       $Mois_Octobre_seconde_steg_d=totalAbsence('seconde','steg','d',$db,10,'');
       $Mois_Octobre_seconde_steg_total=$Mois_Octobre_seconde_steg_a+$Mois_Octobre_seconde_steg_b+$Mois_Octobre_seconde_steg_c+$Mois_Octobre_seconde_steg_d;
         
       $Mois_Octobre_premiere_steg_a=totalAbsence('premiere','steg','a',$db,10,'');
       $Mois_Octobre_premiere_steg_b=totalAbsence('premiere','steg','b',$db,10,'');
       $Mois_Octobre_premiere_steg_c=totalAbsence('premiere','steg','c',$db,10,'');
       $Mois_Octobre_premiere_steg_d=totalAbsence('premiere','steg','d',$db,10,'');
       $Mois_Octobre_premiere_steg_total=$Mois_Octobre_premiere_steg_a+$Mois_Octobre_premiere_steg_b+$Mois_Octobre_premiere_steg_c+$Mois_Octobre_premiere_steg_d;

       $Mois_Octobre_terminal_steg_a=totalAbsence('terminal','steg','a',$db,10,'');
       $Mois_Octobre_terminal_steg_b=totalAbsence('terminal','steg','b',$db,10,'');
       $Mois_Octobre_terminal_steg_c=totalAbsence('terminal','steg','c',$db,10,'');
       $Mois_Octobre_terminal_steg_d=totalAbsence('terminal','steg','d',$db,10,'');
       $Mois_Octobre_terminal_steg_total=$Mois_Octobre_terminal_steg_a+$Mois_Octobre_terminal_steg_b+$Mois_Octobre_terminal_steg_c+$Mois_Octobre_terminal_steg_d;
       $serie_steg_total_mois_Octobre=$Mois_Octobre_seconde_steg_total+$Mois_Octobre_premiere_steg_total+$Mois_Octobre_terminal_steg_total;
        //-----------------------Novembre------------------- /
        $Mois_Novembre_seconde_steg_a=totalAbsence('seconde','steg','a',$db,11,'');
       $Mois_Novembre_seconde_steg_b=totalAbsence('seconde','steg','b',$db,11,'');
       $Mois_Novembre_seconde_steg_c=totalAbsence('seconde','steg','c',$db,11,'');
       $Mois_Novembre_seconde_steg_d=totalAbsence('seconde','steg','d',$db,11,'');
       $Mois_Novembre_seconde_steg_total=$Mois_Novembre_seconde_steg_a+$Mois_Novembre_seconde_steg_b+$Mois_Novembre_seconde_steg_c+$Mois_Novembre_seconde_steg_d;
         
       $Mois_Novembre_premiere_steg_a=totalAbsence('premiere','steg','a',$db,11,'');
       $Mois_Novembre_premiere_steg_b=totalAbsence('premiere','steg','b',$db,11,'');
       $Mois_Novembre_premiere_steg_c=totalAbsence('premiere','steg','c',$db,11,'');
       $Mois_Novembre_premiere_steg_d=totalAbsence('premiere','steg','d',$db,11,'');
       $Mois_Novembre_premiere_steg_total=$Mois_Novembre_premiere_steg_a+$Mois_Novembre_premiere_steg_b+$Mois_Novembre_premiere_steg_c+$Mois_Novembre_premiere_steg_d;

       $Mois_Novembre_terminal_steg_a=totalAbsence('terminal','steg','a',$db,11,'');
       $Mois_Novembre_terminal_steg_b=totalAbsence('terminal','steg','b',$db,11,'');
       $Mois_Novembre_terminal_steg_c=totalAbsence('terminal','steg','c',$db,11,'');
       $Mois_Novembre_terminal_steg_d=totalAbsence('terminal','steg','d',$db,11,'');
       $Mois_Novembre_terminal_steg_total=$Mois_Novembre_terminal_steg_a+$Mois_Novembre_terminal_steg_b+$Mois_Novembre_terminal_steg_c+$Mois_Novembre_terminal_steg_d;
       $serie_steg_total_mois_Novembre=$Mois_Novembre_seconde_steg_total+$Mois_Novembre_premiere_steg_total+$Mois_Novembre_terminal_steg_total;
        //-----------------------Decembre------------------- /
        $Mois_Decembre_seconde_steg_a=totalAbsence('seconde','steg','a',$db,12,'');
       $Mois_Decembre_seconde_steg_b=totalAbsence('seconde','steg','b',$db,12,'');
       $Mois_Decembre_seconde_steg_c=totalAbsence('seconde','steg','c',$db,12,'');
       $Mois_Decembre_seconde_steg_d=totalAbsence('seconde','steg','d',$db,12,'');
       $Mois_Decembre_seconde_steg_total=$Mois_Decembre_seconde_steg_a+$Mois_Decembre_seconde_steg_b+$Mois_Decembre_seconde_steg_c+$Mois_Decembre_seconde_steg_d;
         
       $Mois_Decembre_premiere_steg_a=totalAbsence('premiere','steg','a',$db,12,'');
       $Mois_Decembre_premiere_steg_b=totalAbsence('premiere','steg','b',$db,12,'');
       $Mois_Decembre_premiere_steg_c=totalAbsence('premiere','steg','c',$db,12,'');
       $Mois_Decembre_premiere_steg_d=totalAbsence('premiere','steg','d',$db,12,'');
       $Mois_Decembre_premiere_steg_total=$Mois_Decembre_premiere_steg_a+$Mois_Decembre_premiere_steg_b+$Mois_Decembre_premiere_steg_c+$Mois_Decembre_premiere_steg_d;

       $Mois_Decembre_terminal_steg_a=totalAbsence('terminal','steg','a',$db,12,'');
       $Mois_Decembre_terminal_steg_b=totalAbsence('terminal','steg','b',$db,12,'');
       $Mois_Decembre_terminal_steg_c=totalAbsence('terminal','steg','c',$db,12,'');
       $Mois_Decembre_terminal_steg_d=totalAbsence('terminal','steg','d',$db,12,'');
       $Mois_Decembre_terminal_steg_total=$Mois_Decembre_terminal_steg_a+$Mois_Decembre_terminal_steg_b+$Mois_Decembre_terminal_steg_c+$Mois_Decembre_terminal_steg_d;
       $serie_steg_total_mois_Decembre=$Mois_Decembre_seconde_steg_total+$Mois_Decembre_premiere_steg_total+$Mois_Decembre_terminal_steg_total;

?>