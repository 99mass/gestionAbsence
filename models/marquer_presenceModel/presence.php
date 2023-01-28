<?php  @session_start();

            /**
             * requetes pour marquer la presence d'un éléve
             */

       //appel aux controllers verification_roles.php et redirection_page_presenceController.php 
    require_once('../../controllers/verification_role.php');  

    // on recuper le niveau la serie et la classe de l'éléve passer en URL
    $serie=htmlspecialchars(trim(strip_tags($_GET['serie'])));
    $niveau=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
    $classe=htmlspecialchars(trim(strip_tags($_GET['classe'])));

     // appelle de la base de donnée en fonction de la classe choisi
            require_once("../../core/series/dbSerie_{$serie}.php");
          
    if(isset($_POST['presences']) && isset($_POST['cours']))
    {

     // verifier si les  champs sont vide
        if(empty($_POST['presences']) || empty($_POST['cours']) )
        {
            $_SESSION['erreur'] = "Oups! prèsence non marquer Veuillez renseigner tout les informations ";
             header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
        }else
        {   
            /**
                 * eviter les failles XSS
                 * preparer la requete et l'executer
            */
            $choix=strip_tags(htmlspecialchars(trim($_POST['presences'])));
            $cours=strip_tags(htmlspecialchars(trim($_POST['cours'])));
            $id=strip_tags(htmlspecialchars(trim($_POST['id_user'])));
            $motifs=strip_tags(htmlspecialchars(trim($_POST['motifs'])));

            // si l'eleve est absent on exige le motif sinon on reste sur la meme page
             if ($choix=='absent' && $motifs=='') {
             $_SESSION['erreur'] = "Oups! présence non marquer Veuillez renseigner le motif de l'absence";
             header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
            } else{         
              

             $req="INSERT INTO mp_{$niveau}_{$serie}_{$classe}(presence,id_proprietaire,date_cours,heure_cours,motifs_absence,cours)
                    VALUES(:presence,:id_proprietaire, DATE(NOW()),Time_FORMAT(NOW(),'%H:%i'),:motifs_absence,:cours)";
                     
            $querys =$db->prepare($req);
            $querys->bindValue(":presence", $choix,PDO::PARAM_STR);
            $querys->bindValue(":id_proprietaire", $id,PDO::PARAM_INT);
            $querys->bindValue(":motifs_absence", $motifs,PDO::PARAM_STR);
            $querys->bindValue(":cours", $cours,PDO::PARAM_STR);
                  if($querys->execute())
                    { 
                        $_SESSION['success'] = "présence marquer avec success";
                         header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
                    }else
                     {
                        $_SESSION['erreur'] = "Oups! présence non marquer Veuillez ré-essayer";
                        header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
                     }
            }  
         }
 }
           /* *************************************************************************/

    // Recuper l'id de l'eleve séléctionner
     if(isset($_GET['id']))
            {
                /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
                 */
                $id =strip_tags(htmlspecialchars($_GET['id']));
                $sql="SELECT * FROM mp_{$niveau}_{$serie}_{$classe}
                       LEFT OUTER JOIN {$niveau}_{$serie}_{$classe} ON mp_{$niveau}_{$serie}_{$classe}.id_proprietaire={$niveau}_{$serie}_{$classe}.id 
                       WHERE  {$niveau}_{$serie}_{$classe}.id =:id
                       ORDER BY `mp_{$niveau}_{$serie}_{$classe}`.`id` DESC ;";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(":id", $id,PDO::PARAM_INT);
                $stmt->execute();
                $ligne_id = $stmt->fetch(PDO::FETCH_ASSOC);

            }else
            {
                header("Location: /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
            }   


            date_default_timezone_set('GMT');  // la fonction date_default_timezone_set() permet d'affiche au format GMT 
             $dateAujoudHui=date('Y-m-d');           // la variable  $dateAujoudHui permet de recuperr la date d'aujourd'hui
             $dateDb=$ligne_id['date_cours'];   //on la la date stocker dans la base de donner
            $heurActuelle=date('H:i:00', time());    // la variable $heurActuelle permet de recuperer l'heur Actuelle     
            $heurDb=$ligne_id['heure_cours'];    //on la la l'heure stocker dans la base de donner
                 
            //ici on calcule la différence etre l'heure actuelle et l'heure qui est stocker dans la base de donner
            $diff_entre_Hac_et_Hdb=strtotime($heurActuelle) - strtotime($heurDb);

            $heurSeuil=600;  //la variable $heurSeuil est de 10mn c'est dire 600s

 ?>
