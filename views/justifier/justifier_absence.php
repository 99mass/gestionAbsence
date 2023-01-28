<?php 
    @session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK -->
     <link rel="stylesheet" href="../../views/css_marquer/marquer_listess.css">
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

                <div class="alert alert-dark  mt-2 mb-3 " role="alert">
                    <h2 id="titre-classe" class="text-center"> <i
                            class="fa-solid fa-graduation-cap icon-serie"></i>
                        <!-- affichage nom de la classe  ou on se trouve-->
                        <?= $_GET['niveau'] ?> <?= $_GET['serie']?> <?= $_GET['classe']?>    
                    </h2>
                </div>

                <!-- debut Modal boostrap avec formulaire de marquage d'absence  -->
         <div class="modal-dialog " role="document">
                    <div class="modal-content w-100">
                        <div class="modal-header bg-dark ">
                            <h5 class="modal-title text-white text-capitalize" id="exampleModalLabel1">Justifier présence</h5>
                        </div>
                        <div class="modal-body bg-light">

                         <?php 
                            // appelle de notre Model justifier_absence.php
                            require_once('../../models/justifier_presenceModel/justifier_absence.php');
                        ?>
                
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li id="page-actuel" class="breadcrumb-item"><a href="/ab/views/<?=$dossier?>?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">< Page-Precédent</a></li>
                                <li id="page-precedent" class="breadcrumb-item"><a href="/ab/views/<?=$dossier?>?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">Retour</a></li>
                                <li class="breadcrumb-item active" aria-current="page" id="page-actuel">Page-Actuel</li>                                        
                            </ol>
                         </nav>                
            
                        <!-- debut formulaire -->
                        <form  
                            action="/ab/models/justifier_presenceModel/justifier_absence.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>&justifie=JS"
                             method="POST">                                                            <!--  ici le parametre justifie permet de savoir qui a envoyé le formulaire en se basant sur son role-->
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input bg-info" name="presences" value="justifier"
                                    type="checkbox" id="flexSwitchCheckChecked">
                                <label class="form-check-label text-info" for="flexSwitchCheckChecked">Justifier </label>
                            </div>
                           
                            <label for="large-select" class="mt-3 ">Veillez Indiquer l'élément justificatif ?</label>
                            <select class="form-select "  name="elementsjustificatifs"
                                aria-label="Default select example">
                               <option value=""> séléctionez...</option>
                               <option value="presence parent">présence parent</option>
                                <option value="Retard">Retard</option>                                
                                <option value="Malade">Malade</option>
                                <option value="Billet de Sortie">Billet de Sortie</option>
                                <option value="Fin Sanction">Delai de Sanction épuisé</option>
                            </select>
                            
                            <label for="large-select2" class="mt-3 ">Veillez Indiquer le types de Billet donné ?</label>
                            <select class="form-select "  name="billets"aria-label="Default select example">
                                <option value=""> séléctionez...</option>
                                <option value="Billets de Retard">Billets de Retard</option>
                                <option value="Billets d'Absence">Billets de d'Absence</option>
                            </select>
                            <input type="hidden" name="id_user" id="inlineRadio1" value="<?= $ligne_id['id'] ?>">
                            <button type="submit" class="btn btn-outline-success  mt-3">Justifier</button>
                        </form>
                        <!-- fin formulaire -->
                    </div>
                <!-- </div> -->
         </div>
    </div>
        
                <!-- fin Modal boostrap avec formulaire de marquage d'absence  -->

            </div>
             <!-- pied de la page -->
           <?php require_once("../../views/includes/footer.php");?>
        </div>
    </div>
    <!-- Bosstrap CDN javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
       <script src="../assets/scripts.js"></script>
</body>

</html>

<?php  
     // fermer la base de donnée
    require_once("../../core/fermerDb.php") 
?>