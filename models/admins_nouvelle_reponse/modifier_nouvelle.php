<?php
 @session_start();
        /**
         * requetes pour modifier la repose a une quetions posée par un un Proffesseur ou un Surveillant 
         */


     // appelle de la base de donnée
    require_once "../../core/dbpersonnelles.php";
   // verifier si les champs existe
    if(isset($_POST['titre_message']) && isset($_POST['message_admins']))
    {
      // verifier si les tout les champs sont vide
        if(empty($_POST['titre_message']) && empty($_POST['message_admins']))
        {
          $_SESSION['erreur'] = "Nouvelle Non Mofier  veillez tantez une nouvelle foi";          
                header("Location: ../../views/admin_dasbord.php");
        }else
        {          

             /**
              * traitement des donnees ici du formulaire 
                     * eviter les failles XSS
                     * preparer la requete et l'executer
            */
            $titre_message =strip_tags(trim(htmlspecialchars($_POST['titre_message'])));
            $message_admins =strip_tags(trim(htmlspecialchars($_POST['message_admins'])));
            $id=strip_tags(trim(htmlspecialchars($_POST['id_admin'])));

            $sql="UPDATE messages SET titre_message_Admin=:titre_message,message_admin=:message_admins
                    WHERE id=:id;";
            $query =$dataBase->prepare($sql);
            $query->bindParam(":titre_message", $titre_message);
            $query->bindParam(":message_admins", $message_admins);
            $query->bindParam(":id", $id,PDO::PARAM_INT);
          if($query->execute()){
            $_SESSION['success'] = "Nouvelle Mofier avec succés";
                header("Location: ../../views/admin_dasbord.php");              
          }
          else{
            $_SESSION['erreur'] = "Nouvelle Non Mofier veillez tantez une nouvelle foi ?";
            header("Location: ../../views/admin_dasbord.php");
          }
            
        }

    }

        // Recuper l'id de la noullle  séléctionner
     if(isset($_GET['id']))
            {
                /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
                 */
                $id =strip_tags(htmlspecialchars($_GET['id']));
                $sql="SELECT * FROM messages 
                                    WHERE messages.id=:id" ;  
                $stmt = $dataBase->prepare($sql);
                $stmt->bindValue(":id", $id,PDO::PARAM_INT);
                $stmt->execute();
                $ligne_id = $stmt->fetch(PDO::FETCH_ASSOC);

            }else
            {
              // si l'id n'est pas on reste sur la page admin_dasbord
              header("Location: ../../views/admin_dasbord.php");
            }   
?>
