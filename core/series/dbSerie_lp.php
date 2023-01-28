<?php
         /**
         * base de donnée serie_lp
         */
    $server='localhost';
    $nomDb='serie_lp';
    $login='root';
    $password='';
try {
    $db=new PDO ("mysql:host=$server;dbname=$nomDb",$login, $password);
    
    

} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
} 

?>