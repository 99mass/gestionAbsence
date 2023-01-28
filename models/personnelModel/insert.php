
<?php 
@session_start();
                      /**
                       * requette d'inscription de personnelles
                       */

                       
    // verifier si les champs existe
    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['dateNaissance'])&& isset($_POST['mail'])&& isset($_POST['motDePasse']))
    {

      // verifier si les tout les champs sont vide
        if(empty($_POST['prenom']) || empty($_POST['nom'])|| empty($_POST['dateNaissance'])|| empty($_POST['mail'])|| empty($_POST['motDePasse']))
        {
          $_SESSION['erreur'] = " Inscription non reussit : une des  Champs est vide ? ";   
             // on redirige vers la page correspondant grace a notre controller redirectionController.php
           require_once('../../controllers/redirectionController.php');
        }
        else
          {
            // appelle a la base de donnée
             require_once "../../core/dbpersonnelles.php";            

             /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
            */
            $prenom =strip_tags( htmlspecialchars(trim($_POST['prenom']))); 
            $nom =strip_tags( htmlspecialchars(trim($_POST['nom'])));
            $dateNaissance =strip_tags( htmlspecialchars(trim($_POST['dateNaissance']))); 
            $mail =strip_tags( htmlspecialchars(trim($_POST['mail']))); 
            $motDePasse =strip_tags( htmlspecialchars(trim($_POST['motDePasse']))); 
            // $motDePasse_pf =password_hash($motDePasse,PASSWORD_BCRYPT); 
            $role =strip_tags( htmlspecialchars(trim($_POST['role']))); 
            

            $sql = 'INSERT INTO personnel(prenom,nom,date_naissance,email,mot_de_passe,rolees)VALUES(:prenom, :nom, :dateNaissance, :mail, :motDePasse,:roles)';
            $query =$dataBase->prepare($sql);
            $query->bindParam(":prenom", $prenom);
            $query->bindParam(":nom", $nom);
            $query->bindParam(":dateNaissance", $dateNaissance);
            $query->bindParam(":mail", $mail);
            $query->bindParam(":motDePasse", $motDePasse);
            $query->bindParam(":roles", $role);

          if($query->execute()){
            $_SESSION['success'] = "Inscription reussit avec success";
            require_once('../../controllers/redirectionController.php');             
          }else{
            $_SESSION['erreur'] = " Inscription non reussit : E-mail/ Mot de Passe existe déja ?  ";
              require_once('../../controllers/redirectionController.php');
          }
            
        }

    }else
    {
          $_SESSION['erreur'] = " Inscription non reussit ";
         require_once('../../controllers/redirectionController.php');


    }
    // fermer la base de donnée
    require_once("../../core/fermerDb.php")
?>
