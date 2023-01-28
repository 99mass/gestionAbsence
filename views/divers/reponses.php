
<!DOCTYPE html>
<html lang="fr">

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
                    <div id="form-reponse">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="../../views/admin_dasbord.php">Page-Precédent</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Page-Actuel</li>
                            </ol>
                        </nav>
                        <?php
                        // appele de notre modele reponse_admin.php du dossier models/admins_nouvelle_reponse
                            require_once ('../../models/admins_nouvelle_reponse/reponse_admin.php')
                        ?>
                            <!-- nom de la personne qui a posée la question -->
                        <h4>repondre à Mr/Mrs: <?= $ligne_id["nomMembre"]; ?></h4>
                        <!-- dans cette formulaire on peut modifier ou repondre a question posé -->
                        <form action="../../models/admins_nouvelle_reponse/reponse_admin.php" method="POST">
                            <div class="mb-3">
                                <!-- affichage de la quetsion posée -->
                                <label for="exampleFormControlTextarea1" class="form-label">Question :</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" disabled>
                                     <?= $ligne_id["question_membres"]; ?>
                                </textarea>
                            </div>
                            <!-- si la question est deja traiter on affiche la reponse pour la modifier -->
                            <?php   if ($ligne_id["traiter"]==1) {  ?>
                            <div class="mb-3">
                                <label for="responses" class="form-label">Modifier :</label>
                                <textarea class="form-control" id="responses" name="reponse" rows="3">
                                    <?= $ligne_id["reponse_admin"];?>
                                </textarea>
                            </div>
                            <?php } else{ ?>
                            <!-- sinon on affiche le champs pour répondre à la question -->
                            <div class="mb-3">
                                <label for="responses" class="form-label">Répondre :</label>
                                <textarea class="form-control" id="responses"
                                    name="reponse"></textarea>
                            </div>
                            <?php }?>

                            <input type="hidden" name="id_membre" value="<?= $ligne_id["id"];?>">
                            <input type="hidden" name="traiters" value="1">
                            <button type="submit" class="btn btn-primary mb-2 ms-2 w-25">Envoyer</button>
                        </form>
                    </div>

                </div>
                <?php require_once("../../views/includes/footer.php");?>
            </div>
        </div>
        <!--  Bootstrap javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="../../views/assets/scripts.js"></script>
         <script src="../../views/assets/focus.js"></script>

    </body>

</html>