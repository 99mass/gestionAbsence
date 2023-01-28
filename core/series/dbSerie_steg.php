<?php
         /**
         * base de donnée serie_steg
         */
    $server='localhost';
    $nomDb='serie_steg';
    $login='root';
    $password='';
try {
    $db=new PDO ("mysql:host=$server;dbname=$nomDb",$login, $password);
    
    

} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
} 

?>