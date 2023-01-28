<?php session_start();
     /**
     * appel du controllers verification_roles.php et body_personnelController.php
     * 
     */
     require_once('../controllers/verification_role.php');
     require_once('../controllers/body_personnelController.php');
    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tableau de bord</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- CSS LINK -->
    <link rel="stylesheet" href="../views/css/styles.css">
    <link rel="stylesheet" href="../views/css_tableau_bord/tableau_bordses.css">
    <!-- cdn fontawesome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

</head>
   <?=$body?>
    <!-- hearder da la page -->
    <?php require_once("../views/includes/header.php");?>
    <div id="layoutSidenav">
        <!-- navbar vertical -->
        <?php require_once("../views/includes/leftbar.php");?>
        <!-- cors de la page  -->
        <div id="layoutSidenav_content">
            <div class="container-fluid px-2">
                <div id=tableau_bord class="alert alert-dark mb-0 mt-1  alert-table" role="alert">Tableau de bord</div>

                <div class="row row-block">
                    <!-- Serie s1--->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-S serie-S1">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : S1</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second S1
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s1&classe=a">S1-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s1&classe=b">S1-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s1&classe=c">S1-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s1&classe=d">S1-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére S1
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s1&classe=a">S1-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s1&classe=b">S1-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s1&classe=c">S1-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s1&classe=d">S1-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Terminal S1
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s1&classe=a">S1-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s1&classe=b">S1-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s1&classe=c">S1-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s1&classe=a">S1-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Serie s2-->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-S serie-S2">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : S2</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second S2
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s2&classe=a">S2-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s2&classe=b">S2-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s2&classe=c">S2-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s2&classe=d">S2-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére S2
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s2&classe=a">S2-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s2&classe=b">S2-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s2&classe=c">S2-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s2&classe=d">S2-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Terminal S2
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s2&classe=a">S2-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s2&classe=b">S2-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s2&classe=c">S2-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s2&classe=d">S2-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Serie s3--->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-S serie-S3">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : S3</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second S3
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s3&classe=a">S3-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s3&classe=b">S3-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s3&classe=c">S3-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=s3&classe=d">S3-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére S3
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s3&classe=a">S3-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s3&classe=b">S3-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s3&classe=c">S3-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=s3&classe=d">S3-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Terminal S3
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s3&classe=a">S3-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s3&classe=b">S3-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s3&classe=v">S3-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=s3&classe=d">S3-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Serie L2 -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-L serie-L2">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : L2</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second L2
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l2&classe=a">L2-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l2&classe=b">L2-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l2&classe=c">L2-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l2&classe=d">L2-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére L2
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l2&classe=a">L2-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l2&classe=b">L2-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l2&classe=c">L2-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l2&classe=d">L2-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Terminal L2
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l2&classe=a">L2-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l2&classe=b">L2-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l2&classe=c">L2-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l2&classe=d">L2-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Serie L1 -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-L serie-L1">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : L1</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second L1
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l1&classe=a">L1-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l1&classe=b">L1-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l1&classe=c">L1-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=l1&classe=d">L1-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére L1
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l1&classe=a">L1-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l1&classe=b">L1-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l1&classe=c">L1-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=l1&classe=d">L1-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown"><i
                                            class="fa-solid fa-right-from-bracket "></i>Terminal
                                        L1</button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l1&classe=a">L1-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l1&classe=b">L1-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l1&classe=c">L1-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=l1&classe=d">L1-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Serie L'  -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-L serie-Lp">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : L'</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second L'
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=lp&classe=a">L'-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=lp&classe=b">L'-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=lp&classe=c">L'-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=lp&classe=d">L'-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére L'
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=lp&classe=a">L'-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=lp&classe=b">L'-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=lp&classe=c">L'-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=lp&classe=d">L'-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Terminal L'
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=lp&classe=a">L'-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=lp&classe=b">L'-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=lp&classe=c">L'-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=lp&classe=d">L'-D</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Serie T -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-T">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : T</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second T
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=t&classe=a">T-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=t&classe=b">T-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=t&classe=c">T-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=t&classe=d">T-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére T
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=t&classe=a">T-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=t&classe=b">T-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=t&classe=c">T-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=t&classe=d">T-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Terminal T
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=t&classe=a">T-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=t&classe=b">T-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=t&classe=c">T-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=t&classe=d">T-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Serie STEG  -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="serie serie-STEG">
                            <h4> <i class="fa-solid fa-graduation-cap icon-serie"></i>Serie : STEG</h4>
                            <hr />
                            <ul>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Second STEG
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=steg&classe=a">STEG-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=steg&classe=b">STEG-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=steg&classe=c">STEG-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=seconde&serie=steg&classe=d">STEG-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Premiére STEG
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=steg&classe=a">STEG-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=steg&classe=b">STEG-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=steg&classe=c">STEG-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=premiere&serie=steg&classe=d">STEG-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle a-index" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-right-from-bracket "></i>Terminal STEG
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=steg&classe=a">STEG-A</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=steg&classe=b">STEG-B</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=steg&classe=c">STEG-C</a>
                                        </li>
                                        <hr>
                                        <li class="li-classe"><a class="dropdown-item li-drop  "
                                                href="../views/<?=$dossier?>?niveau=terminal&serie=steg&classe=d">STEG-D</a>
                                        </li>
                                        <hr>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--pieds de la page -->
            <?php require_once("../views/includes/footer.php");?>
        </div>
    </div>
    <!--boostrap cdn javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../views/assets/scripts.js"></script>

</body>

</html>