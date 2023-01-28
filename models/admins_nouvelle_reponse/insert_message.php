<?php 
            /**
             * 
             *  requetes pour inserer les nouvelles envoyer par les admins
             * 
             * */
    @session_start();


    // verifier si les champs existe
    if(isset($_POST['message']))
    {

      // verifier si les tout les champs sont vide
        if(empty($_POST['message']) )
        {
          $_SESSION['erreur'] = " Message non envoyer ";          
                header("Location: ../../views/admin_dasbord.php");
        }else
        {
            // appelle a la base de donnée
            require_once "../../core/dbpersonnelles.php";            

             /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
            */
        date_default_timezone_set('GMT'); // la fonction date_default_timezone_set() permet d'affiche au format GMT 
            $date= date('Y/m/d'); 
            $heure=date('H:i');

            $nomAdmin=$_SESSION["user"]['prenom'].'-'.$_SESSION["user"]['nom'];
            $idPersonnel=$_SESSION["user"]['id'];
             $titre_message =strip_tags(trim(htmlspecialchars($_POST['titre_message'])));
             $message =strip_tags(trim(htmlspecialchars($_POST['message'])));
            // $roles =strip_tags(trim(htmlspecialchars($_POST['satattus'])));
            $roless=$_SESSION["user"]['role'];

            $sql = "INSERT INTO messages(	idPersonnel,nomAdmin,titre_message_Admin,message_admin,`date`,heure,statu)
                            VALUES($idPersonnel,'$nomAdmin',:titre_message,:messagess,'$date','$heure','$roless')";
            $query =$dataBase->prepare($sql);
            $query->bindParam(":titre_message", $titre_message);
            $query->bindParam(":messagess", $message);
            $query->bindParam(":messagess", $message);
          if($query->execute()){
            $_SESSION['success'] = "Message envoyer avec succé";
                header("Location: ../../views/admin_dasbord.php");              
          }
          else{
            $_SESSION['erreur'] = " Message non envoyer  ";
            header("Location: ../../views/admin_dasbord.php");
          }
            
        }

    }
    else {
          $_SESSION['erreur'] = " Message non envoyer";
            header("Location: ../../views/admin_dasbord.php");


    }

    // fermer la base de donnée
       require_once "../../core/fermerDb.php"; 
?>