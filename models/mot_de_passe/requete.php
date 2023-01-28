<?php @session_start();

    /**
     *Verfication de l'existance et la disponible de donnéée dans le formuliare 
     */
    if(isset($_POST['email'],$_POST['date_naissance']) && !empty($_POST['email']) && !empty($_POST['date_naissance'])){

          /**
           *hachage du mot de passe
           */
     // $passe=password_hash($pass,PASSWORD_DEFAULT); 
       /**
        * Verification si on a un email qui respecter les normes
        */
        if( !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
              $_SESSION['status']="cette adresse E-mail n'est pas valide ";
              header("location: ../../views/mot_de_passe/envoyer.php");
               exit;
        }
     //appelle de la base de donnée
        require_once "../../core/dbpersonnelles.php";  
        $sql="SELECT email,mot_de_passe FROM personnel WHERE email=:email and date_naissance=:date_naissances ";
        $mail_user=$dataBase->prepare($sql);
        $mail_user->bindValue(":email",htmlspecialchars(trim(strip_tags($_POST['email']))));
        $mail_user->bindValue(":date_naissances",htmlspecialchars(trim(strip_tags($_POST['date_naissance']))));

        $mail_user->execute();
        $user=$mail_user->fetch();
        if (!empty($user)) {
                   $mot_de_passe=$user['mot_de_passe'];
                   $email=$user['email'];
                   header("location: ../../views/mot_de_passe/recuperer.php?p=$mot_de_passe&e=$email");
        }else {
            $_SESSION['status']="Aucun Compte trouvé";
              header("location: ../../views/mot_de_passe/envoyer.php");
        }

    }
    //  else{
    //            $_SESSION['status']="Aucun Compte n'est associé cet E-mail/Date Naissance...1";
    //           header("location: /ab/views/mot_de_passe/envoyer.php");
    //  }
?>