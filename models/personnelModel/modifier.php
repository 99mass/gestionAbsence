

<?php 
     @session_start();  

                                /**
                                 * * modification des informations des personnelles
                                 *  */
     
            // appelle a la base de donnée
          require_once "../../core/dbpersonnelles.php";  
          
    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['dateNaissance'])&& isset($_POST['mail'])&& isset($_POST['motDePasse']))
    {

     // verifier si les tout les champs sont vide
        if(empty($_POST['prenom']) || empty($_POST['nom'])|| empty($_POST['dateNaissance'])|| empty($_POST['mail'])|| empty($_POST['motDePasse']))
        {
            $_SESSION['erreur'] = "modification non reussit : Champ vide";
            // on redirige vers la page correspondant grace a notre controller redirectionController.php
             require_once('../../controllers/redirectionController.php');
        }else
        { 
           

             /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
            */
            $prenom =strip_tags($_POST['prenom']); 
            $nom =strip_tags($_POST['nom']); 
            $dateNaissance =strip_tags($_POST['dateNaissance']); 
            $mail =strip_tags($_POST['mail']); 
            $motDePasse =strip_tags($_POST['motDePasse']);
            $roles=strip_tags($_POST['roles']);

            $id=strip_tags($_POST['id_Admin']); 
            // $motDePasse_pf =password_hash($motDePasse,PASSWORD_BCRYPT); 
            // $role =strip_tags($_POST['role']); 
            //classe personnel
            $sql = 'UPDATE personnel SET prenom=:prenom,nom=:nom,date_naissance=:dateNaissance,email=:mail,mot_de_passe=:motDePasse,rolees=:roles WHERE id=:id';
            $query =$dataBase->prepare($sql);
            $query->bindValue(":prenom", $prenom);
            $query->bindValue(":nom", $nom);
            $query->bindValue(":dateNaissance", $dateNaissance);
            $query->bindValue(":mail", $mail);
            $query->bindValue(":motDePasse", $motDePasse);
            $query->bindValue(":roles", $roles);

            $query->bindValue(":id", $id);
   
            if($query->execute())
            {
                  $_SESSION['success'] = "informations modifiées avec success";
                require_once('../../controllers/redirectionController.php');

            }else{ 
                $_SESSION['erreur'] = "modification non reussit";
               require_once('../../controllers/redirectionController.php');
              }
            
        }
    }

     /* *******************************************************************************************/

    // Recuper l'id du personnelle a modifier
     if(isset($_GET['id']))
            {
                /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
                 */
                $id =strip_tags($_GET['id']);

                $sql = "SELECT * FROM personnel WHERE id = :id;";
                $stmt = $dataBase->prepare($sql);
                $stmt->bindValue("id", $id);
                $stmt->execute();
                $ligne_id = $stmt->fetch(PDO::FETCH_ASSOC);

            }else
            {  require_once('../../controllers/redirectionController.php');

            }   
?>
