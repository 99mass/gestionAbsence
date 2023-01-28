<?php @session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="../../views/css_inscrire/style_eleve.css">
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
            <div class="container-fluid px-2">
                <div class="alert alert-dark  mt-2" role="alert">
                   
                    <h2 id="titre-classe" class="text-center text-capitalize"> 
                            <i class="fa-solid fa-graduation-cap icon-serie"></i>
                                <!-- affichage nom de la classe  ou on se trouve-->
                                    <?= $_GET['niveau'] ?> <?= $_GET['serie']?> <?= $_GET['classe']?>
                    </h2>
                </div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="/ab/views/personnelle_dasbord.php">Page-Precédent</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Page-Actuel</li>
                    </ol>
                </nav>

                <?php 
                  //  on affiche le message de session
                                if(!empty($_SESSION['success'])){
                                    echo '<h5 class="alert alert-success text-center text-capitalize" role="alert"> '.$_SESSION['success'].' </h5>';
                                    $_SESSION['success']='';
                                }
                                if(!empty($_SESSION['erreur'])){
                                    echo '<h5 class="alert alert-danger text-center text-capitalize" role="alert">'.$_SESSION['erreur'].' </h5>';
                                        $_SESSION['erreur']='';
                                }
                 ?>
                <div class="data-table mb-3">
                    <?php  //formulaire d'Enregistrements des eleves ?>

                    <div class="accordion accordion-flush mb-4" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed bg-info text-capitalize text-white fs-5 " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Inscrirer eléves
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body section-1 bg-info ">
                                                    <!-- on envoit le formulaire en evoiyant la le niveau,la serie et la classe de l'éléve à créer -->
                                    <form
                                        action="/ab/models/eleveModel/insert.php?nv=<?=$_GET['niveau'] ?>&se=<?= $_GET['serie']?>&cl=<?= $_GET['classe']?>"
                                        method="POST">
                                        <div class="input-group  mb-3 mt-3 group-1">
                                            <div class="champs mb-2 champs-2-text w-100 ">
                                                <span class="input-group-text  me-2 color-span">Prenom</span>
                                                <input type="text" class="form-control " name="prenom"
                                                    placeholder="ex : samba" autocomplete="off" aria-label="prenom">
                                            </div>
                                            <div class="champs champs-2-text mb-2 w-100">
                                                <span class="input-group-text  me-2 color-span ">Nom</span>
                                                <input type="text" class="form-control  " name="nom"
                                                    placeholder="ex : diop" autocomplete="off" aria-label="nom">
                                            </div>
                                            <div class="champs champs-2 w-100 mb-2">
                                                <span class="input-group-text  me-2 color-span ">Date Naissance</span>
                                                <input type="date" class="form-control ps-1 " name="date_naissance"
                                                    value="1999-02-14" aria-label="date_naissance">
                                            </div>
                                            <div class="input-group  w-100 ">
                                                <span class="input-group-text  me-2 color-span"
                                                    style="background-color: goldenrod;height:40px;width: 20%;">SEX</span>
                                                <select class="form-select   mb-3" name="sex"
                                                    aria-label="Default select example">
                                                    <!-- <option selected>Sexe</option> -->
                                                    <option value="M">Masculin</option>
                                                    <option value="F">Féminin</option>
                                                </select>
                                            </div>
                                            <button class="button-send  mx-3 mt-3 w-100 ">Inscrire</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php   //fin  formulaire d'Enregistrements éléves   ?>

                <?php

                            // appel au modele affichage.php
                            require_once ('../../models/eleveModel/affichage.php');
                            // $numeroLigne permet de marque le numero de ligne dans la table a afficher
                            $numeroLigne=1;

                            // affiche tout les eleves si la base de donné n'est pas vide
                 if(count($resutats) > 0)
                  {
                ?>
                        <span class="btn btn-outline-dark fw-bold text-black fs-4 mb-3 disabled w-100">listes des
                            éléves</span>
                        <div id="container-table">
                            <table id="datatablesSimple" class="display pt-3  ">
                              <thead>
                                <tr>
                                    <th id="th-table">#</th>
                                    <th id="th-table">prénom</th>
                                    <th id="th-table">nom</th>
                                    <th id="th-table">Sex</th>
                                    <th id="th-table">date naissance</th>
                                    <th id="th-table">actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                        //    lister l'ensemble des eleves
                             foreach($resutats as $ligne){   ?>

                                <tr>
                                 <!-- mettre tout ligne en blanc si la presence est null -->
                                    <td class="alert alert-white text-secondary" role="alert"><?= $numeroLigne++; ?>
                                    </td>
                                    <td class="alert alert-white text-secondary" role="alert"><?= $ligne["prenom"]; ?>
                                    </td>
                                    <td class="alert alert-white text-secondary" role="alert"><?= $ligne["nom"]; ?></td>
                                    <td class="alert alert-white text-secondary" role="alert"><?= $ligne["sex"]; ?></td>
                                    <td class="alert alert-white text-secondary" role="alert">
                                        <?= $ligne["date_naissances"]; ?></td>
                                    <td>
                                        <a class="btn fw-bold px-2 mb-1 text-black bg-primary"
                                            href="/ab/views/modifier/eleve.php?id=<?= $ligne["id"]; ?>&niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">Modifier</a>
                                        <a class="btn fw-bold px-1 text-black bg-danger"
                                            style="background-color: white;"
                                            href="/ab/models/eleveModel/supprimer.php?id=<?= $ligne["id"]; ?>&niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">Supprimer</a>
                                    </td>

                                </tr>

                             <?php  }  ?>
                            </tbody>
                        </table>
                    </div>
                <?php   } ?>
                </div>


            </div>
            <!-- pied de la page -->
           <?php require_once("../../views/includes/footer.php");?>
        </div>
    </div>
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