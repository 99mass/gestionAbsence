<?php @session_start();?>
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

       <!-- CDN css jquery -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
                <h2 class="text-center"> Gestion Personnelle</h2> 
         </div>

                    <?php 
                        //  on affiche le message de session
                                if(!empty($_SESSION['success'])){
                                    echo '<h5 class="alert alert-success text-center text-capitalize" role="alert"> '.$_SESSION['success'].' </h5>';
                                    $_SESSION['success']='';
                                }
                                if(!empty($_SESSION['erreur'])){
                                    echo '<h5 class="alert alert-danger text-center text-capitalize" role="alert">'.$_SESSION['erreur'].' </h5>';
                                        $_SESSION['erreur']='';
                                }
                        ?>


         <?php  //formulaire d'Enregistrements des personnelles ?>         
 <div class="accordion accordion-flush mb-4" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed bg-info  text-dark " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Nouveaux Personnelles
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      
           
           <div class="accordion-body section-1 " id="accordion-body"  >       <!-- $_GET['status'] nous sera utile dans notre controller personnelleController.php  -->
                    <form  method="POST" action="/ab/models/personnelModel/insert.php?personnelle=<?=$_GET['status']?>" >
                                <div  class="champs mb-3  ">
                                    <span class="input-group-text me-2 color-span">Prenom</span>
                                    <input type="text" class="form-control" name="prenom" placeholder="ex : samba" autocomplete="off"  aria-label="prenom">
                                </div>  
                                 <div  class="champs mb-3  ">
                                    <span class="input-group-text me-2 color-span ">Nom</span>
                                    <input type="text" class="form-control" name="nom" placeholder="ex : diop" autocomplete="off"  aria-label="nom">
                                </div>     
                                 <div  class="champs mb-3 champs-2  ">
                                    <span class="input-group-text me-2 color-span ">Date Naissance</span>
                                    <input type="date" class="form-control" name="dateNaissance" value="1999-02-14"aria-label="date_naissance">                    
                                </div>    
                                <div  class="champs mb-3 ">
                                    <span class="input-group-text me-2 color-span">E-mail</span>
                                    <input type="email" class="form-control" name="mail"   placeholder="ex : sambadiop161@gmail.com" autocomplete="off" aria-label="mail">
                                </div>  
                                <div  class="champs ">
                                    <span class="input-group-text me-2 color-span ">Mot De Passe</span>
                                    <input type="text" class="form-control" name="motDePasse"  placeholder="ex : Qstaj@4588" autocomplete="off"   aria-label="motDePasse">
                                </div>  
                            <?php 
                                  /*SAD :  signifi qu'on  le rôle Super Admin 
                                    *AD :  signifi qu'on  le rôle Administrateur simple
                                    *SV :  signifi qu'on  le rôle Surveillant
                                 */
                            ?>
                              
                                <div class="input-group mt-3  div-select">
                                    <span class="input-group-text me-2 color-span " style="background-color: goldenrod;height:40px;width: 20%;">Rôles </span>
                                        <select class="form-select  mb-3" name="role"  aria-label="Default select example">
                                            <option  selected>Rôles</option>
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
                                <button  class="button-send ms-3 mt-2 mb-3">Ajouter</button>
                    </form>
                </div>
    <!-- fin formulaire   -->


<!-- Début générer mot de passe -->
  <div class="accordion-item"> -->
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button  bg-white disabled  text-dark " type="button"  >
        #Générer un mot de passe
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" id="accordion-body" >              
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
     <!-- fin générer mot de passe? -->
</div>
</div>
           
<?php
        // appelle de notre model affichage.php
        require_once ('../../models/personnelModel/affichage.php');
        // appelle de notre controller personnelleController.php
        require_once ('../../controllers/personnelleController.php');
        // $numeroLigne permet de marque le numero de ligne dans la table a afficher
             $numeroLigne=1;
           
            if(count($resutat) > 0){ 
     ?>

        <span  class="btn btn-outline-dark fw-bold text-black fs-4 mb-3 disabled w-100">listes personnelles</span>
         <div id="container-table" class="mb-5" >
            <table id="datatablesSimple" class="display pt-3  ">
                <thead>
                    <tr>
                        <th id="th-table">#</th>
                        <th id="th-table">prénom</th>
                        <th id="th-table">nom</th>
                        <th id="th-table">date naissance</th>    
                        <th id="th-table">email</th> 
                        <th id="th-table">Mots de passe</th>
                        <th id="th-table">Rôles</th>
                        <th id="th-table">Actions</th>

                    </tr>
                </thead>
                <tbody>
                <?php 
                //    lister l'ensemble des eleves
                    foreach($resutat as $ligne1){   ?>
                     
                    <tr > 
                         
                        <?php /**
                                 *mettre en form tout les lignes en blanc si la presence est null
                             */ 
                         ?>
                                <td class="alert alert-white text-secondary" role="alert" ><?= $numeroLigne++; ?></td> 
                                <td class="alert alert-white text-secondary" role="alert" ><?= $ligne1["prenom"]; ?></td>
                                <td class="alert alert-white text-secondary" role="alert" ><?= $ligne1["nom"]; ?></td>
                                <td class="alert alert-white text-secondary" role="alert" ><?= $ligne1["date_naissances"]; ?></td>                         
                                <td class="alert alert-white text-secondary "  role="alert" ><?= $ligne1["email"]; ?></td>
                                <td class="alert alert-white text-secondary " role="alert" ><?= $ligne1["mot_de_passe"]; ?></td> 
                                <td class="alert alert-white text-secondary " role="alert" ><?= $ligne1["rolees"]; ?></td>                                                    
                                <td id="td-a">
                                    <a class="btn  px-1 mb-1  text-black bg-primary" id="size-a" href="/ab/views/modifier/personnelle.php?id=<?= $ligne1["id"]; ?>&personnelle=<?=$_GET['status']?>">Modifier</a>
                                    <a data-toggle="tooltip" data-placement="top" title="vous allez supprimer le personnel" 
                                       id="size-a"  class="btn px-1 ms-1  text-black bg-danger" 
                                         href="/ab/models/personnelModel/supprimer.php?id=<?= $ligne1["id"]; ?>&personnelle=<?=$_GET['status']?>">Supprimer
                                    </a>
                                </td>
                    </tr>
                    <?php  }?>
                </tbody>     
            </table>
          </div>
            <?php   } ?>
        </div>

     <?php require_once("../../views/includes/footer.php");?>
     </div>
 </div>
     <!-- fichier de generateur de mots de passe -->
    <script src="../assets/password_aleatoirs.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
          <script src="../assets/scripts.js"></script>
    <!-- CDN jquery qui gére la table -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="../assets/datatable.js"></script>
       

</body>
</html>

  <?php 
    // fermer la base de donnée
    require_once("../../core/fermerDb.php")
 ?>

























