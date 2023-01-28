<?php   @session_start();
    
    // appelle de notre model affichage.php
        require_once ('../../models/personnelModel/modifier.php');

?>

<!-- modifier les information de l'eleves -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS LINK -->
     <link rel="stylesheet" href="../../views/css/styles.css">
    <link rel="stylesheet" href="../../views/css_inscrire/style_membre.css">
    <link rel="stylesheet" href="../../views/css_inscrire/stylle_password.css">
     <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
 <!-- cdn fontawesome -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"    />
   <!-- CND javascript  fontaweson -->
     <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    
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
                <h2 class="text-center"> Modifier Personnelles</h2> 
         </div>
         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=$main?>personnelles/Admin/nouveaux_membre.php">Page-Precédent</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Page-Actuel</li>
                </ol>
        </nav> 
         <?php  // debut formulaire de Modifiaction Personnelles ?>

        <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header " id="panelsStayOpen-headingOne">
            <button class="accordion-button bg-info  text-dark  " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                 Modifier Personnlle
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body section-1 " id="accordion-body" >
                    <form action="/ab/models/personnelModel/modifier.php?personnelle=<?=$_GET['personnelle']?>" method="POST">
                                <div  class="champs mb-3  ">
                                    <span class="input-group-text me-2 color-span">Prenom</span>
                                    <input type="text" class="form-control" name="prenom" value="<?= $ligne_id['prenom'] ?>"  placeholder="ex : samba" autocomplete="off"  aria-label="prenom">
                                </div>  
                                 <div  class="champs mb-3  ">
                                    <span class="input-group-text me-2 color-span ">Nom</span>
                                    <input type="text" class="form-control" name="nom" value="<?= $ligne_id['nom'] ?>"  placeholder="ex : diop" autocomplete="off"  aria-label="nom">
                                </div>     
                                 <div  class="champs mb-3 champs-2  ">
                                    <span class="input-group-text me-2 color-span ">Date Naissance</span>
                                    <input type="date" class="form-control" name="dateNaissance" value="<?= $ligne_id['date_naissance'] ?>"   aria-label="date_naissance">                    
                                </div>    
                                <div  class="champs mb-3 ">
                                    <span class="input-group-text me-2 color-span">E-mail</span>
                                    <input type="email" class="form-control" name="mail" value="<?= $ligne_id['email'] ?>"   placeholder="ex : sambadiop161@gmail.com" autocomplete="off" aria-label="mail">
                                </div>  
                                <div  class="champs ">
                                    <span class="input-group-text me-2 color-span ">Mot De Passe</span>
                                    <input type="text" class="form-control" name="motDePasse" value="<?= $ligne_id['mot_de_passe'] ?>"  placeholder="ex : Qstaj@4588" autocomplete="off"   aria-label="motDePasse">
                                </div>  
                            <?php  /*SAD :  signifi qu'on  le rôle Super Admin 
                                *AD :  signifi qu'on  le rôle Administrateur simple 
                                *SV :  signifi qu'on  le rôle Surveillant  
                                */
                            ?>
                        
                                <div class="input-group mt-3  div-select">
                                    <span class="input-group-text me-2 color-span " style="background-color: goldenrod;height:40px;width: 20%;">Rôles </span>
                                        <select class="form-select  mb-3" name="roles"  aria-label="Default select example">
                                            <option value="<?= $ligne_id['rolees']?>" selected><?= $ligne_id['rolees']?></option>
                                             <!-- si on est Super Admin on peut creer tout type de personnel -->
                                            <?php if ($_SESSION['user']['role']=='SAD'){?> 
                                                    <option  value="SAD">Super Admin</option>
                                                    <option value="AD">Admin</option>
                                                    <option value="SV">Surveillant</option>
                                                    <option value="PF">Proffesseur</option>
                                            <?php }?>
                                         <!-- si on est  Admin on peut creer tout type de personnel sauf un Super Admin -->
                                            <?php if ($_SESSION['user']['role']=='AD'){?> 
                                                    <option value="AD">Admin</option>
                                                    <option value="SV">Surveillant</option>
                                                    <option value="PF">Proffesseur</option>
                                            <?php }?>
                                        </select>
                                </div>
                              <input type="hidden" name="id_Admin"  value="<?= $ligne_id['id'] ?>">
                         <button  class="button-send ms-3 mt-2 mb-3">Ajouter</button>
                    </form>
                </div>
             </div>
            </div>
        </div>   
  <?php //fin formulaire?>  


         <?php //Début générer mot de passe?>  
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed bg-info  text-dark  mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        #Générer un mot de passe
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" id="accordion-body">              
              <div class="pw-container mb-3 ">
                  <div class="pw-header">
                    <div class="pw">
                        <span id="pw">EX : s78#2C0n</span>
                        <button id="copy" class="copier">Copier</button> 
                    </div>
                  </div>
                    <div class="pw-body">
                         <input id="len" value="9" type="hidden"  />
                        <div class="form-control control-form">
                            <label for="upper">Majuscule</label>
                            <input id="upper" type="checkbox" disabled checked  />
                        </div>
                        <div class="form-control control-form">
                            <label for="lower">Munuscule</label>
                            <input id="lower" type="checkbox" disabled checked  />
                        </div>
                        <div class="form-control control-form">
                            <label for="number">Nombres</label>
                            <input id="number" type="checkbox" disabled checked  />
                        </div>
                        <div class="form-control control-form">
                            <label for="symbol">Symboles</label>
                            <input id="symbol" type="checkbox" disabled checked  />
                        </div>
                        <button class="generate" id="generate"> Générer</button>
                    </div>
              </div>
        </div>
        </div>
    </div>
    </div>
           
     <?php //fin générer mot de passe?>         


        </div> 
      <?php require_once("../../views/includes/footer.php");?>
     </div>
 </div> 
     <!-- fichier de generateur de mots de passe -->
    <script src="../assets/password_aleatoirs.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     <script src="../assets/scripts.js"></script>
</body>
</html>

<?php  
   // fermer la base de donnée
    require_once("../../core/fermerDb.php")
?>