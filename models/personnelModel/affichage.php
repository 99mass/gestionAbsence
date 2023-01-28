   <?php
                  
            /**
             * requete sql pour l'affichage la liste des personnelles en foction des roles
             */
            // appelle a la base de donnée
          require_once "../../core/dbpersonnelles.php"; 

if ($_SESSION['user']['role']=='SAD'){   
              $sql_admin="SELECT DISTINCT id,prenom,nom,DATE_FORMAT(date_naissance, '%d/%m/%Y') AS date_naissances,email,mot_de_passe,rolees
                        FROM personnel
                        WHERE rolees ='SAD' or rolees='AD'
                        ORDER BY nom" ;  
             $query_admin =$dataBase->prepare($sql_admin);
            $query_admin->execute();
            $resutat_admin = $query_admin->fetchAll(PDO::FETCH_ASSOC); 
}   

if ($_SESSION['user']['role']=='SAD' || $_SESSION['user']['role']=='AD' ){   
              $sql_surveillant="SELECT DISTINCT id,prenom,nom,DATE_FORMAT(date_naissance, '%d/%m/%Y') AS date_naissances,email,mot_de_passe,rolees
                        FROM personnel
                        WHERE rolees ='SV'
                        ORDER BY nom" ;  
            $query_surveillant =$dataBase->prepare($sql_surveillant);
            $query_surveillant->execute();
            $resutat_surveillant = $query_surveillant->fetchAll(PDO::FETCH_ASSOC);
}    



            // affichage des proffesseurs
if ($_SESSION['user']['role']=='SAD' || $_SESSION['user']['role']=='AD'){   
              $sql_proffesseur="SELECT DISTINCT id,prenom,nom,DATE_FORMAT(date_naissance, '%d/%m/%Y') AS date_naissances,email,mot_de_passe,rolees
                        FROM personnel
                        WHERE rolees='PF'
                        ORDER BY nom" ; 
              $query_proffesseur =$dataBase->prepare($sql_proffesseur);
            $query_proffesseur->execute();
            $resutat_proffesseur = $query_proffesseur->fetchAll(PDO::FETCH_ASSOC); 
}  


     ?>