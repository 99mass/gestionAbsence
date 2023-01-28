<?php  @session_start()?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portail.lsll.sn</title>

    <link rel="stylesheet" href="../../views/Css_image_Formulaire/formeses.css" />
    <!-- dossier necessaire pour affichage du mo de passe -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Aleo|Slabo+27px" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

</head>

<body>

            <div class="card text-center w-75 " id="cards" style=" margin-top: 10%; margin-left: 10%;">
                <div class="card-header">
                   <h4> Service Support</h4>
                </div>
                <div class="card-body pb-5">
                    <!-- <h4 class="card-title">Systéme de Récupération de mOde Passe</h4> -->
                    <p class="card-text">
                        Votre Adresse E-mail est : <span class="text-danger fs-5"><?= $_GET['e'];?> </span>  <br>
                                        Votre mot de passe est : <span class="text-danger fs-5"><?= $_GET['p'];?> </span>  <br>
                       Nous vous recommendons de l'écrire quelque part pour ne pas la perde.
                    </p>
                    <a href="../../index.php" class="btn btn-primary">Se connecter</a>
                </div>
                <div class="card-footer text-muted">
                    @service support 
                </div>
            </div>


    <!--  Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="views/js_Formulaire/main.js"></script>
</body>

</html>