<?php 
/**
 * ici notre controllers a pour but de choisir la requete a utilisé en fonction du role du personnelle
 */
// on recuper et on verifie si le le type de statu envoyer avec l'url est vide 
 if(!isset($_GET['status']) && empty($_GET['status'])){
                $_GET['status']='';
    }
    // si il n'est pas vide on recupere les donnees de la base de de donné en fonction du lien qu'on a cliqué
        // ici on a cliqué sur le lien pour incrire des Surveillants
             if($_GET['status']=='SV'){;
                 $resutat =$resutat_surveillant;
             }
              // ici on a cliqué sur le lien pour incrire des Proffesseurs
           if($_GET['status']=='PF'){
                 $resutat = $resutat_proffesseur ; 
             }
              // ici on a cliqué sur le lien pour incrire des Super Admins et des Admins
              if($_GET['status']=='PS') {
                 $resutat = $resutat_admin ; 
             }

?>