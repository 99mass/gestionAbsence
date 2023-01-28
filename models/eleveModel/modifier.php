<?php 
    @session_start();
                    /**
                     * requetes pour modification d'informations  éléve
                     */

// appel de notre controller pour savoir le dossier qu'on doit prendre en foction du role 
require_once('../../controllers/verification_role.php');

$serie=htmlspecialchars(trim(strip_tags($_GET['serie'])));
$niveau=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
$classe=htmlspecialchars(trim(strip_tags($_GET['classe'])));

     // appelle de la base de donnée en fonction de la classe choisi
        require_once("../../core/series/dbSerie_{$serie}.php");
          
    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['date_naissance']))
    {

     // verifier si les tout les champs sont vide
        if(empty($_POST['prenom']) || empty($_POST['nom'])|| empty($_POST['date_naissance']))
        {
            $_SESSION['erreur'] = "informations eléve non modifiés";
             // on redirige le personnelle vers la classe ou il a choisi de modifier l'éléve
             header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
        }else
        {   
            /**  
                 * eviter les failles XSS
                 * preparer la requete et l'executer
            */
            $id=strip_tags(htmlspecialchars(trim($_POST['id_user'])));
            $prenom =strip_tags(htmlspecialchars(trim($_POST['prenom']))); 
            $nom =strip_tags(htmlspecialchars(trim($_POST['nom']))); 
            $date_naissance =strip_tags(htmlspecialchars(trim($_POST['date_naissance']))); 
            $sex =strip_tags(htmlspecialchars(trim($_POST['sex']))); 


            $sql = "UPDATE {$niveau}_{$serie}_{$classe} 
                    SET prenom=:prenom,nom=:nom,date_naissance=:date_naissance,sex=:sexe 
                    WHERE id=:id;";
            $query =$db->prepare($sql);
            $query->bindValue(":prenom", $prenom,PDO::PARAM_STR);
            $query->bindValue(":nom", $nom,PDO::PARAM_STR);
            $query->bindValue(":date_naissance", $date_naissance);
            $query->bindValue(":sexe", $sex);

            $query->bindValue(":id", $id,PDO::PARAM_INT);

            
            if($query->execute())
            {
                  $_SESSION['success'] = "information eléve modifier avec success";
                // on redirige le personnelle vers la classe ou il a choisi de modifier l'éléve
             header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
            }else
            {
                $_SESSION['erreur'] = "information non modifier...";
                // on redirige le personnelle vers la classe ou il a choisi de modifier l'éléve
             header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
            }
            
        }
    }

     /* *******************************************************************************************/

    // Recuper l'id de l'eleve a modifier
     if(isset($_GET['id']))
            {
                /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
                 */
                $id =strip_tags(htmlspecialchars(trim($_GET['id'])));

                $sql = "SELECT * FROM {$niveau}_{$serie}_{$classe} WHERE id = :id;";
                $stmt = $db->prepare($sql);
                $stmt->bindValue("id", $id);
                $stmt->execute();
                $ligne_id = $stmt->fetch(PDO::FETCH_ASSOC);

            }else
            {
                // on redirige le personnelle vers la classe ou il a choisi de modifier l'éléve
             header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");

            }   
?>

