<?php @session_start();?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>portail.lsll.sn</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="../views/css/styles.css">
    <link rel="stylesheet" href="../views/css/style_admin.css">

</head>

<body class="sb-nav-fixed">

    <body class="sb-nav-fixed" style='background-color: #E0FFFF;'>
        <!-- navbar horizontale -->
        <?php require_once("../views/includes/header.php");?>
        <div id="layoutSidenav">
            <!-- navbar vertical -->
            <?php require_once("../views/includes/leftbar.php");?>
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4 mb-4"> 
                    
                        <?php 
                        //  on affiche le message de Succes ou d'Erreur d'envoit de données
                                if(!empty($_SESSION['success'])){
                                    echo '<div class="alert alert-success mt-3" role="alert"> '.$_SESSION['success'].' </div>';
                                    $_SESSION['success']='';
                                }
                                if(!empty($_SESSION['erreur'])){
                                    echo '<div class="alert alert-danger mt-3" role="alert">'.$_SESSION['erreur'].' </div>';
                                        $_SESSION['erreur']='';
                                } 
                          require_once("../models/effectifModel/membres.php");
                        ?>

                    <!-- debut section effectifs  -->
                    <div class="row mt-3  bg-white ">
                    <div class="card mb-3">
                        <h5 class="card-header text-capitalize  text-black fw-bold ">effectifs </h5>
                    </div>

                        <div class=" mb-4  grid" >

                            <div class="card bg-primary text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Super-Admin</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_Super_admin?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>                            
                        <div class=" mb-4  grid" >

                            <div class="card bg-primary text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Admin</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_admin?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class=" mb-4 grid ">
                            <div class="card bg-primary text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Surveillant</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_Surveillant ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" mb-4 grid ">
                            <div class="card bg-primary text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Proffesseurs</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_Proffesseur; ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" mb-4 grid ">
                            <div class="card bg-success text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie S1</div>
                                            <div class="text-lg fw-bold">
                                                     <?=$effectif_serie_S1 ; ?>
                                                         <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mb-4 grid ">
                            <div class="card bg-success text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie S2</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_serie_S2  ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mb-4 grid ">
                            <div class="card bg-success text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie S3</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_serie_S3 ; ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mb-4 grid ">
                            <div class="card bg-secondary text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie L1</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_serie_L1 ; ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mb-4 grid ">
                            <div class="card bg-secondary text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie L2</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_serie_L2; ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mb-4 grid ">
                            <div class="card bg-secondary text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie L'</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_serie_Lp; ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mb-4 grid ">
                            <div class="card bg-warning text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie T</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_serie_T; ?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" mb-4 grid ">
                            <div class="card bg-black text-white  ">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Serie STEG</div>
                                            <div class="text-lg fw-bold">
                                                <?=$effectif_serie_Steg;?>
                                                        <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square feather-xl text-white-50">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                        </svg>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                 </div>
                    <!-- fin section effectifs  -->

                    <!--section de messagerie  -->
