<?php
         /**
         * base de donnée serie_l2
         */
    $server='localhost';
    $nomDb='serie_l2';
    $login='root';
    $password='';
try {
    $db=new PDO ("mysql:host=$server;dbname=$nomDb",$login, $password);
    
    

} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
} 

?>