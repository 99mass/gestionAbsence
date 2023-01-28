<?php 
                /**
                 * requete pour afficher la liste des eleves
                 */
        // ici on recupere le niveau ,la serie et la classe passaiet en   URL
$serie=htmlspecialchars(trim(strip_tags($_GET['serie'])));
$niveau=htmlspecialchars(trim(strip_tags($_GET['niveau'])));
$classe=htmlspecialchars(trim(strip_tags($_GET['classe'])));
// appelle de la base de donnée en fonction de la classe choisi
require_once("../../core/series/dbSerie_{$serie}.php");
   
 $sql = "SELECT DISTINCT  {$niveau}_{$serie}_{$classe}.id,prenom,nom, DATE_FORMAT(date_naissance, '%d/%m/%Y') AS date_naissances,sex ,presence,date_cours,heure_cours
         FROM {$niveau}_{$serie}_{$classe}
        INNER JOIN mp_{$niveau}_{$serie}_{$classe} ON {$niveau}_{$serie}_{$classe}.id= mp_{$niveau}_{$serie}_{$classe}.id_proprietaire
        WHERE  presence ='null'
        ORDER BY nom ";
        $query =$db->prepare($sql);
        $query->execute();
        $resutats = $query->fetchAll(PDO::FETCH_ASSOC);

?>