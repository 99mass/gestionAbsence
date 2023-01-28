<?php 

/**
 * ici notre controller a pour role de définir le background-color du body du tableau des differentes personnelle
 */

//  pour les Surveillant
 if($_SESSION['user']['role']=='SV'){
               $body="<body class='sb-nav-fixed ' style='background-color: #FFDAB9;'>";
         }
      //    pour les Proffeseurs
      else if($_SESSION['user']['role']=='PF') {
                $body="<body class='sb-nav-fixed ' style='background-color: #E6E6FA;'>";
      }else {
            // pour les Super/et Admin
             $body= "<body class='sb-nav-fixed ' style='background-color: #888;'>";
      }



?>