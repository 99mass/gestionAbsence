<?php 
/**
 * ici notre controller a pour but de choisir la bonne redirection apres incription d'un personnel
 * il sera utilisé dans le dossier Models/personnelModel 
 */

 
// on recuper et onverifie si le le type de statu envoyer avec l'url est vide 
 if(!isset($_GET['personnelle']) && empty($_GET['personnelle'])){
                $_GET['personnelle']='';
    }
    // si il n'est pas vide on recupere le les donnees de la base de de donné en fonction du lien qu'on a cliqué
        // ici on a cliqyé sur le lien pour incrire des Surveillants
             if($_GET['personnelle']=='SV'){;
                 header('Location: /ab/views/inscrire/personnelle.php?status=SV');
             }
              // ici on a cliqyé sur le lien pour incrire des Proffesseurs
             if($_GET['personnelle']=='PF'){
                header('Location: /ab/views/inscrire/personnelle.php?status=PF');
             }
              // ici on a cliqué sur le lien pour incrire des Super Admins et des Admins
             if($_GET['personnelle']=='PS') {
                header('Location: /ab/views/inscrire/personnelle.php?status=PS');
             }

?>