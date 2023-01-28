
<?php 
session_start();
// on detruie la session de l'utilisateur
 unset($_SESSION['user']);
   header("location: ../index.php");
?>