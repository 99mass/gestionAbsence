<!-- page de Marquage d'absence  -->
<?php  @session_start(); ?>

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
                        class="fa-solid fa-graduation-cap icon-serie"></i>
                         <!-- affichage nom de la classe  ou on se trouve-->
                        <?= $_GET['niveau'] ?> <?= $_GET['serie']?> <?= $_GET['classe']?> 
                    </h2>
                </div>

                  <!-- debut Modal boostrap avec formulaire de marquage d'absence  -->
                    <div class="modal-dialog " role="document">
                    <div class="modal-content w-100">
                        <div class="modal-header bg-primary ">
                            <h5 class="modal-title text-white text-capitalize" id="exampleModalLabel1">marquer présence</h5>
                        </div>
                        <div class="modal-body bg-light">


                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="/ab/views/marquer/liste.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">Page-Precédent</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Page-Actuel</li>
                            </ol>
                        </nav>
                      <?php 
                            // appel au modele du firchier liste.php du dossier  marquer_presenceModel
                            require_once ('../../models/marquer_presenceModel/presence.php');
                                  
                                /**
                             * ici on verifie si la dernier date de  presence de l'éléve  n'est  pas aujourd'hui 
                                *ou si l'heure de la dernier presence  n'est pas  inférieur a 30mn
                                *si ces informations sont correcte on afiche le formulaire de presence
                            */      
                                    // on affiche le message de Succes ou d'Erreur                             

                            if ( ($dateDb != $dateAujoudHui) || ($diff_entre_Hac_et_Hdb>$heurSeuil) ) {
                        ?>
                        
                        <h5 class="card-title "> Mr/Mme : 
                            <span class="text-decoration-underline text-secondary  text-capitalize" style="font-size: medium;">
                                <?= $ligne_id['prenom'] ?> <?= $ligne_id['nom'] ?> 
                            </span> est :
                        </h5>
                        <!-- debut formulair -->
                        <form action="../../models/marquer_presenceModel/presence.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>&presence=P"
                            method="POST">                                                               <!--  ici le parametre presence permet de savoir qui a envoyé le formulair en se basant siur son role -->
                            <div class="form-check form-switch">
                                <input class="form-check-input bg-success" name="presences" value="present"
                                    type="checkbox" id="flexSwitchCheckChecked">
                                <label class="form-check-label text-success" for="flexSwitchCheckChecked">
                                    Prèsent</label>
                            </div>
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input bg-danger" name="presences" value="absent"
                                    type="checkbox" id="flexSwitchCheckChecked">
                                <label class="form-check-label text-danger" for="flexSwitchCheckChecked">
                                    Absent</label>
                            </div>
                            <label for="large-select" class="mt-3 "> Indiquer Motif d'Absence ?</label>
                            <span class="text-danger text-decoration-underline fw-bold">*obligatoire si l'éléve est
                                absent</span>
                            <select class="form-select bg-light mb-3" id="large-select" name="motifs"
                                aria-label="Default select example">
                                <option value="">choisir...</option>
                                <option value="Retard">Retard</option>
                                <option value="Indiscipline">Indiscipline</option>
                                <option value="Bavardage">Bavardage</option>
                                <option value="Non-présence">Non-présence</option>
                            </select>

                            <label for="large-select">Indiquer le cours ?</label>
                            <span class="text-danger text-decoration-underline fw-bold">*obligatoire</span>
                            <select class="form-select bg-light" id="large-select" name="cours"
                                aria-label="Default select example" required>
                                <option value="">Cours...</option>
                                <option value="hg">HG</option>
                                <option value="pc">PC</option>
                                <option value="mathématique">MATHEMATIQUE</option>
                                <option value="svt">SVT</option>
                            </select>
                            <input class="form-check-input border-success" type="hidden" name="id_user"
                                id="inlineRadio1" value="<?= $ligne_id['id'] ?>">
                            <button type="submit" class="btn btn-outline-success  mt-3" id="large-select">Marquer</button>
                        </form>
                        <!-- debut formulair -->

                        <?php 
                    //si la presence de l'éléve est déja marquer on signale avec un alert que l'eleve est déja marquer
                        }else {?>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                la prèsence de 
                                <span class="text-black text-capitalize text-decoration-underline"> 
                                    Mr/Mme : <?= $ligne_id['prenom'] ?>  <?= $ligne_id['nom'] ?> 
                                </span> 
                                est déja prise
                            </div>
                        </div>

                        <?php   } ?>

                    </div>
                </div>
            </div>
                 <!-- fin Modal boostrap avec formulaire de marquage d'absence  -->

            </div>
            <!-- pied de la page -->
             <?php require_once("../../views/includes/footer.php");?>
        </div>
    </div>
    <!-- Boostrap javascript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
     <script src="../assets/scripts.js"></script>
</body>

</html>

<?php  
      // fermer la base de donnée
    require_once("../../core/fermerDb.php")
?>