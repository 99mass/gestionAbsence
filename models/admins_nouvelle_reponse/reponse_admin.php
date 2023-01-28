<?php
 @session_start();
        /**
         * requetes pour modifier la repose a une quetions posée par un un Proffesseur ou un Surveillant 
         */


     // appelle de la base de donnée
    require_once "../../core/dbpersonnelles.php";
   // verifier si les champs existe
    if(isset($_POST['reponse']))
    {
      // verifier si les tout les champs sont vide
        if(empty($_POST['reponse']) )
        {
          $_SESSION['erreur'] = "Requete non traiter veillez tantez une nouvelle foi";          
                header("Location: ../../views/admin_dasbord.php");
        }else
        {          

             /**
              * traitement des donnees ici du formulaire reponse.php
                     * eviter les failles XSS
                     * preparer la requete et l'executer
            */
            $reponse =strip_tags(trim(htmlspecialchars($_POST['reponse']))); 
            $traiter=strip_tags(trim(htmlspecialchars($_POST['traiters'])));
            $id=strip_tags(trim(htmlspecialchars($_POST['id_membre'])));

            $sql="UPDATE messages SET reponse_admin=:reponses,traiter='$traiter'
                    WHERE id=:id;";
            $query =$dataBase->prepare($sql);
            $query->bindParam(":reponses", $reponse);
            $query->bindParam(":id", $id,PDO::PARAM_STR);
          if($query->execute()){
            $_SESSION['success'] = "Requete traiter avec succé";
                header("Location: ../../views/admin_dasbord.php");              
          }
          else{
            $_SESSION['erreur'] = "Requete non traiter veillez tantez une nouvelle foi";
            header("Location: ../../views/admin_dasbord.php");
          }
            
        }

    }

        // Recuper l'id de la questions selectioner séléctionner
     if(isset($_GET['id']))
            {
                /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
                 */
                $id =strip_tags(htmlspecialchars($_GET['id']));
                $sql="SELECT  id,idPersonnel,nomMembre,question_membres,DATE_FORMAT(`date`, '%d/%m/%Y') AS dates,heure,reponse_admin,traiter
                                    FROM messages 
                                    WHERE messages.id=:id
                                    ORDER BY `messages`.`id` DESC " ;  
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
