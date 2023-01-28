
<?php 
        /**
         * requetes pour commpter l'effecteif de categories de personnes dans l'école
         */
    // Table personnell de la base 
                /**
                 * la function personnel() permet de compter le nombre de  SuperAdmin/Admin/Surveillant/Proffesseur
                 *
                 * @param [type] $role_AutrePersonnel
                 * @param [type] $dbase
                 */
             function personnel($role_AutrePersonnel,$dbase){
                $query=$dbase->query( "SELECT COUNT(*) AS total FROM personnel
                                        WHERE rolees='".$role_AutrePersonnel."' ");                      
                $result=$query->fetch();
                $total=$result['total'];
                return $total;
            }
            // appel a la base de données
             require_once("../../ab/core/dbpersonnelles.php");
            $effectif_Super_admin=personnel('SAD',$dataBase,'personnel');
            $effectif_admin=personnel('AD',$dataBase,'personnel');
            $effectif_Surveillant=personnel('SV',$dataBase);
            $effectif_Proffesseur=personnel('PF',$dataBase);

                /**
                 * la function effectif_eleve() permet d'avoir le nombre totale d'eleve suivant le Niveau la Serie et la Classe
                 *
                 * @param  $niveau
                 * @param  $serie
                 * @param  $classe
                 * @param  $idpers
                 * @param  $mois
                 * @param  $dbase
                 * @return void
                 */
             function  effectif_eleve($niveau,$serie,$classe,$dbase){
                $query=$dbase->query( "SELECT COUNT(*) AS total FROM {$niveau}_{$serie}_{$classe}");                      
                $result=$query->fetch();
                $total=$result['total'];
                return $total;
            }
    // ***********************************************//  
            /*
                *effectif Serie S1
            */ 
             require_once("../../ab/core/series/dbSerie_s1.php");

            $seconde_s1_a=effectif_eleve('seconde','s1','a',$db);
            $seconde_s1_b=effectif_eleve('seconde','s1','b',$db);
            $seconde_s1_c=effectif_eleve('seconde','s1','c',$db);
            $seconde_s1_d=effectif_eleve('seconde','s1','d',$db);
            $effectif_seconde_s1=$seconde_s1_a+$seconde_s1_b+$seconde_s1_c+$seconde_s1_d;

            $premiere_s1_a=effectif_eleve('premiere','s1','a',$db);
            $premiere_s1_b=effectif_eleve('premiere','s1','b',$db);
            $premiere_s1_c=effectif_eleve('premiere','s1','c',$db);
            $premiere_s1_d=effectif_eleve('premiere','s1','d',$db);
            $effectif_premiere_s1=$premiere_s1_a+$premiere_s1_b+$premiere_s1_c+$premiere_s1_d;

            $terminal_s1_a=effectif_eleve('terminal','s1','a',$db);
            $terminal_s1_b=effectif_eleve('terminal','s1','b',$db);
            $terminal_s1_c=effectif_eleve('terminal','s1','c',$db);
            $terminal_s1_d=effectif_eleve('terminal','s1','d',$db);
            $effectif_terminal_s1=$terminal_s1_a+$terminal_s1_b+$terminal_s1_c+$terminal_s1_d;
            $effectif_serie_S1=$effectif_seconde_s1+$effectif_premiere_s1+$effectif_terminal_s1;

             /*
                *effectif Serie S2
            */ 
            require_once("../../ab/core/series/dbSerie_s2.php");
            $seconde_s2_a=effectif_eleve('seconde','s2','a',$db);
            $seconde_s2_b=effectif_eleve('seconde','s2','b',$db);
            $seconde_s2_c=effectif_eleve('seconde','s2','c',$db);
            $seconde_s2_d=effectif_eleve('seconde','s2','d',$db);
            $effectif_seconde_s2=$seconde_s2_a+$seconde_s2_b+$seconde_s2_c+$seconde_s2_d;

            $premiere_s2_a=effectif_eleve('premiere','s2','a',$db);
            $premiere_s2_b=effectif_eleve('premiere','s2','b',$db);
            $premiere_s2_c=effectif_eleve('premiere','s2','c',$db);
            $premiere_s2_d=effectif_eleve('premiere','s2','d',$db);
            $effectif_premiere_s2=$premiere_s2_a+$premiere_s2_b+$premiere_s2_c+$premiere_s2_d;

            $terminal_s2_a=effectif_eleve('terminal','s2','a',$db);
            $terminal_s2_b=effectif_eleve('terminal','s2','b',$db);
            $terminal_s2_c=effectif_eleve('terminal','s2','c',$db);
            $terminal_s2_d=effectif_eleve('terminal','s2','d',$db);
            $effectif_terminal_s2=$terminal_s2_a+$terminal_s2_b+$terminal_s2_c+$terminal_s2_d;
             $effectif_serie_S2=$effectif_seconde_s2+$effectif_premiere_s2+$effectif_terminal_s2;
          
             /*
                 *effectif Serie S3
             */ 
            require_once("../../ab/core/series/dbSerie_s3.php");

            $seconde_s3_a=effectif_eleve('seconde','s3','a',$db);
            $seconde_s3_b=effectif_eleve('seconde','s3','b',$db);
            $seconde_s3_c=effectif_eleve('seconde','s3','c',$db);
            $seconde_s3_d=effectif_eleve('seconde','s3','d',$db);
            $effectif_seconde_s3=$seconde_s3_a+$seconde_s3_b+$seconde_s3_c+$seconde_s3_d;

            $premiere_s3_a=effectif_eleve('premiere','s3','a',$db);
            $premiere_s3_b=effectif_eleve('premiere','s3','b',$db);
            $premiere_s3_c=effectif_eleve('premiere','s3','c',$db);
            $premiere_s3_d=effectif_eleve('premiere','s3','d',$db);
            $effectif_premiere_s3=$premiere_s3_a+$premiere_s3_b+$premiere_s3_c+$premiere_s3_d;

            $terminal_s3_a=effectif_eleve('terminal','s3','a',$db);
            $terminal_s3_b=effectif_eleve('terminal','s3','b',$db);
            $terminal_s3_c=effectif_eleve('terminal','s3','c',$db);
            $terminal_s3_d=effectif_eleve('terminal','s3','d',$db);
            $effectif_terminal_s3=$terminal_s3_a+$terminal_s3_b+$terminal_s3_c+$terminal_s3_d;
             $effectif_serie_S3=$effectif_seconde_s3+$effectif_premiere_s3+$effectif_terminal_s3;


             /*
                *effectif Serie l1
            */ 
            require_once("../../ab/core/series/dbSerie_l1.php");

            $seconde_l1_a=effectif_eleve('seconde','l1','a',$db);
            $seconde_l1_b=effectif_eleve('seconde','l1','b',$db);
            $seconde_l1_c=effectif_eleve('seconde','l1','c',$db);
            $seconde_l1_d=effectif_eleve('seconde','l1','d',$db);
            $effectif_seconde_l1=$seconde_l1_a+$seconde_l1_b+$seconde_l1_c+$seconde_l1_d;

            $premiere_l1_a=effectif_eleve('premiere','l1','a',$db);
            $premiere_l1_b=effectif_eleve('premiere','l1','b',$db);
            $premiere_l1_c=effectif_eleve('premiere','l1','c',$db);
            $premiere_l1_d=effectif_eleve('premiere','l1','d',$db);
            $effectif_premiere_l1=$premiere_l1_a+$premiere_l1_b+$premiere_l1_c+$premiere_l1_d;

            $terminal_l1_a=effectif_eleve('terminal','l1','a',$db);
            $terminal_l1_b=effectif_eleve('terminal','l1','b',$db);
            $terminal_l1_c=effectif_eleve('terminal','l1','c',$db);
            $terminal_l1_d=effectif_eleve('terminal','l1','d',$db);
            $effectif_terminal_l1=$terminal_l1_a+$terminal_l1_b+$terminal_l1_c+$terminal_l1_d;
             $effectif_serie_L1=$effectif_seconde_l1+$effectif_premiere_l1+$effectif_terminal_l1;

             /*
                *effectif Serie l2
            */ 
            require_once("../../ab/core/series/dbSerie_l2.php");
            $seconde_l2_a=effectif_eleve('seconde','l2','a',$db);
            $seconde_l2_b=effectif_eleve('seconde','l2','b',$db);
            $seconde_l2_c=effectif_eleve('seconde','l2','c',$db);
            $seconde_l2_d=effectif_eleve('seconde','l2','d',$db);
            $effectif_seconde_l2=$seconde_l2_a+$seconde_l2_b+$seconde_l2_c+$seconde_l2_d;

            $premiere_l2_a=effectif_eleve('premiere','l2','a',$db);
            $premiere_l2_b=effectif_eleve('premiere','l2','b',$db);
            $premiere_l2_c=effectif_eleve('premiere','l2','c',$db);
            $premiere_l2_d=effectif_eleve('premiere','l2','d',$db);
            $effectif_premiere_l2=$premiere_l2_a+$premiere_l2_b+$premiere_l2_c+$premiere_l2_d;

            $terminal_l2_a=effectif_eleve('terminal','l2','a',$db);
            $terminal_l2_b=effectif_eleve('terminal','l2','b',$db);
            $terminal_l2_c=effectif_eleve('terminal','l2','c',$db);
            $terminal_l2_d=effectif_eleve('terminal','l2','d',$db);
            $effectif_terminal_l2=$terminal_l2_a+$terminal_l2_b+$terminal_l2_c+$terminal_l2_d;
             $effectif_serie_L2=$effectif_seconde_l2+$effectif_premiere_l2+$effectif_terminal_l2;

             /*
                *effectif Serie lp
            */ 
             require_once("../../ab/core/series/dbSerie_lp.php");

            $seconde_lp_a=effectif_eleve('seconde','lp','a',$db);
            $seconde_lp_b=effectif_eleve('seconde','lp','b',$db);
            $seconde_lp_c=effectif_eleve('seconde','lp','c',$db);
            $seconde_lp_d=effectif_eleve('seconde','lp','d',$db);
            $effectif_seconde_lp=$seconde_lp_a+$seconde_lp_b+$seconde_lp_c+$seconde_lp_d;

            $premiere_lp_a=effectif_eleve('premiere','lp','a',$db);
            $premiere_lp_b=effectif_eleve('premiere','lp','b',$db);
            $premiere_lp_c=effectif_eleve('premiere','lp','c',$db);
            $premiere_lp_d=effectif_eleve('premiere','lp','d',$db);
            $effectif_premiere_lp=$premiere_lp_a+$premiere_lp_b+$premiere_lp_c+$premiere_lp_d;

            $terminal_lp_a=effectif_eleve('terminal','lp','a',$db);
            $terminal_lp_b=effectif_eleve('terminal','lp','b',$db);
            $terminal_lp_c=effectif_eleve('terminal','lp','c',$db);
            $terminal_lp_d=effectif_eleve('terminal','lp','d',$db);
            $effectif_terminal_lp=$terminal_lp_a+$terminal_lp_b+$terminal_lp_c+$terminal_lp_d;
             $effectif_serie_Lp=$effectif_seconde_lp+$effectif_premiere_lp+$effectif_terminal_lp;
            
             /*
                *effectif Serie steg
            */ 
            require_once("../../ab/core/series/dbSerie_steg.php");

            $seconde_steg_a=effectif_eleve('seconde','steg','a',$db);
            $seconde_steg_b=effectif_eleve('seconde','steg','b',$db);
            $seconde_steg_c=effectif_eleve('seconde','steg','c',$db);
            $seconde_steg_d=effectif_eleve('seconde','steg','d',$db);
            $effectif_seconde_steg=$seconde_steg_a+$seconde_steg_b+$seconde_steg_c+$seconde_steg_d;

            $premiere_steg_a=effectif_eleve('premiere','steg','a',$db);
            $premiere_steg_b=effectif_eleve('premiere','steg','b',$db);
            $premiere_steg_c=effectif_eleve('premiere','steg','c',$db);
            $premiere_steg_d=effectif_eleve('premiere','steg','d',$db);
            $effectif_premiere_steg=$premiere_steg_a+$premiere_steg_b+$premiere_steg_c+$premiere_steg_d;

            $terminal_steg_a=effectif_eleve('terminal','steg','a',$db);
            $terminal_steg_b=effectif_eleve('terminal','steg','b',$db);
            $terminal_steg_c=effectif_eleve('terminal','steg','c',$db);
            $terminal_steg_d=effectif_eleve('terminal','steg','d',$db);
            $effectif_terminal_steg=$terminal_steg_a+$terminal_steg_b+$terminal_steg_c+$terminal_steg_d;
             $effectif_serie_Steg=$effectif_seconde_steg+$effectif_premiere_steg+$effectif_terminal_steg;

             /*
                *effectif Serie t
            */ 
            require_once("../../ab/core/series/dbSerie_t.php");

            $seconde_t_a=effectif_eleve('seconde','t','a',$db);
            $seconde_t_b=effectif_eleve('seconde','t','b',$db);
            $seconde_t_c=effectif_eleve('seconde','t','c',$db);
            $seconde_t_d=effectif_eleve('seconde','t','d',$db);
            $effectif_seconde_t=$seconde_t_a+$seconde_t_b+$seconde_t_c+$seconde_t_d;

            $premiere_t_a=effectif_eleve('premiere','t','a',$db);
            $premiere_t_b=effectif_eleve('premiere','t','b',$db);
            $premiere_t_c=effectif_eleve('premiere','t','c',$db);
            $premiere_t_d=effectif_eleve('premiere','t','d',$db);
            $effectif_premiere_t=$premiere_t_a+$premiere_t_b+$premiere_t_c+$premiere_t_d;

            $terminal_t_a=effectif_eleve('terminal','t','a',$db);
            $terminal_t_b=effectif_eleve('terminal','t','b',$db);
            $terminal_t_c=effectif_eleve('terminal','t','c',$db);
            $terminal_t_d=effectif_eleve('terminal','t','d',$db);
            $effectif_terminal_t=$terminal_t_a+$terminal_t_b+$terminal_t_c+$terminal_t_d;
             $effectif_serie_Steg=$effectif_seconde_steg+$effectif_premiere_steg+$effectif_terminal_steg;
             $effectif_serie_T=$effectif_seconde_t+$effectif_premiere_t+$effectif_terminal_t;


?>