<div id="section">

                        <!--debut Nouvaux  message admin-->
             <div class="row2 mt-3 pt-1   ">

                 <?php  
                            /**
                             *   appelle a la base de donnée
                             * /   applle du fichier affichage_nouvelle_message_admin_et_question_personnelle.php
                            */                          
                        require_once ('../models/admins_nouvelle_reponse/affichage_nouvelle_message_admin_et_question_personnelle.php')
                   ?>
                            <!--  recuperation des mesage envoyer par les admins -->
                     <div class="card card2 mb-1">
                                <h5 class="card-header  text-black fw-bold ">Messages Admins
                                     <button
                                            type="button" class="btn alert-link butt text-white  bg-success"
                                            data-bs-toggle="modal" style="float: right;" data-bs-target="#myModal"
                                           >
                                            <i class="fa-solid fa-envelope me-1 "></i>Nouveaux Message
                                    </button>
                                </h5>

                         <div class="card-body ">
                            <?php  foreach($resutat as $ligne1){   ?>
                                    <h6 class="card-title  ">
                                        <span class="text-black fs-italic me-1"> <i
                                                class="fa-solid fa-user text-secondary fs-2"></i></span>
                                                <?= $ligne1["nomAdmin"]; ?>/ <span class="text-primary"> Rôle: <?= $ligne1["statu"]; ?></span>
                                        <span class="" style="float: right;">
                                            <?php if($ligne1["dates"]==$date ){  ?>
                                                <span class="text-success">récent</span>
                                            <?php }else{?>
                                                <span>ancien</span>
                                            <?php }?>
                                         </span>

                                    </h6>
                                    <h6 id="titre-nouvelle">Sujet:  <?= $ligne1["titre_message_Admin"]; ?></h6>
                                    <p id="message" class=" card-text text-white bg-secondary p-2 ">
                                        <i class="fa-solid fa-envelope text-black fs-4 me-2"></i><?= $ligne1["message_admin"]; ?>
                                    </p>
                                     <a class="btn alert-link bg-info "
                                                        href="/ab/views/divers/modifier_nouvelle.php?id=<?= $ligne1["id"]; ?>">
                                                        <i class="fa-solid fa-check-double"></i> Modifier
                                    </a>
                                    <div class=" d-flex justify-content-end text-muted badge  text-wrap me-1">
                                        date: <?= $ligne1["dates"]; ?>
                                            <span class="me-1 ms-1">à</span> <?= $ligne1["heures"]; ?>
                                    </div>
                                    <hr>
                             <?php }?>
                         </div>

                    </div>

                            <!-- debut formulaire pour annocer des nouvelles -->
                            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success">
                                            <h5 class="modal-title " id="exampleModalLabel">Nouveaux messages</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST"
                                                action="../models/admins_nouvelle_reponse/insert_message.php">
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label text-primary">Titre Message:</label>
                                                    <input  type="text" class="form-control"  name="titre_message" required >
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label text-primary">Message:</label>
                                                    <textarea class="form-control" id="message-text" name="message" required
                                                        ></textarea>
                                                </div>
                                                <label for="message-text" class="col-form-label text-primary">Addressé aux :</label>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="status" value="PF"
                                                        type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">aux
                                                        proffesseurs
                                                    </label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="status" value="SV"
                                                        type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">aux
                                                        surveillant</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="status" value="" checked
                                                        type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">à tout
                                                        le monde</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin formulaire pour annocer des nouvelles -->
            </div>
                        <!--fin Nouvaux  message admin-->

    <!-- ************************************************************************************************************* -->

         <!--debut  questions des membres  -->
           <div class="row3 mt-5 pt-1  mb-0 ">
              <!-- recuperation des question envoyer par les membres et la reponse des admins                                -->
                 <div class="card card3 mb-1">
                        <h5 class="card-header  text-black fw-bold ">Questions Membres</h5>
                             <div class="card-body ">
                                <?php  foreach($question as $ligne1){   ?>
                    
                                            <h6 class="card-title mt-2">
                                                <span class="text-black me-1 ">
                                                    <i class="fa-solid fa-user text-secondary fs-3"></i>
                                                </span> <?= $ligne1["nomMembre"]; ?>/<span class="text-primary">Role:<?= $ligne1["statu"]; ?></span>
                                                
                                            </h6>
                                            <div id="message" class="bg-secondary p-3 ">
                                                    <p class="card-text text-white p-2  ">
                                                        <span class="me-2 text-black" style="text-decoration: underline;"> Question :</span>
                                                        <span id="question" >  <?= $ligne1["question_membres"]; ?> </span>
                                                    </p>

                                                    <?php   if ($ligne1["traiter"]==1) {  ?>
                                                    <p class="alert  d-flex align-items-center p-2" role="alert">
                                                        <span class="me-3 " style="text-decoration: underline;">Rep: </span>
                                                         <span id="reponse" >  <?= $ligne1["reponse_admin"]; ?> </span>
                                                    </p>

                                                    <a class="btn alert-link bg-info "
                                                        href="/ab/views/divers/reponses.php?id=<?= $ligne1["id"]; ?>">
                                                        <i class="fa-solid fa-check-double"></i> Modifier
                                                    </a>

                                                    <?php } else{ ?>
                                                    <a class="btn alert-link bg-white "
                                                        href="/ab/views/divers/reponses.php?id=<?= $ligne1["id"]; ?>">
                                                        <i class="fa-solid fa-paper-plane"></i> Répondre
                                                    </a>

                                                    <?php }?>
                                            </div>
                                            
                                             <span class=" d-flex justify-content-end text-muted badge  text-wrap me-1 " style="float: right;"> 
                                                     date: <?= $ligne1["dates"]; ?>
                                                    <span class="me-1 ms-1">à</span> <?= $ligne1["heures"]; ?> 
                                              </span>
                                            <hr>
                                            

                                <?php }?>
                            </div>

                    </div>

            </div>
                        <!--fin  questions des membres  -->
  </div>



            </div>
            <!-- pieds de la page -->
            <?php require_once("../views/includes/footer.php");?>
        </div>
    </div>
            <!--  Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
    <script src="../views/assets/scripts.js"></script>
    

    </body>

</html>
<?php 
    // fermer la base de donnée
    require_once("../core/fermerDb.php")
?>