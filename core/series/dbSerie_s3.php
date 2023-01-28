<?php
         /**
         * base de donnée serie_s3
         */
    $server='localhost';
    $nomDb='serie_s3';
    $login='root';
    $password='';
try {
    $db=new PDO ("mysql:host=$server;dbname=$nomDb",$login, $password);
    
    

} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
} 

?>