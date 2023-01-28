
<?php  @session_start();

                    /**
                     * requetes pour justifier l'absence d'un éleve
                     */

     // appel aux controllers verification_roles.php
    require_once('../../controllers/verification_role.php');  

    $serie=htmlspecialchars(trim(strip_tags($_GET['serie'])));
    $niveau=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
    $classe=htmlspecialchars(trim(strip_tags($_GET['classe'])));

     // appelle de la base de donnée en fonction de la classe choisi
            require_once("../../core/series/dbSerie_{$serie}.php");
          
    if(isset($_POST['presences']))
    {

     // verifier si les  champs sont vide
        if(empty($_POST['presences']) )
        {
            $_SESSION['erreur'] = "oups! absence non justifier Veuillez renseigner tout les informations ?";
            header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
        }else
        {                 
              
            /**
                 * eviter les failles XSS
                 * preparer la requete et l'executer
            */
            $choix=strip_tags(htmlspecialchars($_POST['presences']));
            $elements_justificatifs=strip_tags(htmlspecialchars($_POST['elementsjustificatifs']));
            $billets=strip_tags(htmlspecialchars($_POST['billets']));
            $id=strip_tags(htmlspecialchars($_POST['id_user']));

             $req="UPDATE mp_{$niveau}_{$serie}_{$classe} 
                   SET presence=:presence,motifs_absence='',elementsJustificatifs=:Justificatifs,billets=:billet
                    WHERE id=:id;";
                     $querys =$db->prepare($req);
                     $querys->bindValue(":presence", $choix,PDO::PARAM_STR);  
                     $querys->bindValue(":Justificatifs", $elements_justificatifs,PDO::PARAM_STR);
                     $querys->bindValue(":billet", $billets,PDO::PARAM_STR);
                     $querys->bindValue(":id", $id,PDO::PARAM_STR);

                        if($querys->execute())
                            {
                                
                                $_SESSION['success'] = "presence Modifier avec success";
                                header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
                            }else
                            {
                               
                                $_SESSION['erreur'] = "oups! absence non justifier  Veillez ré-essayer ";
                                header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
                            }
       
         }
 }
     /* *******************************************************************************************/

    // Recuper l'id de la personne séléctionnée
     if(isset($_GET['id']))
            {
                /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
                 */
                $id =strip_tags(htmlspecialchars($_GET['id']));
                $sql="SELECT * FROM   mp_{$niveau}_{$serie}_{$classe}
                      WHERE  mp_{$niveau}_{$serie}_{$classe}.id =:id ;";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(":id", $id,PDO::PARAM_INT);
                $stmt->execute();
                $ligne_id = $stmt->fetch(PDO::FETCH_ASSOC);

            }
            else
            {
               header("Location: /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
            }   

?>
