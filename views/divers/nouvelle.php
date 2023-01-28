<?php @session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>portail.lsll.sn</title>
    <!-- CSS LINK -->
     <link rel="stylesheet" href="../../views/css/styles.css">
    <link rel="stylesheet" href="../../views/css/style_admin.css">

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

                    <!-- Nouvaux  message -->
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                              <a href="/ab/views/personnelle_dasbord.php">Page-Precédent</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Page-Actuel</li>
                        </ol>
                    </nav>
                    <div class="card card2 mb-1 mt-3">
                        <h5 class="card-header ">Nouvelles</h5>
                        <div class="card-body ">
                        
        <?php 
                // appelle de la base données des personnelles
                require_once "../../core/dbpersonnelles.php";  
                //appelle du fichier affichage_nouvelle_message_admin_et_question_personnelle des nouvelles envoyer par les admins
                    require_once ('../../models/admins_nouvelle_reponse/affichage_nouvelle_message_admin_et_question_personnelle.php');
          
                            foreach($resutats  as $ligne1){   ?>
                            <h6 class="card-title  ">
                                <i class="fa-solid fa-user text-secondary fs-4"></i>
                                <span class="text-primary text-decoration-underline fst-italic me-1">Envoyer par:</span><?= $ligne1["nomAdmin"]; ?><br>
                                <span class="text-primary text-decoration-underline fst-italic ms-4 ">Date</span> <?= $ligne1["dates"]; ?>
                                <span class="text-primary text-decoration-underline fst-italic me-1"> à</span><?= $ligne1["heures"]; ?>
                                 <h5 id="titre-nouvelle">Sujet:  <?= $ligne1["titre_message_Admin"]; ?></h5>
                            </h6>
                    
                            <div class="message" >
                                <p class="card-text  p-2 text-white ">
                                    <i class="fa-solid text-black fa-envelope fs-4 me-2"></i><?= $ligne1["message_admin"]; ?>
                                </p>

                            </div>
                            <div class="d-flex justify-content-end">
                                <?php if($ligne1["dates"]==$date ){  ?>
                                <span class="text-success">récent</span>
                                <?php }else{?>
                                <span>ancien</span>
                                <?php }?>
                            </div>
                            <hr>
                            <?php } 
                             // fermer la base de donnée
                                require_once("../../core/fermerDb.php");
         ?>


                        </div>

                    </div>
                </div>
                <?php require_once("../../views/includes/footer.php");?>
            </div>
        </div>
        <!--  Bootstrap javascript -->
        <script src="../../views/assets/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

    </body>

</html>
