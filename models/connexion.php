<?php session_start();

    /**
     *Verfication de l'existance et la disponible de donnéée dans le formuliare 
     */
    if(isset($_POST['email'],$_POST['motDePasse']) && !empty($_POST['email']) && !empty($_POST['motDePasse'])){
       $pass=strip_tags(htmlspecialchars(trim($_POST['motDePasse'])));
          
          /**
           *hachage du mot de passe
           */
     // $passe=password_hash($pass,PASSWORD_DEFAULT); 
       /**
        * Verification si on a un email qui respecter les normes
        */
     //    if( !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
     //          $_SESSION['status']="Email et Mot de passe incorrect ?";
     //          header("location: /Gestion-Absence/index.php");
     //           exit;
     //    }
     //appelle de la base de donnée
        require_once "../../ab/core/dbpersonnelles.php";  
        $sql="SELECT * FROM personnel WHERE email=:email ";
        $mail_user=$dataBase->prepare($sql);
        $mail_user->bindValue(":email",$_POST['email']);
        $mail_user->execute();
        $user=$mail_user->fetch();
        /**
         * Verifiaction de l'exitance e-mail donner avec celle stocker dans la base de donnée
       */
        if(!$user){
               $_SESSION['status']="Email/Mot de passe incorrect ?";
              header("location: ../index.php");       
        }

        /**
         * Verification du mots de passe donner avec celle stocker dans la base de donnée
         */
        if($pass!=$user['mot_de_passe']){
              $_SESSION['status']="Email/Mot de passe incorrect ?";
              header("location: ../index.php");
         }

        /* login et de passe est correct
               connection reussit 
            stockage  des informaton de session
         */
         $_SESSION["user"]=[
              "id"=>$user['id'],
              "prenom"=>$user['prenom'],
              "nom"=>$user['nom'],
              "email"=>$user['email'],
              "role"=>$user['rolees']
      
         ];


         //on redirige vers le Tableau de bord correspondant en foncion du role

        
         if($_SESSION['user']['role']=='SV' || $_SESSION['user']['role']=='PF' ){
                 header('location: /ab/views/personnelle_dasbord.php');
         }
         if($_SESSION['user']['role']=='SAD' || $_SESSION['user']['role']=='AD' ) {
                 header('location: /ab/views/admin_dasbord.php');                 
          }
    }
     else{
               $_SESSION['status']="Email/Mot de passe incorrect ?";
              header("location: ../index.php");
     }
?>