<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portail.lsll.sn</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        
       <!--css-->
    <link rel="stylesheet" href="views/Css_image_Formulaire/formeses.css" />
    
     <!-- CDN fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Aleo|Slabo+27px" rel="stylesheet">

</head>

<body style="height: 100vmax;">


    <div class="form-body">
        <form action="core/connexion.php" method="post">

            <h2>SERVICE CENTRAL D'AUTHENTIFICATION</h2>
            <?php 
                if(isset($_SESSION['status'])){
                       echo '<div class="alert alert-danger fs-4" role="alert">
                              '.$_SESSION['status'].'
                             </div>';
                         unset($_SESSION['status']);
                }
            ?>
            <div class="form-group ">
                <input type="text" id="email" name="email" placeholder="prenom.nom@gmail.com">
            </div>

            <div class="form-group ">
                <input type="password" name="motDePasse" id="ChampPassword" placeholder="Mot de passe">
                <i id="voir" onclick="voir()" class="far fa-eye"></i>
            </div>

            <div class="form-group">
                <button class="button" type="submit">Se Connecter</button>
            </div>
            <div class="form-group">
                <a href="views/mot_de_passe/envoyer.php" class="mot-pass-oublier">Mot de passe oublié ?</a>
            </div>

        </form>
    </div>
    <!--  Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="views/js_Formulaire/main.js"></script>
</body>

</html>