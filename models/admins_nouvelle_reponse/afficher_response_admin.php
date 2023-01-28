<?php  @session_start();

            /**
             * requetes pour afficher les questions posés par les Surveillant et Les Proffesseurs
             */

// la fonction date_default_timezone_set() permet d'affiche la date au format GMT
date_default_timezone_set('GMT'); 
$date= date('d/m/Y');
    /**
     *  appelle a la base de donnée
    *    afficher les questions et reponses envoyer par les surveillant,proffesseur et les admins
     */ 
    // appelle de la base de donnée
require_once "../../core/dbpersonnelles.php";

    $nom_user=$_SESSION["user"]['prenom'].'-'.$_SESSION["user"]['nom'];
    $sql="SELECT id,idPersonnel,nomMembre,question_membres,DATE_FORMAT(`date`, '%d/%m/%Y') AS dates,heure,reponse_admin
    FROM messages
    WHERE question_membres!='' AND nomMembre='".$nom_user."'
    ORDER BY `messages`.`id` DESC " ;
    $query =$dataBase->prepare($sql);
    $query->execute();
    $resutat = $query->fetchAll(PDO::FETCH_ASSOC);
?>