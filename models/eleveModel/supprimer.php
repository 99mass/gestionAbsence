<?php 
    @session_start();
                  /**
                   * requetes pour la suppression d'eleve
                   */

// appel de notre controller pour savoir le dossier qu'on doit prendre en foction du role 
require_once('../../controllers/verification_role.php');

$serie=htmlspecialchars(trim(strip_tags($_GET['serie'])));
$niveau=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
$classe=htmlspecialchars(trim(strip_tags($_GET['classe'])));

    // appelle de la base de donnée en fonction de la classe choisi
      require_once("../../core/series/dbSerie_{$serie}.php");

    if(isset($_GET['id']))
    {   


        // supprimer l'eleve dans la base de donnée
        $db->query("Delete from {$niveau}_{$serie}_{$classe} WHERE id = {$_GET['id']}");
         $_SESSION['success'] = "eléve supprimer avec succes";

        // on redirige le personnelle vers la classe ou il a choisi de supprimer l'éléve
         header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");     
    }
    else
        {   
         // on redirige le personnelle vers la classe ou il a choisi de supprimer l'éléve
           header("Location:  /ab/views/{$dossier}?niveau={$niveau}&serie={$serie}&classe={$classe}");      
        }
?>