<?php
 @session_start();
     date_default_timezone_set('GMT');       // la fonction date_default_timezone_set() permet d'affiche au format GMT 
             $dateAujoudHui=date('l, d-M-Y');           // la variable  $dateAujoudHui permet de recuperer la date d'aujourd'hui
            $heurActuelle=date('H', time());    // la variable $heurActuelle permet de recuperer l'heur Actuelle    
      
        //     //appelle du models.php du dossiers date_aujourd_hui
        //   require("../../models/statistiqueModel/date_aujourd_hui/models.php");
        //     //appelle du models.php du dossiers mois_courant
        //   require("../../models/statistiqueModel/mois_courant/models.php");

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>portail.lsll.sn</title>
    <!-- CSS LINK -->
     <link rel="stylesheet" href="../../views/css/styles.css">
    <link href="../statistiques/css/styles_statistiques.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <!-- navbar horizontale -->
     <?php require_once("../../views/includes/header.php");?>
    <div id="layoutSidenav">
        <!-- navbar vertical -->
         <?php require_once("../../views/includes/leftbar.php");?>
        <!-- <div id="layoutSidenav"> -->
        <div id="layoutSidenav_content">
            <main>
                <nav class="ms-2 mt-2" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <?php if($_SESSION['user']['role']=='SV') {?>
                            <a href="/ab/views/personnelle_dasbord.php">Page-Precédent</a>
                            <?php } elseif($_SESSION['user']['role']=='PF'){?>
                            <a href="/ab/views/personnelle_dasbord.php">Page-Precédent</a>
                            <?php }else{?>
                            <a href="/ab/views/admin_dasbord.php">Page-Precédent</a>
                            <?php }?>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Page-Actuel</li>
                    </ol>
                </nav>
                <div class="container-fluid px-4">
                    <h1>Statistiques</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            Dans cette Interface nous vous montrons tous les statisques concernant la variation des
                            Absences en fonction des différentes Séries.
                        </div>
                    </div>

    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////// -->
                    <?php  
                         //appelle du fichier models.php du dossiers StatistiqueModel qui contient l'effectif de chaque serie
                         require("../../models/statistiqueModel/models.php");
                    ?>
                    <!--  // recuper le nombre d'absence en fonction du jour actuelle  -->
                    <div id="donnes_1">
                        <span id="s1_jour"><?= $serie_s1_total ?></span>
                        <span id="s2_jour"><?= $serie_s2_total ?></span>
                        <span id="s3_jour"><?= $serie_s3_total ?></span>
                        <span id="l1_jour"><?= $serie_l1_total ?></span>
                        <span id="l2_jour"><?= $serie_l2_total ?></span>
                        <span id="lp_jour"><?= $serie_lp_total ?></span>
                        <span id="t_jour"><?= $serie_t_total ?></span>
                        <span id="steg_jour"><?= $serie_steg_total ?></span>
                    </div>
                    <!--  // recuper le nombre d'absence en fonction du Mois actuelle  -->
                    <div id="donnes_2">
                        <span id="s1_mois"><?= $serie_s1_total_mois_courant ?></span>
                        <span id="s2_mois"><?= $serie_s2_total_mois_courant ?></span>
                        <span id="s3_mois"><?= $serie_s3_total_mois_courant ?></span>
                        <span id="l1_mois"><?= $serie_l1_total_mois_courant ?></span>
                        <span id="l2_mois"><?= $serie_l2_total_mois_courant ?></span>
                        <span id="lp_mois"><?= $serie_lp_total_mois_courant ?></span>
                        <span id="t_mois"><?= $serie_t_total_mois_courant ?></span>
                        <span id="steg_mois"><?= $serie_steg_total_mois_courant ?></span>
                    </div>

                    <?php  // recuper les données en fonction des Mois ?>
                    <div id="donnes_3">
                        <!-- Mois Janvier -->
                        <span id="s1_janvier"><?=$serie_s1_total_mois_Janvier ?></span>
                        <span id="s2_janvier"><?=$serie_s2_total_mois_Janvier ?></span>
                        <span id="s3_janvier"><?=$serie_s3_total_mois_Janvier ?> </span>
                        <span id="l1_janvier"><?=$serie_l1_total_mois_Janvier ?></span>
                        <span id="l2_janvier"><?=$serie_l2_total_mois_Janvier ?></span>
                        <span id="lp_janvier"><?=$serie_lp_total_mois_Janvier ?></span>
                        <span id="steg_janvier"><?=$serie_steg_total_mois_Janvier ?> </span>
                        <span id="t_janvier"><?=$serie_t_total_mois_Janvier ?></span>

                        <!-- Mois Fevrier -->
                        <span id="s1_fevrier"><?=$serie_s1_total_mois_Fevrier ?></span>
                        <span id="s2_fevrier"><?=$serie_s2_total_mois_Fevrier ?></span>
                        <span id="s3_fevrier"><?=$serie_s3_total_mois_Fevrier ?> </span>
                        <span id="l1_fevrier"><?=$serie_l1_total_mois_Fevrier ?></span>
                        <span id="l2_fevrier"><?=$serie_l2_total_mois_Fevrier ?></span>
                        <span id="lp_fevrier"><?=$serie_lp_total_mois_Fevrier ?></span>
                        <span id="steg_fevrier"><?=$serie_steg_total_mois_Fevrier ?> </span>
                        <span id="t_fevrier"><?=$serie_t_total_mois_Fevrier ?></span>

                        <!-- Mois Mars -->
                        <span id="s1_mars"><?=$serie_s1_total_mois_Mars ?></span>
                        <span id="s2_mars"><?=$serie_s2_total_mois_Mars ?></span>
                        <span id="s3_mars"><?=$serie_s3_total_mois_Mars ?> </span>
                        <span id="l1_mars"><?=$serie_l1_total_mois_Mars ?></span>
                        <span id="l2_mars"><?=$serie_l2_total_mois_Mars ?></span>
                        <span id="lp_mars"><?=$serie_lp_total_mois_Mars ?></span>
                        <span id="steg_mars"><?=$serie_steg_total_mois_Mars ?> </span>
                        <span id="t_mars"><?=$serie_t_total_mois_Mars ?></span>

                        <!-- Mois Avril -->
                        <span id="s1_avril"><?=$serie_s1_total_mois_Avril ?></span>
                        <span id="s2_avril"><?=$serie_s2_total_mois_Avril ?></span>
                        <span id="s3_avril"><?=$serie_s3_total_mois_Avril ?> </span>
                        <span id="l1_avril"><?=$serie_l1_total_mois_Avril ?></span>
                        <span id="l2_avril"><?=$serie_l2_total_mois_Avril ?></span>
                        <span id="lp_avril"><?=$serie_lp_total_mois_Avril ?></span>
                        <span id="steg_avril"><?=$serie_steg_total_mois_Avril ?> </span>
                        <span id="t_avril"><?=$serie_t_total_mois_Avril ?></span>

                        <!-- Mois Mai -->
                         <span id="s1_mai"><?=$serie_s1_total_mois_Mai ?></span>
                        <span id="s2_mai"><?=$serie_s2_total_mois_Mai ?></span>
                        <span id="s3_mai"><?=$serie_s3_total_mois_Mai ?> </span>
                        <span id="l1_mai"><?=$serie_l1_total_mois_Mai ?></span>
                        <span id="l2_mai"><?=$serie_l2_total_mois_Mai ?></span>
                        <span id="lp_mai"><?=$serie_lp_total_mois_Mai ?></span>
                        <span id="steg_mai"><?=$serie_steg_total_mois_Mai ?> </span>
                        <span id="t_mai"><?=$serie_t_total_mois_Mai ?></span>

                        <!-- Mois Juin -->
                        <span id="s1_juin"><?=$serie_s1_total_mois_Juin ?></span>
                        <span id="s2_juin"><?=$serie_s2_total_mois_Juin ?></span>
                        <span id="s3_juin"><?=$serie_s3_total_mois_Juin ?> </span>
                        <span id="l1_juin"><?=$serie_l1_total_mois_Juin ?></span>
                        <span id="l2_juin"><?=$serie_l2_total_mois_Juin ?></span>
                        <span id="lp_juin"><?=$serie_lp_total_mois_Juin ?></span>
                        <span id="steg_juin"><?=$serie_steg_total_mois_Juin ?> </span>
                        <span id="t_juin"><?=$serie_t_total_mois_Juin ?></span>
                        <!-- Mois Juillet -->
                        <span id="s1_juillet"><?=$serie_s1_total_mois_Juillet ?></span>
                        <span id="s2_juillet"><?=$serie_s2_total_mois_Juillet ?></span>
                        <span id="s3_juillet"><?=$serie_s3_total_mois_Juillet ?> </span>
                        <span id="l1_juillet"><?=$serie_l1_total_mois_Juillet ?></span>
                        <span id="l2_juillet"><?=$serie_l2_total_mois_Juillet ?></span>
                        <span id="lp_juillet"><?=$serie_lp_total_mois_Juillet ?></span>
                        <span id="steg_juillet"><?=$serie_steg_total_mois_Juillet ?> </span>
                        <span id="t_juillet"><?=$serie_t_total_mois_Juillet ?></span>
                  
                        <!-- Mois Octobre -->
                        <span id="s1_octobre"><?=$serie_s1_total_mois_Octobre ?></span>
                        <span id="s2_octobre"><?=$serie_s2_total_mois_Octobre ?></span>
                        <span id="s3_octobre"><?=$serie_s3_total_mois_Octobre ?> </span>
                        <span id="l1_octobre"><?=$serie_l1_total_mois_Octobre ?></span>
                        <span id="l2_octobre"><?=$serie_l2_total_mois_Octobre ?></span>
                        <span id="lp_octobre"><?=$serie_lp_total_mois_Octobre ?></span>
                        <span id="steg_octobre"><?=$serie_steg_total_mois_Octobre ?> </span>
                        <span id="t_octobre"><?=$serie_t_total_mois_Octobre ?></span>

                        <!-- Mois Novembre -->
                         <span id="s1_novembre"><?=$serie_s1_total_mois_Novembre ?></span>
                        <span id="s2_novembre"><?=$serie_s2_total_mois_Novembre ?></span>
                        <span id="s3_novembre"><?=$serie_s3_total_mois_Novembre ?> </span>
                        <span id="l1_novembre"><?=$serie_l1_total_mois_Novembre ?></span>
                        <span id="l2_novembre"><?=$serie_l2_total_mois_Novembre ?></span>
                        <span id="lp_novembre"><?=$serie_lp_total_mois_Novembre ?></span>
                        <span id="steg_novembre"><?=$serie_steg_total_mois_Novembre ?> </span>
                        <span id="t_novembre"><?=$serie_t_total_mois_Novembre ?></span>

                        <!-- Mois Decembre -->
                         <span id="s1_decembre"><?=$serie_s1_total_mois_Decembre ?></span>
                        <span id="s2_decembre"><?=$serie_s2_total_mois_Decembre ?></span>
                        <span id="s3_decembre"><?=$serie_s3_total_mois_Decembre ?> </span>
                        <span id="l1_decembre"><?=$serie_l1_total_mois_Decembre ?></span>
                        <span id="l2_decembre"><?=$serie_l2_total_mois_Decembre ?></span>
                        <span id="lp_decembre"><?=$serie_lp_total_mois_Decembre ?></span>
                        <span id="steg_decembre"><?=$serie_steg_total_mois_Decembre ?> </span>
                        <span id="t_decembre"><?=$serie_t_total_mois_Decembre ?></span>
                    </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////// -->

                    <!-- debut canvas courbe -->
                    <div id="courbe" class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Suivant Les Mois
                        </div>
                        <div  class="card-body"  ><canvas id="myAreaChart" width="100%" height="50"></canvas></div>
                        <div class="card-footer small text-muted"> Deniére Mis à jour: <?= $dateAujoudHui ?> à
                            <?= $heurActuelle?>h </div>

                    </div>
                    <!-- fin canvas courbe -->


                    <div class="row">
                        <!-- debut canvas diagramme à barres verticales -->
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Mois Courant
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="80"></canvas></div>
                                <div class="card-footer small text-muted">Deniére Mis à jour: <?= $dateAujoudHui ?> à
                                    <?= $heurActuelle?>h </div>
                            </div>
                        </div>
                        <!-- fin canvas diagramme à barres verticales -->

                        <!-- debut canvas diagramme circulaire -->
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie me-1"></i>
                                    Jour Actuelle
                                </div>
                                <div class="card-body"><canvas id="myPieChart" width="100%" height="80"></canvas></div>
                                <div class="card-footer small text-muted">Deniére Mis à jour: <?= $dateAujoudHui ?> à
                                    <?= $heurActuelle?>h </div>
                            </div>
                        </div>
                        <!-- fin canvas diagramme circulaire -->
                    </div>
                </div>
            </main>
            <?php require_once("../../views/includes/footer.php");?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
     <script src="../../views/assets/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../../views/statistiques/js/chart-courbe.js"></script>
    <script src="../../views/statistiques/js/chart-barre.js"></script>
    <script src="../../views/statistiques/js/chart-circulaire.js"></script>
</body>

</html>
