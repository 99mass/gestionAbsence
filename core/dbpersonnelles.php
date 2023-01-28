<?php
        /**
         * base de données  authentication
         */

    $server='localhost';
    $db='authentication';
    $login='root';
    $password='';
try {
    $dataBase=new PDO ("mysql:host=$server;dbname=$db",$login, $password);
    
    

} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
} 

?>