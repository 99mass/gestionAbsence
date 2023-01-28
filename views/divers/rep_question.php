<?php @session_start()?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>portail.lsll.sn</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="../../views/css/styles.css">
    <!-- <link rel="stylesheet" href="../../views/css/style_admin.css"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <body class="sb-nav-fixed">
        <!-- navbar horizontale -->
        <?php require_once("../../views/includes/header.php");?>
        <div id="layoutSidenav">
            <!-- navbar vertical -->
            <?php require_once("../../views/includes/leftbar.php");?>
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4 mb-4">



            <!-- debut Modal pour afficher les responses-->
            <?php require_once ('../../models/admins_nouvelle_reponse/afficher_response_admin.php');?>

                    <div class="modal-dialog " role="document">

                    <div class="modal-content w-100">
                        <div class="modal-header bg-primary ">
                            <h5 class="modal-title text-white text-capitalize" id="exampleModalLabel1">réponses questions </h5>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body bg-light">
                            <?php
                            if(count($resutat)>0){

                             foreach($resutat as $ligne){ ?>
                            <h6 class="p-3">
                                <span style="text-decoration: underline;">Question :</span>
                                <?=$ligne["question_membres"]; ?>
                            </h6>
                            <?php if ($ligne["reponse_admin"]=='' ) {?>

                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <i class="fa-solid fa-circle-xmark me-2"></i> la réponse en coure de traitement patientez !
                            </div>

                            <?php }else { ?>
                            <p class="p-2 bg-success" style="border: 1px solid gray;opacity: 0.8; color:white">
                                <span class="me-2 text-black" style="text-decoration: underline;"> Reponse :</span>
                                <?= $ligne["reponse_admin"]; ?>
                            </p>
                            <?php }?>
                            <p style="width: 100%; text-align: end; font-size: small;">
                                <span class=" me-1" style="text-decoration: underline;">Date:</span>
                                <?=$ligne["dates"]; ?> ,
                                à <?=$ligne["heure"]; ?>
                            </p>
                            <hr>
                            <?php }
                            }else { ?>
                                <div class="alert alert-warning d-flex align-items-center" role="alert">
                                 vous n'avez pas poser de question ..
                                </div>
                           <?php  }?>
                        </div>
                    </div>
                </div>

                  </div>
                <?php require_once("../../views/includes/footer.php");?>
            </div>
        </div>
        <!--  Bootstrap javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="../../views/assets/scripts.js"></script>

 </body>
 </html>
