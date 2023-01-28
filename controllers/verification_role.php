<?php 
/**
 * ici notre controller a pour but de choisir la page a afficher pour le personnel connecté 
 */

// si on est Super-Admin ou Admin 
      if($_SESSION['user']['role']=='SAD'|| $_SESSION['user']['role']=='AD'){
                  // si on clique dans le leftbar sur justifier on peut justifier un eleve come peut le faire un Surveillant
                  if (!empty($_GET['justifie']) && empty($_GET['inscri']) && empty($_GET['presence']) ) {
                         $dossier="justifier/liste_absence.php";
                  }
                        // sinon si on clique sur presence on peut marquer la presence d'un éléve comme peut le u Proffesseurs
                  else if (!empty($_GET['presence']) && empty($_GET['inscri']) && empty($_GET['justifie'])) {
                        $dossier="marquer/liste.php";
                  }else{
                        // sinon un va inscrire un éleve
                         $dossier="inscrire/eleve.php";
                  }
      }

                  // si on est Survillant on va etre rediriger de le tableau fde bord pour justifier  les presence
            if($_SESSION['user']['role']=='SV') {
                  $dossier="justifier/liste_absence.php"; 
                  // sinon si on est Proffessueur on va marquer kes absence  
            }elseif ($_SESSION['user']['role']=='PF') {
                  $dossier="marquer/liste.php";
            }
?>