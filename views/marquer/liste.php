<?php @session_start();    
?>
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
            <div class="container px-3">

                <div class="alert alert-dark  mt-2 mb-3 " role="alert">
                    <h2 id="titre-classe" class="text-center"> <i
                            class="fa-solid fa-graduation-cap icon-serie"></i>
                        <!-- affichage nom de la classe  ou on se trouve-->
                        <?= $_GET['niveau'] ?> <?= $_GET['serie']?> <?= $_GET['classe']?>    
                    </h2>
                </div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li id="page-actuel" class="breadcrumb-item"><a href="/ab/views/personnelle_dasbord.php">< Page-Precédent</a></li>
                        <li id="page-precedent" class="breadcrumb-item"><a href="/ab/views/personnelle_dasbord.php">Retour</a></li>
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

                         // appel au modele du firchier liste.php du dossier  marquer_presenceModel
                            require_once ('../../models/marquer_presenceModel/liste.php');
                 ?>
                 <!-- lien vers les differentes listes -->
                    <div class="w-100 mb-2" >
                        <a href="/ab/views/voir/liste_present.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>" id="btn-liste-present" class="text-decoration-none btn btn-outline-success">
                                <i class="fa-solid fa-link me-1 fs-5"></i>Prèsent
                        </a> 
                        <a href="/ab/views/voir/liste_absence.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>" id="btn-liste-present" class="text-decoration-none btn btn-outline-danger">
                             <i class="fa-solid fa-link me-1 fs-5"></i>Absence 
                         </a>
                        <a href="/ab/views/voir/liste_justifier.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>" id="btn-absence-justifier" class="btn btn-outline-primary text-decoration-none">
                                <i class="fa-solid fa-link me-1 fs-5"></i>Justifier 
                        </a> 
                   
                </div>
                <?php  //formulaire de recherches d'eleves ?>
                <div class="data-table">
                    <?php                       
                        // $numeroLigne permet de marque le numero de ligne dans la table a afficher
                        $numeroLigne=1;

                        // affiche tout les eleves si la base de donné n'est pas vide
                        if(count($resutats) > 0)
                        {
                    ?>
                    <span class="btn btn-outline-warning text-black fs-5 mb-2 mt-3 disabled w-100">Marquer les  Absences</span>
                    <div id="table-container" class="mt-3" >
                        <table id="datatablesSimple" class="display   pt-3 mt-5 ">
                            <thead>
                                <tr>
                                    <th id="th-table">#</th>
                                    <th id="th-table">prénom</th>
                                    <th id="th-table">nom</th>
                                    <th id="th-table">date naissance</th>
                                    <th id="th-table">Sex</th>
                                    <th id="th-table">Action</th>
                                </tr>
                            </thead>
                     <tbody>
                         <?php 
                                //  lister l'ensemble des eleves
                           foreach($resutats as $ligne){  
                         ?>

                            <tr >
                        <!-- *mettre tout ligne en blanc si la presence est null -->
                            
                                    <td class="alert alert-white text-secondary " role="alert"><?= $numeroLigne++; ?></td>
                                    <td class="alert alert-white text-secondary" role="alert"><?= $ligne["prenom"]; ?></td>
                                    <td class="alert alert-white text-secondary" role="alert"><?= $ligne["nom"]; ?></td>
                                    <td class="alert alert-white text-secondary" role="alert"><?= $ligne["date_naissances"];?></td>
                                    <td class="alert alert-white text-secondary" role="alert"><?= $ligne["sex"]; ?></td>
                                    <td>
                                        <a class="btn fw-bold text-black p-1 bg-light btn-outline-primary"
                                        href="/ab/views/marquer/presence.php?id=<?= $ligne["id"] ?>&niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">presence</a>
                                     </td>
                            </tr>
                         <?php  }  ?>
                     </tbody>
                </table>
           </div>
        <?php  } ?>
       
             </div>
            </div>
            <!-- pied de la page -->
           <?php require_once("../../views/includes/footer.php");?>
        </div>
    </div>
        <!-- Boostrap CDN  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">  </script>
   
    <!-- CDN jquery qui gére la table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatable.js"></script>
    <script src="../assets/scripts.js"></script>
</body>

</html>

<!-- ************************************************************************************************** -->
<?php 
    // fermer la base de donnée
    require_once("../../core/fermerDb.php")
 ?>