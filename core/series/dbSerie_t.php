<?php
             /**
         * base de donnée serie_t
         */
    $server='localhost';
    $nomDb='serie_t';
    $login='root';
    $password='';
try {
    $db=new PDO ("mysql:host=$server;dbname=$nomDb",$login, $password);
    
    

} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
} 

?>