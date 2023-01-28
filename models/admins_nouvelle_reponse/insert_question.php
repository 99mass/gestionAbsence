<?php 
 /**
  * Requetes  pour inserer les questions posées par les Proffesseurs et les  Surveillant
  */
@session_start();   
    // verifier si les champs existe
    if(isset($_POST['question']))
    {

      // verifier si le champs n'est pas vide
       if(empty($_POST['question']) )
            {
              $_SESSION['question_confirmation'] ="Question non envoyé veillez réessayez !"; 
               header("Location: ../../views/personnelle_dasbord.php");
             }
             else
              {   
                // appelle a la base de donnée
                require_once "../../core/dbpersonnelles.php"; 

                    /**
                    * eviter les failles XSS
                    * preparer la requete et l'executer
                    */
                $question=strip_tags(trim(htmlspecialchars($_POST['question'])));
                date_default_timezone_set('GMT'); // la fonction date_default_timezone_set() permet d'affiche au format GMT
                $date= date('Y/m/d');
                $heure=date('H:i');
                $nomMembre=$_SESSION["user"]['prenom'].'-'.$_SESSION["user"]['nom'];
                $idPersonnel=$_SESSION["user"]['id'];
                $roless=$_SESSION["user"]['role'];
                $sql = "INSERT INTO messages(idPersonnel,nomMembre,question_membres,`date`,heure,statu)
                            VALUES('$idPersonnel','$nomMembre',:questions,'$date','$heure','$roless')";
                $query =$dataBase->prepare($sql);
                $query->bindParam(":questions", $question);
                if($query->execute()){
                      $_SESSION['question_confirmation'] ="Question envoyé avec succée !";
                      header("Location: ../../views/personnelle_dasbord.php");
                  }
                  else{   
                      $_SESSION['question_confirmation'] ="Question non envoyé veillez réessayez !"; 
                       header("Location: ../../views/personnelle_dasbord.php");
                  }
              }

          } 
          else {
                $_SESSION['question_confirmation'] ="Question non envoyé veillez réessayez !"; 
                 header("Location: ../../views/personnelle_dasbord.php");
     }

// fermer la base de donnée
require_once("../../core/fermerDb.php");
?>