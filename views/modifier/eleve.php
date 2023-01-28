<?php @session_start();
/**
     * appel du controllers verification_roles.php
*/
require_once('../../controllers/verification_role.php');

?>

<!-- modifier les information de l'eleves -->
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
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
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
                    <h2 id="titre-classe" class="text-center"> <i
                            class="fa-solid fa-graduation-cap icon-serie"></i>Seconde S1 A</h2>
                </div>
                <!--formulaire de modication de des eleves -->

                <!-- debut card boostrap avec formulaire de MOdification d'éléve   -->
                <!-- <div class="container mb-5 "> -->
                <div class="card mb-3 " id="card-container">
                    <div class="card-header bg-dark text-white">
                    Modifier Informations Eléves
                    </div>
                    <div class="card-body bg-info">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="/ab/views/<?=$dossier?>?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">Page-Precédent</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Page-Actuel</li>
                            </ol>
                        </nav>
                        <?php require_once ("../../models/eleveModel/modifier.php"); ?>
                        <form
                            action="/ab/models/eleveModel/modifier.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>"
                            method="POST">
                            <div class="input-group mb-3 mt-3">
                                <div class="champs mb-3  w-100">
                                    <span class="input-group-text color-span w-50 me-1">Prenom</span>
                                    <input type="text" class="form-control bg-light" name="prenom"
                                        value="<?= $ligne_id['prenom'] ?>" autocomplete="off" aria-label="prenom">
                                </div>
                                <div class="champs  w-100">
                                    <span class="input-group-text color-span w-50 me-1 ">Nom</span>
                                    <input type="text" class="form-control bg-light " name="nom"
                                        value="<?= $ligne_id['nom'] ?>" autocomplete="off" aria-label="nom">
                                </div>
                                <div class="champs  w-100 mt-3">
                                    <span class="input-group-text color-span w-50 me-1 " style="height:40px;">Sex</span>
                                    <select class="form-select  bg-light" name="sex"
                                        aria-label="Default select example">
                                        <option value="<?= $ligne_id['sex'] ?>" selected><?= $ligne_id['sex'] ?>
                                        </option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                                <div class="champs  w-100 mt-2 ">
                                    <span class="input-group-text color-span w-50 me-1 ">Date Naissance</span>
                                    <input type="date" class="form-control  bg-light " name="date_naissance"
                                        value="<?= $ligne_id['date_naissance'] ?>" aria-label="date_naissance">
                                </div>
                                <?php //on marque null la presence de l'eleve s'il vient d'etre inscrit ?>
                                <input class="form-check-input border-success" type="hidden" name="id_user"
                                    id="inlineRadio1" value="<?= $ligne_id['id'] ?>">

                                <button class="button-envoyer  ms-2 mt-3 ">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- </div> -->
                <!-- fin card boostrap avec formulaire de MOdification d'éléve  -->


                 <!-- pied de la page -->
           <?php require_once("../../views/includes/footer.php");?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
   <script src="../assets/scripts.js"></script>
</body>

</html>

<?php  
     // fermer la base de donnée
    require_once("../../core/fermerDb.php")
?>