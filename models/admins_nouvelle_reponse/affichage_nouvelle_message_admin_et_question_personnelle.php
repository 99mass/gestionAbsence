<?php  @session_start();

            /**
             * requetes pour affiches les afficher les messages de Admins et des Surveillnt et des Proffesseurs
             */

  date_default_timezone_set('GMT');       // la fonction date_default_timezone_set() permet d'affiche au format GMT 
  $date= date('d/m/Y'); 


//   recuperation des mesage envoyer par les admins
 $sql="SELECT DISTINCT id,nomAdmin,titre_message_Admin,message_admin,DATE_FORMAT(`date`, '%d/%m/%Y') AS dates,TIME_FORMAT(heure,'%Hh%imn') AS heures,statu
                                    FROM messages 
                                    WHERE message_admin!=''
                                    ORDER BY `messages`.`id` DESC 
                                    LIMIT 15" ;                   
                        $query =$dataBase->prepare($sql);
                        $query->execute();
                        $resutat = $query->fetchAll(PDO::FETCH_ASSOC);

// recuperation des mesage envoyer par les membres

 $sql1="SELECT  id,idPersonnel,nomMembre,question_membres,DATE_FORMAT(`date`, '%d/%m/%Y') AS dates,TIME_FORMAT(heure,'%Hh%imn') AS heures,reponse_admin,traiter,statu
                                    FROM messages 
                                    WHERE question_membres!=''
                                    ORDER BY `messages`.`id` DESC " ;                   
                                    $query_question =$dataBase->prepare($sql1);
                                    $query_question->execute();
                                    $question = $query_question->fetchAll(PDO::FETCH_ASSOC);

          /*****************************************************************/

  // traiter les nouvelle destiner aux proffesseurs
    if($_SESSION["user"]['role']=='PF'){
        $sqls="SELECT DISTINCT nomAdmin,titre_message_Admin,message_admin,DATE_FORMAT(`date`, '%d/%m/%Y') AS dates,TIME_FORMAT(heure,'%Hh%imn') AS heures,statu
                     FROM messages 
                      WHERE message_admin!='' and statu='PF' OR statu='' 
                      ORDER BY `messages`.`id` DESC 
                     LIMIT 15" ; 
         $querys =$dataBase->prepare($sqls);
        $querys->execute();
        $resutats = $querys->fetchAll(PDO::FETCH_ASSOC);
    }
     // traiter les nouvelle destiner aux surveillannts
   if($_SESSION["user"]['role']=='SV'){
        $sqls="SELECT DISTINCT nomAdmin,titre_message_Admin,message_admin,DATE_FORMAT(`date`, '%d/%m/%Y') AS dates,TIME_FORMAT(heure,'%Hh%imn') AS heures,statu
                     FROM messages 
                      WHERE message_admin!='' and statu='SV' OR statu='' 
                      ORDER BY `messages`.`id` DESC 
                        LIMIT 15 " ; 
         $querys =$dataBase->prepare($sqls);
        $querys->execute();
        $resutats = $querys->fetchAll(PDO::FETCH_ASSOC);
    }

?>