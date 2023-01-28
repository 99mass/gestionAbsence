<?php 
@session_start();

            /**
             * requetes pour incrire des eleves
             */

// appel de notre controller pour savoir le dossier qu'on doit prendre en foction du role 
require_once('../../controllers/verification_role.php');

$serie=htmlspecialchars(trim(strip_tags($_GET['se'])));
$niveau=htmlspecialchars(trim(strip_tags($_GET['nv'])));
$classe=htmlspecialchars(trim(strip_tags($_GET['cl'])));

 // appelle de la base de donnée en fonction de la classe choisi
            require_once("../../core/series/dbSerie_{$serie}.php");
            
    // verifier si les champs existe
    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['date_naissance']))
    {

      // verifier si les tout les champs sont vide
        if(empty($_POST['prenom']) || empty($_POST['nom'])|| empty($_POST['date_naissance']))
        {
            $_SESSION['erreur'] = " éléve non enregistrer informations manquantes ";
            // on redirige le personnelle vers la classe ou il a choisi de creer l'éléve
             header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
        }else
        {
          

             /**
                     * eviter les failles XSS
                     * preparer la requete et l'executer
            */
            $prenom =strip_tags(htmlspecialchars(trim($_POST['prenom']))); 
            $nom =strip_tags(htmlspecialchars(trim($_POST['nom']))); 
            $date_naissance =strip_tags(htmlspecialchars(trim($_POST['date_naissance']))); 
             $sexe=strip_tags(htmlspecialchars(trim($_POST['sex'])));


            //classe choisit par defaut on insert les valeurs
            $sql = "INSERT INTO {$niveau}_{$serie}_{$classe}(prenom,nom,date_naissance,sex)
                    VALUES(:prenom, :nom, :date_naissance,:sexe)";
            $query =$db->prepare($sql);
            $query->bindParam(":prenom", $prenom);
            $query->bindParam(":nom", $nom);
            $query->bindParam(":date_naissance", $date_naissance);
            $query->bindParam(":sexe", $sexe);
            
            if($query->execute())
            {
                    // on recupere l'id  de l'éléve creer dernier 
                     $lastId = $db->lastInsertId() ;
                     
                    //  ensuite on insert les valeurs dans le tableau marquer presence
                     $req="INSERT INTO mp_{$niveau}_{$serie}_{$classe}(id_proprietaire)VALUES(:id_proprietaire)";
                     $querys =$db->prepare($req);
                    //  $querys->bindValue(":presence", $choix);
                     $querys->bindValue(":id_proprietaire", $lastId);
                      if($querys->execute()){
                               
                                $_SESSION['success'] = "éléve enregistrer avec success";
                                 header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");        
                      }                   
            }else
            {
                $_SESSION['erreur'] = "éléve non enregistrer";
                 header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");
            }
            
        }

    }else
    {
          $_SESSION['erreur'] = "un information éléve manquante...";
           header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");

    }

    // fermer la base de donnée
    require_once("../../core/fermerDb.php")
?>
