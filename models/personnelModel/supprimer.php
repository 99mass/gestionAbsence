<?php 
    @session_start();
                    /**
                     * requete pour supprimmer des personnel
                     */

    // appelle de notre controller personnelleController.php
        require_once ('../../controllers/personnelleController.php'); 
    // appelle de la base de donnée 
        require_once ('../../core/dbpersonnelles.php');  

    if(isset($_GET['id']))
    {   
    // suppression de personnel dans la base de donnée
        $dataBase->query("Delete from personnel WHERE id = {$_GET['id']}");

         $_SESSION['success'] = "Personnel supprimer avec succes";
      // on redirige vers la page correspondant grace a notre controller redirectionController.php
        require_once('../../controllers/redirectionController.php');   
    }else
    {   
       require_once('../../controllers/redirectionController.php');       
    }
?>