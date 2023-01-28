
<?php  @session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="../../views/css_marquer/marquer_listes.css">
     <link rel="stylesheet" href="../../views/css/styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- cdn fontawesome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
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

                <div class="alert alert-dark  mt-2 mb-3 " role="alert">
                    <h2 id="titre-classe" class="text-center"> <i
                            class="fa-solid fa-graduation-cap icon-serie"></i>
                        <!-- affichage nom de la classe  ou on se trouve-->
                        <?= $_GET['niveau'] ?> <?= $_GET['serie']?> <?= $_GET['classe']?>    
                    </h2>
                </div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mt-2 ">
                        <ol class="breadcrumb">
                           <li id="page-actuel" class="breadcrumb-item"><a href="/ab/views/nombre_absence/listes_eleves.php?niveau=<?=$_GET['niveau'] ?>&serie=<?= $_GET['serie']?>&classe=<?= $_GET['classe']?>">< Page-Precédent</a></li>
                            <li id="page-precedent" class="breadcrumb-item"><a href="/ab/views/personnelle_dasbord.php">Retour</a></li>
                            <li class="breadcrumb-item active" aria-current="page" id="page-actuel">Page-Actuel</li>
                        </ol>
                 </nav>
                    
                <!-- debut card boostrap avec formulaire de marquage d'absence  -->
                <?php 
                        require_once ("../../models/nombre_absenceModel/absence.php");
                        
                ?>
                <div class="card" id="card">
                    <div class="card-header bg-primary text-white p-3 fs-5">
                       # Nombre Absence de  <span class="ms-1 me-1 text-dark text-capitalize text-decoration-underline">
                                                @<?=$ligne_id['prenom']?> <?=$ligne_id['nom']?>
                                            </span>
                        Suivant les Mois
                    </div>
                    <div class="card-body  ">
                            <table class="table table-striped">
                                <thead >
                                    <th>#</th>
                                    <th>#Mois</th>
                                    <th>#Heures</th>
                                <thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Janvier</td>
                                            <td><?php if($Janvier !=0){?>
                                                    <span class="badge bg-danger ps-2 pe-3 fs-6  "><?= $Janvier?></span>
                                                    <?php }else{?>
                                                    <span class="badge text-black ps-2 pe-3 fs-6   ">---</span>
                                                    <?php }?>
                                            </td>
                                            
                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Février</td>
                                                            <td>
                                                                <?php if($Fevrier !=0){?>
                                                                    <span class="badge bg-danger ps-2 pe-3 fs-6  "><?= $Fevrier?></span>
                                                                    <?php }else{?>
                                                                    <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                    <?php }?>
                                                            </td>
                                                            
                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Mars</td>
                                                                            <td>
                                                                                <?php if($Mars !=0){?>
                                                                                    <span class="badge bg-danger ps-2 pe-3 fs-6  "><?= $Mars?></span>
                                                                                    <?php }else{?>
                                                                                    <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                                    <?php }?>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                                            <tr>
                                                                                                <td>4</td>
                                                                                                <td>Avril</td>
                                                                                                <td>
                                                                                                    <?php if($Avril !=0){?>
                                                                                                            <span class="badge bg-danger ps-2 pe-3 fs-6  "><?= $Avril?></span>
                                                                                                            <?php }else{?>
                                                                                                            <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                                                            <?php }?>
                                                                                                </td>
                                                                                                
                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>5</td>
                                                                                                                <td>Mai</td>
                                                                                                                <td>
                                                                                                                    <?php if($Mai !=0){?>
                                                                                                                                <span class="badge bg-danger ps-2 pe-3 fs-6  "><?= $Mai?></span>
                                                                                                                                <?php }else{?>
                                                                                                                                <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                                                                                <?php }?>
                                                                                                                </td>
                                                                                                                
                                                                                                            </tr>
                                                                                                <tr>
                                                                                                    <td>6</td>
                                                                                                    <td>Juin</td>
                                                                                                    <td>
                                                                                                        <?php if($Juin !=0){?>
                                                                                                            <span class="badge bg-danger ps-2 pe-3 fs-6  "><?= $Juin?></span>
                                                                                                            <?php }else{?>
                                                                                                            <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                                                            <?php }?>
                                                                                                    </td>
                                                                                                    
                                                                                                </tr>
                                                                                <tr>
                                                                                    <td>7</td>
                                                                                    <td>Juillet</td>
                                                                                    <td>
                                                                                        <?php if($Juillet !=0){?>
                                                                                            <span class="badge bg-danger ps-2 pe-3 fs-6  "><?=$Juillet?></span>
                                                                                            <?php }else{?>
                                                                                            <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                                            <?php }?>
                                                                                    </td>
                                                                                    
                                                                                </tr>
                                                                      <tr>
                                                                            <td>8</td>
                                                                            <td>Aout</td>
                                                                            <td>
                                                                                <?php if($Aout !=0){?>
                                                                                    <span class="badge bg-danger ps-2 pe-3 fs-6  "><?= $Aout?></span>
                                                                                    <?php }else{?>
                                                                                    <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                                    <?php }?>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>Septembre</td>
                                                                <td>
                                                                    <?php if($Septembre !=0){?>
                                                                            <span class="badge bg-danger ps-2 pe-3 fs-6  "><?=$Septembre?></span>
                                                                            <?php }else{?>
                                                                            <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                                            <?php }?>
                                                                </td>
                                                                
                                                            </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Octobre</td>
                                                    <td>
                                                        <?php if($Octobre !=0){?>
                                                            <span class="badge bg-danger ps-2 pe-3 fs-6  "><?=$Octobre?></span>
                                                            <?php }else{?>
                                                            <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                            <?php }?>
                                                    </td>
                                                    
                                                </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Novembre</td>
                                            <td>
                                                <?php if($Novembre !=0){?>
                                                <span class="badge bg-danger ps-2 pe-3 fs-6  "><?=$Novembre?></span>
                                                <?php }else{?>
                                                <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                <?php }?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td>Décembre</td>
                                            <td>
                                                <?php if($Decembre !=0){?>
                                                    <span class="badge bg-danger ps-2 pe-3 fs-6  "><?=$Decembre?></span>
                                                    <?php }else{?>
                                                    <span class="badge text-black ps-2 pe-3 fs-6   ">----</span>
                                                    <?php }?>
                                            </td>
                                            
                                        </tr>
                                                                                
                                       
                                    </tbody>
                            </table>
                                   
                       

                    </div>
                </div>
                <!-- fin card boostrap avec formulaire de marquage d'absence  -->

            </div>
            <!-- pied de la page -->
           <?php require_once("../../views/includes/footer.php");?>
        </div>
    </div>
        <!-- Boostrap CDN  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">  </script>   
    <script src="../assets/scripts.js"></script>
</body>

</html>

<!-- ************************************************************************************************** -->
<?php 
    // fermer la base de donnée
    require_once("../../core/fermerDb.php")
 ?>