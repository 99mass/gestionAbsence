<?php 

/**
 * Serie t
 */

          require_once("../../core/series/dbSerie_t.php");
//        *********************************Jour Actuelle*************//
       $serie_seconde_t_a=totalAbsence('seconde','t','a',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_t_b=totalAbsence('seconde','t','b',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_t_c=totalAbsence('seconde','t','c',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_t_d=totalAbsence('seconde','t','d',$db,$moisActuelle,$jourActuelle);
       $serie_seconde_t_total=$serie_seconde_t_a+$serie_seconde_t_b+$serie_seconde_t_c+$serie_seconde_t_d;
         
       $serie_premiere_t_a=totalAbsence('premiere','t','a',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_t_b=totalAbsence('premiere','t','b',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_t_c=totalAbsence('premiere','t','c',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_t_d=totalAbsence('premiere','t','d',$db,$moisActuelle,$jourActuelle);
       $serie_premiere_t_total=$serie_premiere_t_a+$serie_premiere_t_b+$serie_premiere_t_c+$serie_premiere_t_d;

       $serie_terminal_t_a=totalAbsence('terminal','t','a',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_t_b=totalAbsence('terminal','t','b',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_t_c=totalAbsence('terminal','t','c',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_t_d=totalAbsence('terminal','t','d',$db,$moisActuelle,$jourActuelle);
       $serie_terminal_t_total=$serie_terminal_t_a+$serie_terminal_t_b+$serie_terminal_t_c+$serie_terminal_t_d;
       $serie_t_total=$serie_seconde_t_total+$serie_premiere_t_total+$serie_terminal_t_total;


//        *********************Suivant le Mois Courant****************//
       $Mois_courant_seconde_t_a=totalAbsence('seconde','t','a',$db,$moisActuelle,'');
       $Mois_courant_seconde_t_b=totalAbsence('seconde','t','b',$db,$moisActuelle,'');
       $Mois_courant_seconde_t_c=totalAbsence('seconde','t','c',$db,$moisActuelle,'');
       $Mois_courant_seconde_t_d=totalAbsence('seconde','t','d',$db,$moisActuelle,'');
       $Mois_courant_seconde_t_total=$Mois_courant_seconde_t_a+$Mois_courant_seconde_t_b+$Mois_courant_seconde_t_c+$Mois_courant_seconde_t_d;
         
       $Mois_courant_premiere_t_a=totalAbsence('premiere','t','a',$db,$moisActuelle,'');
       $Mois_courant_premiere_t_b=totalAbsence('premiere','t','b',$db,$moisActuelle,'');
       $Mois_courant_premiere_t_c=totalAbsence('premiere','t','c',$db,$moisActuelle,'');
       $Mois_courant_premiere_t_d=totalAbsence('premiere','t','d',$db,$moisActuelle,'');
       $Mois_courant_premiere_t_total=$Mois_courant_premiere_t_a+$Mois_courant_premiere_t_b+$Mois_courant_premiere_t_c+$Mois_courant_premiere_t_d;

       $Mois_courant_terminal_t_a=totalAbsence('terminal','t','a',$db,$moisActuelle,'');
       $Mois_courant_terminal_t_b=totalAbsence('terminal','t','b',$db,$moisActuelle,'');
       $Mois_courant_terminal_t_c=totalAbsence('terminal','t','c',$db,$moisActuelle,'');
       $Mois_courant_terminal_t_d=totalAbsence('terminal','t','d',$db,$moisActuelle,'');
       $Mois_courant_terminal_t_total=$Mois_courant_terminal_t_a+$Mois_courant_terminal_t_b+$Mois_courant_terminal_t_c+$Mois_courant_terminal_t_d;
       $serie_t_total_mois_courant=$Mois_courant_seconde_t_total+$Mois_courant_premiere_t_total+$Mois_courant_terminal_t_total;
  
       
       
 //        *********************Suivant les Differente Mois ****************//
       // -----------------Janvier---------------------------//
       $Mois_Janvier_seconde_t_a=totalAbsence('seconde','t','a',$db,1,'');
       $Mois_Janvier_seconde_t_b=totalAbsence('seconde','t','b',$db,1,'');
       $Mois_Janvier_seconde_t_c=totalAbsence('seconde','t','c',$db,1,'');
       $Mois_Janvier_seconde_t_d=totalAbsence('seconde','t','d',$db,1,'');
       $Mois_Janvier_seconde_t_total=$Mois_Janvier_seconde_t_a+$Mois_Janvier_seconde_t_b+$Mois_Janvier_seconde_t_c+$Mois_Janvier_seconde_t_d;
         
       $Mois_Janvier_premiere_t_a=totalAbsence('premiere','t','a',$db,1,'');
       $Mois_Janvier_premiere_t_b=totalAbsence('premiere','t','b',$db,1,'');
       $Mois_Janvier_premiere_t_c=totalAbsence('premiere','t','c',$db,1,'');
       $Mois_Janvier_premiere_t_d=totalAbsence('premiere','t','d',$db,1,'');
       $Mois_Janvier_premiere_t_total=$Mois_Janvier_premiere_t_a+$Mois_Janvier_premiere_t_b+$Mois_Janvier_premiere_t_c+$Mois_Janvier_premiere_t_d;

       $Mois_Janvier_terminal_t_a=totalAbsence('terminal','t','a',$db,1,'');
       $Mois_Janvier_terminal_t_b=totalAbsence('terminal','t','b',$db,1,'');
       $Mois_Janvier_terminal_t_c=totalAbsence('terminal','t','c',$db,1,'');
       $Mois_Janvier_terminal_t_d=totalAbsence('terminal','t','d',$db,1,'');
       $Mois_Janvier_terminal_t_total=$Mois_Janvier_terminal_t_a+$Mois_Janvier_terminal_t_b+$Mois_Janvier_terminal_t_c+$Mois_Janvier_terminal_t_d;
       $serie_t_total_mois_Janvier=$Mois_Janvier_seconde_t_total+$Mois_Janvier_premiere_t_total+$Mois_Janvier_terminal_t_total;
                                   //-----------------------Fevrier------------------- /
        $Mois_Fevrier_seconde_t_a=totalAbsence('seconde','t','a',$db,2,'');
       $Mois_Fevrier_seconde_t_b=totalAbsence('seconde','t','b',$db,2,'');
       $Mois_Fevrier_seconde_t_c=totalAbsence('seconde','t','c',$db,2,'');
       $Mois_Fevrier_seconde_t_d=totalAbsence('seconde','t','d',$db,2,'');
       $Mois_Fevrier_seconde_t_total=$Mois_Fevrier_seconde_t_a+$Mois_Fevrier_seconde_t_b+$Mois_Fevrier_seconde_t_c+$Mois_Fevrier_seconde_t_d;
         
       $Mois_Fevrier_premiere_t_a=totalAbsence('premiere','t','a',$db,2,'');
       $Mois_Fevrier_premiere_t_b=totalAbsence('premiere','t','b',$db,2,'');
       $Mois_Fevrier_premiere_t_c=totalAbsence('premiere','t','c',$db,2,'');
       $Mois_Fevrier_premiere_t_d=totalAbsence('premiere','t','d',$db,2,'');
       $Mois_Fevrier_premiere_t_total=$Mois_Fevrier_premiere_t_a+$Mois_Fevrier_premiere_t_b+$Mois_Fevrier_premiere_t_c+$Mois_Fevrier_premiere_t_d;

       $Mois_Fevrier_terminal_t_a=totalAbsence('terminal','t','a',$db,2,'');
       $Mois_Fevrier_terminal_t_b=totalAbsence('terminal','t','b',$db,2,'');
       $Mois_Fevrier_terminal_t_c=totalAbsence('terminal','t','c',$db,2,'');
       $Mois_Fevrier_terminal_t_d=totalAbsence('terminal','t','d',$db,2,'');
       $Mois_Fevrier_terminal_t_total=$Mois_Fevrier_terminal_t_a+$Mois_Fevrier_terminal_t_b+$Mois_Fevrier_terminal_t_c+$Mois_Fevrier_terminal_t_d;
       $serie_t_total_mois_Fevrier=$Mois_Fevrier_seconde_t_total+$Mois_Fevrier_premiere_t_total+$Mois_Fevrier_terminal_t_total;
                                    //-----------------------Mars------------------- /
        $Mois_Mars_seconde_t_a=totalAbsence('seconde','t','a',$db,3,'');
       $Mois_Mars_seconde_t_b=totalAbsence('seconde','t','b',$db,3,'');
       $Mois_Mars_seconde_t_c=totalAbsence('seconde','t','c',$db,3,'');
       $Mois_Mars_seconde_t_d=totalAbsence('seconde','t','d',$db,3,'');
       $Mois_Mars_seconde_t_total=$Mois_Mars_seconde_t_a+$Mois_Mars_seconde_t_b+$Mois_Mars_seconde_t_c+$Mois_Mars_seconde_t_d;
         
       $Mois_Mars_premiere_t_a=totalAbsence('premiere','t','a',$db,3,'');
       $Mois_Mars_premiere_t_b=totalAbsence('premiere','t','b',$db,3,'');
       $Mois_Mars_premiere_t_c=totalAbsence('premiere','t','c',$db,3,'');
       $Mois_Mars_premiere_t_d=totalAbsence('premiere','t','d',$db,3,'');
       $Mois_Mars_premiere_t_total=$Mois_Mars_premiere_t_a+$Mois_Mars_premiere_t_b+$Mois_Mars_premiere_t_c+$Mois_Mars_premiere_t_d;

       $Mois_Mars_terminal_t_a=totalAbsence('terminal','t','a',$db,3,'');
       $Mois_Mars_terminal_t_b=totalAbsence('terminal','t','b',$db,3,'');
       $Mois_Mars_terminal_t_c=totalAbsence('terminal','t','c',$db,3,'');
       $Mois_Mars_terminal_t_d=totalAbsence('terminal','t','d',$db,3,'');
       $Mois_Mars_terminal_t_total=$Mois_Mars_terminal_t_a+$Mois_Mars_terminal_t_b+$Mois_Mars_terminal_t_c+$Mois_Mars_terminal_t_d;
       $serie_t_total_mois_Mars=$Mois_Mars_seconde_t_total+$Mois_Mars_premiere_t_total+$Mois_Mars_terminal_t_total;

                                    //-----------------------Mars------------------- /
        $Mois_Avril_seconde_t_a=totalAbsence('seconde','t','a',$db,4,'');
       $Mois_Avril_seconde_t_b=totalAbsence('seconde','t','b',$db,4,'');
       $Mois_Avril_seconde_t_c=totalAbsence('seconde','t','c',$db,4,'');
       $Mois_Avril_seconde_t_d=totalAbsence('seconde','t','d',$db,4,'');
       $Mois_Avril_seconde_t_total=$Mois_Avril_seconde_t_a+$Mois_Avril_seconde_t_b+$Mois_Avril_seconde_t_c+$Mois_Avril_seconde_t_d;
         
       $Mois_Avril_premiere_t_a=totalAbsence('premiere','t','a',$db,4,'');
       $Mois_Avril_premiere_t_b=totalAbsence('premiere','t','b',$db,4,'');
       $Mois_Avril_premiere_t_c=totalAbsence('premiere','t','c',$db,4,'');
       $Mois_Avril_premiere_t_d=totalAbsence('premiere','t','d',$db,4,'');
       $Mois_Avril_premiere_t_total=$Mois_Avril_premiere_t_a+$Mois_Avril_premiere_t_b+$Mois_Avril_premiere_t_c+$Mois_Avril_premiere_t_d;

       $Mois_Avril_terminal_t_a=totalAbsence('terminal','t','a',$db,4,'');
       $Mois_Avril_terminal_t_b=totalAbsence('terminal','t','b',$db,4,'');
       $Mois_Avril_terminal_t_c=totalAbsence('terminal','t','c',$db,4,'');
       $Mois_Avril_terminal_t_d=totalAbsence('terminal','t','d',$db,4,'');
       $Mois_Avril_terminal_t_total=$Mois_Avril_terminal_t_a+$Mois_Avril_terminal_t_b+$Mois_Avril_terminal_t_c+$Mois_Avril_terminal_t_d;
       $serie_t_total_mois_Avril=$Mois_Avril_seconde_t_total+$Mois_Avril_premiere_t_total+$Mois_Avril_terminal_t_total;

        //-----------------------Mai------------------- /
        $Mois_Mai_seconde_t_a=totalAbsence('seconde','t','a',$db,5,'');
       $Mois_Mai_seconde_t_b=totalAbsence('seconde','t','b',$db,5,'');
       $Mois_Mai_seconde_t_c=totalAbsence('seconde','t','c',$db,5,'');
       $Mois_Mai_seconde_t_d=totalAbsence('seconde','t','d',$db,5,'');
       $Mois_Mai_seconde_t_total=$Mois_Mai_seconde_t_a+$Mois_Mai_seconde_t_b+$Mois_Mai_seconde_t_c+$Mois_Mai_seconde_t_d;
         
       $Mois_Mai_premiere_t_a=totalAbsence('premiere','t','a',$db,5,'');
       $Mois_Mai_premiere_t_b=totalAbsence('premiere','t','b',$db,5,'');
       $Mois_Mai_premiere_t_c=totalAbsence('premiere','t','c',$db,5,'');
       $Mois_Mai_premiere_t_d=totalAbsence('premiere','t','d',$db,5,'');
       $Mois_Mai_premiere_t_total=$Mois_Mai_premiere_t_a+$Mois_Mai_premiere_t_b+$Mois_Mai_premiere_t_c+$Mois_Mai_premiere_t_d;

       $Mois_Mai_terminal_t_a=totalAbsence('terminal','t','a',$db,5,'');
       $Mois_Mai_terminal_t_b=totalAbsence('terminal','t','b',$db,5,'');
       $Mois_Mai_terminal_t_c=totalAbsence('terminal','t','c',$db,5,'');
       $Mois_Mai_terminal_t_d=totalAbsence('terminal','t','d',$db,5,'');
       $Mois_Mai_terminal_t_total=$Mois_Mai_terminal_t_a+$Mois_Mai_terminal_t_b+$Mois_Mai_terminal_t_c+$Mois_Mai_terminal_t_d;
       $serie_t_total_mois_Mai=$Mois_Mai_seconde_t_total+$Mois_Mai_premiere_t_total+$Mois_Mai_terminal_t_total;
        //-----------------------Juin------------------- /
        $Mois_Juin_seconde_t_a=totalAbsence('seconde','t','a',$db,6,'');
       $Mois_Juin_seconde_t_b=totalAbsence('seconde','t','b',$db,6,'');
       $Mois_Juin_seconde_t_c=totalAbsence('seconde','t','c',$db,6,'');
       $Mois_Juin_seconde_t_d=totalAbsence('seconde','t','d',$db,6,'');
       $Mois_Juin_seconde_t_total=$Mois_Juin_seconde_t_a+$Mois_Juin_seconde_t_b+$Mois_Juin_seconde_t_c+$Mois_Juin_seconde_t_d;
         
       $Mois_Juin_premiere_t_a=totalAbsence('premiere','t','a',$db,6,'');
       $Mois_Juin_premiere_t_b=totalAbsence('premiere','t','b',$db,6,'');
       $Mois_Juin_premiere_t_c=totalAbsence('premiere','t','c',$db,6,'');
       $Mois_Juin_premiere_t_d=totalAbsence('premiere','t','d',$db,6,'');
       $Mois_Juin_premiere_t_total=$Mois_Juin_premiere_t_a+$Mois_Juin_premiere_t_b+$Mois_Juin_premiere_t_c+$Mois_Juin_premiere_t_d;

       $Mois_Juin_terminal_t_a=totalAbsence('terminal','t','a',$db,6,'');
       $Mois_Juin_terminal_t_b=totalAbsence('terminal','t','b',$db,6,'');
       $Mois_Juin_terminal_t_c=totalAbsence('terminal','t','c',$db,6,'');
       $Mois_Juin_terminal_t_d=totalAbsence('terminal','t','d',$db,6,'');
       $Mois_Juin_terminal_t_total=$Mois_Juin_terminal_t_a+$Mois_Juin_terminal_t_b+$Mois_Juin_terminal_t_c+$Mois_Juin_terminal_t_d;
       $serie_t_total_mois_Juin=$Mois_Juin_seconde_t_total+$Mois_Juin_premiere_t_total+$Mois_Juin_terminal_t_total;
        //-----------------------Juillet------------------- /
        $Mois_Juillet_seconde_t_a=totalAbsence('seconde','t','a',$db,7,'');
       $Mois_Juillet_seconde_t_b=totalAbsence('seconde','t','b',$db,7,'');
       $Mois_Juillet_seconde_t_c=totalAbsence('seconde','t','c',$db,7,'');
       $Mois_Juillet_seconde_t_d=totalAbsence('seconde','t','d',$db,7,'');
       $Mois_Juillet_seconde_t_total=$Mois_Juillet_seconde_t_a+$Mois_Juillet_seconde_t_b+$Mois_Juillet_seconde_t_c+$Mois_Juillet_seconde_t_d;
         
       $Mois_Juillet_premiere_t_a=totalAbsence('premiere','t','a',$db,7,'');
       $Mois_Juillet_premiere_t_b=totalAbsence('premiere','t','b',$db,7,'');
       $Mois_Juillet_premiere_t_c=totalAbsence('premiere','t','c',$db,7,'');
       $Mois_Juillet_premiere_t_d=totalAbsence('premiere','t','d',$db,7,'');
       $Mois_Juillet_premiere_t_total=$Mois_Juillet_premiere_t_a+$Mois_Juillet_premiere_t_b+$Mois_Juillet_premiere_t_c+$Mois_Juillet_premiere_t_d;

       $Mois_Juillet_terminal_t_a=totalAbsence('terminal','t','a',$db,7,'');
       $Mois_Juillet_terminal_t_b=totalAbsence('terminal','t','b',$db,7,'');
       $Mois_Juillet_terminal_t_c=totalAbsence('terminal','t','c',$db,7,'');
       $Mois_Juillet_terminal_t_d=totalAbsence('terminal','t','d',$db,7,'');
       $Mois_Juillet_terminal_t_total=$Mois_Juillet_terminal_t_a+$Mois_Juillet_terminal_t_b+$Mois_Juillet_terminal_t_c+$Mois_Juillet_terminal_t_d;
       $serie_t_total_mois_Juillet=$Mois_Juillet_seconde_t_total+$Mois_Juillet_premiere_t_total+$Mois_Juillet_terminal_t_total;
        //-----------------------Octobre------------------- /
        $Mois_Octobre_seconde_t_a=totalAbsence('seconde','t','a',$db,10,'');
       $Mois_Octobre_seconde_t_b=totalAbsence('seconde','t','b',$db,10,'');
       $Mois_Octobre_seconde_t_c=totalAbsence('seconde','t','c',$db,10,'');
       $Mois_Octobre_seconde_t_d=totalAbsence('seconde','t','d',$db,10,'');
       $Mois_Octobre_seconde_t_total=$Mois_Octobre_seconde_t_a+$Mois_Octobre_seconde_t_b+$Mois_Octobre_seconde_t_c+$Mois_Octobre_seconde_t_d;
         
       $Mois_Octobre_premiere_t_a=totalAbsence('premiere','t','a',$db,10,'');
       $Mois_Octobre_premiere_t_b=totalAbsence('premiere','t','b',$db,10,'');
       $Mois_Octobre_premiere_t_c=totalAbsence('premiere','t','c',$db,10,'');
       $Mois_Octobre_premiere_t_d=totalAbsence('premiere','t','d',$db,10,'');
       $Mois_Octobre_premiere_t_total=$Mois_Octobre_premiere_t_a+$Mois_Octobre_premiere_t_b+$Mois_Octobre_premiere_t_c+$Mois_Octobre_premiere_t_d;

       $Mois_Octobre_terminal_t_a=totalAbsence('terminal','t','a',$db,10,'');
       $Mois_Octobre_terminal_t_b=totalAbsence('terminal','t','b',$db,10,'');
       $Mois_Octobre_terminal_t_c=totalAbsence('terminal','t','c',$db,10,'');
       $Mois_Octobre_terminal_t_d=totalAbsence('terminal','t','d',$db,10,'');
       $Mois_Octobre_terminal_t_total=$Mois_Octobre_terminal_t_a+$Mois_Octobre_terminal_t_b+$Mois_Octobre_terminal_t_c+$Mois_Octobre_terminal_t_d;
       $serie_t_total_mois_Octobre=$Mois_Octobre_seconde_t_total+$Mois_Octobre_premiere_t_total+$Mois_Octobre_terminal_t_total;
        //-----------------------Novembre------------------- /
        $Mois_Novembre_seconde_t_a=totalAbsence('seconde','t','a',$db,11,'');
       $Mois_Novembre_seconde_t_b=totalAbsence('seconde','t','b',$db,11,'');
       $Mois_Novembre_seconde_t_c=totalAbsence('seconde','t','c',$db,11,'');
       $Mois_Novembre_seconde_t_d=totalAbsence('seconde','t','d',$db,11,'');
       $Mois_Novembre_seconde_t_total=$Mois_Novembre_seconde_t_a+$Mois_Novembre_seconde_t_b+$Mois_Novembre_seconde_t_c+$Mois_Novembre_seconde_t_d;
         
       $Mois_Novembre_premiere_t_a=totalAbsence('premiere','t','a',$db,11,'');
       $Mois_Novembre_premiere_t_b=totalAbsence('premiere','t','b',$db,11,'');
       $Mois_Novembre_premiere_t_c=totalAbsence('premiere','t','c',$db,11,'');
       $Mois_Novembre_premiere_t_d=totalAbsence('premiere','t','d',$db,11,'');
       $Mois_Novembre_premiere_t_total=$Mois_Novembre_premiere_t_a+$Mois_Novembre_premiere_t_b+$Mois_Novembre_premiere_t_c+$Mois_Novembre_premiere_t_d;

       $Mois_Novembre_terminal_t_a=totalAbsence('terminal','t','a',$db,11,'');
       $Mois_Novembre_terminal_t_b=totalAbsence('terminal','t','b',$db,11,'');
       $Mois_Novembre_terminal_t_c=totalAbsence('terminal','t','c',$db,11,'');
       $Mois_Novembre_terminal_t_d=totalAbsence('terminal','t','d',$db,11,'');
       $Mois_Novembre_terminal_t_total=$Mois_Novembre_terminal_t_a+$Mois_Novembre_terminal_t_b+$Mois_Novembre_terminal_t_c+$Mois_Novembre_terminal_t_d;
       $serie_t_total_mois_Novembre=$Mois_Novembre_seconde_t_total+$Mois_Novembre_premiere_t_total+$Mois_Novembre_terminal_t_total;
        //-----------------------Decembre------------------- /
        $Mois_Decembre_seconde_t_a=totalAbsence('seconde','t','a',$db,12,'');
       $Mois_Decembre_seconde_t_b=totalAbsence('seconde','t','b',$db,12,'');
       $Mois_Decembre_seconde_t_c=totalAbsence('seconde','t','c',$db,12,'');
       $Mois_Decembre_seconde_t_d=totalAbsence('seconde','t','d',$db,12,'');
       $Mois_Decembre_seconde_t_total=$Mois_Decembre_seconde_t_a+$Mois_Decembre_seconde_t_b+$Mois_Decembre_seconde_t_c+$Mois_Decembre_seconde_t_d;
         
       $Mois_Decembre_premiere_t_a=totalAbsence('premiere','t','a',$db,12,'');
       $Mois_Decembre_premiere_t_b=totalAbsence('premiere','t','b',$db,12,'');
       $Mois_Decembre_premiere_t_c=totalAbsence('premiere','t','c',$db,12,'');
       $Mois_Decembre_premiere_t_d=totalAbsence('premiere','t','d',$db,12,'');
       $Mois_Decembre_premiere_t_total=$Mois_Decembre_premiere_t_a+$Mois_Decembre_premiere_t_b+$Mois_Decembre_premiere_t_c+$Mois_Decembre_premiere_t_d;

       $Mois_Decembre_terminal_t_a=totalAbsence('terminal','t','a',$db,12,'');
       $Mois_Decembre_terminal_t_b=totalAbsence('terminal','t','b',$db,12,'');
       $Mois_Decembre_terminal_t_c=totalAbsence('terminal','t','c',$db,12,'');
       $Mois_Decembre_terminal_t_d=totalAbsence('terminal','t','d',$db,12,'');
       $Mois_Decembre_terminal_t_total=$Mois_Decembre_terminal_t_a+$Mois_Decembre_terminal_t_b+$Mois_Decembre_terminal_t_c+$Mois_Decembre_terminal_t_d;
       $serie_t_total_mois_Decembre=$Mois_Decembre_seconde_t_total+$Mois_Decembre_premiere_t_total+$Mois_Decembre_terminal_t_total;

?>