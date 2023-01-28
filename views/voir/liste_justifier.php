<?php @session_start();?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK -->
   <link rel="stylesheet" href="../../views/css_marquer/marquer_listes.css">
     <link rel="stylesheet" href="../../views/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- CND javascript  fontaweson -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- CDN css jquery -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <title>portail.lsll.sn</title>
</head>

<body class="sb-nav-fixed">
     <!-- navbar horizontale -->
    <?php require_once("../../views/includes/header.php");?>
    <div id="layoutSidenav">
        <!-- navbar vertical -->
        <?php require_once("../../views/includes/leftbar.php");?>
        <div id="layoutSidenav_content">
            <div class="container px-2">

                <div class="alert alert-dark  mt-2 mb-3 " role="alert">
                    <h2 id="titre-classe" class="text-center"> <i
                            class="fa-solid fa-graduation-cap icon-serie"></i>
                        <!-- affichage nom de la classe  ou on se trouve-->
                        <?= $_GET['niveau'] ?> <?= $_GET['serie']?> <?= $_GET['classe']?>    
                    </h2>
                </div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li id="page-actuel" class="breadcrumb-item"><a href="/ab/views/marquer/liste.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">< Page-Precédent</a></li>
                        <li id="page-precedent" class="breadcrumb-item"><a href="/ab/views/marquer/liste.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">Retour</a></li>
                        <li class="breadcrumb-item active" aria-current="page" id="page-actuel">Page-Actuel</li>                                        
                    </ol>
                </nav>

                <?php 
                   //      on affiche le message de Succes ou d'Erreur
                    if(!empty($_SESSION['success'])){
                        echo '<div class="alert alert-success mt-3 p-3 text-center text-capitalize" role="alert"> '.$_SESSION['success'].' </div>';
                        $_SESSION['success']='';
                    }
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert-danger mt-3 p-3 text-center text-capitalize" role="alert">'.$_SESSION['erreur'].' </div>';
                            $_SESSION['erreur']='';
                    }
                 ?>
             <!-- lien vers les differents listes -->
        <div class="data-table">
         <div class="w-100" >
                  <a href="/ab/views/voir/liste_absence.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>" id="btn-absence-justifier" class="btn btn-outline-danger text-decoration-none">
                      <i class="fa-solid fa-link me-1 fs-5"></i> Absence 
                  </a> 
                  <a href="/ab/views/voir/liste_present.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>" id="btn-liste-present" class="text-decoration-none btn btn-outline-success">
                        <i class="fa-solid fa-link me-1 fs-5"></i>Prèsent 
                  </a> 
         </div>
            <span class="btn btn-outline-primary text-capitalize text-primary text-center disabled fs-5 mt-4  mb-2 fw-bold w-100">
                    listes  absences justifiés
            </span>
                <form action="/ab/views/voir/liste_justifier.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>" method="POST" class="mb-2" >
                    <div class="input-group ">
                        <input type="number" name="jour_chercher" placeholder="jour..." min="1" max="31" >
                        <select name="mois_chercher" class="custom-select me-2" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>mois...</option>
                            <option value="1">Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>

                        </select>
                        
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit">chercher</button>
                    </div>
            </form>
             <?php 
                 require_once('../../models/voir_presenceModel/liste_justifier.php');
                $numeroLigne=1;
                // affiche tout les eleves si la base de donné n'est pas vide
                
        ?>
            </div>
                <div id="table-container">
                    <table id="datatablesSimple" class="display pt-3 mt-3">
                        <thead>
                            <tr style="background-color:#000080 ;color:white">
                                <th >N°</th>
                                <th >prénom</th>
                                <th >nom</th>
                                <th >date naissance</th>
                                <th >cours</th>
                                <th >Date Cours</th>
                                <th >Heur Cours</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                /**
                                 *  lister l'ensemble des éléves suivant les diffrentes mois
                                 */  
                              ?> 
                             

                         <?php  //si on a des donnés
                                if(count($liste_justifier)> 0)
                                {  
                            ?>
                                    
                                    <?php  foreach($liste_justifier as $ligne){   ?>
                                              <tr >                                                                 
                                                    <td class="alert  pt-2 pb-3" role="alert" ><?= $numeroLigne++; ?></td>
                                                    <td class="alert  pt-2 pb-3 " role="alert"><?= $ligne["prenom"]; ?></td>
                                                    <td class="alert  pt-2 pb-3 " role="alert"><?= $ligne["nom"]; ?></td>
                                                    <td class="alert  pt-2 pb-3 " role="alert"><?= $ligne["date_naissances"]; ?></td>
                                                    <td class="alert  pt-2 pb-3" role="alert"><?= $ligne["cours"]; ?></td>
                                                    <td class="alert  pt-2 pb-3 " role="alert"><?= $ligne["date_cour"]; ?></td>
                                                    <td class="alert  pt-2 pb-3 " role="alert"><?= $ligne["heure"]; ?></td>
                                                  
                                                    
                                            </tr>

                                <?php           } 
                                     } ?>

                               
                    </tbody>
                    </table>
                </div>
        </div>

            </div>
            <!-- pied de la page -->
           <?php require_once("../../views/includes/footer.php");?>
        </div>
    </div>
    <!-- Boostrap CDN javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <!-- CDN jquery qui gére la table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatable.js"></script>
    <script src="../assets/scripts.js"></script>
</body>

</html>

<?php  
    // fermer la base de donnée
    require_once("../../core/fermerDb.php") 
?>