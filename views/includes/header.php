<?php @session_start();
   /**
    * affiche la page que si la session existe
    */
if(!empty($_SESSION["user"])){
?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-color: chocolate;">
    <!-- redirection de la page tableau en fonction de notre roles -->
    <?php if($_SESSION["user"]['role']=='SV' || $_SESSION["user"]['role']=='PF'){?>
    <a class="navbar-brand ps-1" id="lsll" href="../views/personnelle_dasbord.php">lycee seydina limamoulaye</a>
    <?php }else{ ?>
    <a class="navbar-brand ps-1" id="lsll" href="../views/admin_dasbord.php">lycee seydina limamoulaye</a>
    <?php } ?>

    <!-- Sidebar Toggle-->
    <div class="d-flex justify-content-end toggle-header div-header" style="width: 100%;">
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 " id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw "></i>
                    <!-- affichage du nom du personnelle connecté -->
                    <?=$_SESSION["user"]['role']; ?></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><span class="ps-3"><?= $_SESSION["user"]['prenom'].' '.$_SESSION["user"]['nom'] ; ?></span>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="btn button-header" type="button" href="/ab/models/deconnexion.php"> <i
                                class="fa-solid fa-lock aide"></i> Deconnexion</a></li>
                </ul>
            </li>
        </ul>
    </div>
 </nav>

<!-- *****************************************************************************************************
        cette section traite l'envoit et la reception des question posé par les proffesseurs et surveillants et repondu par les admin
        **********************************************************************************************
 -->


<!-- formulaire permettant aux  proffesseurs et aux surveillant de posées de questions -->
<!-- debut formulaire-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title textwhite" id="exampleModalLabel1">Nouveaux Question ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/ab/models/admins_nouvelle_reponse/insert_question.php">
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Question :</label>
                        <textarea class="form-control" id="message-text" name="question"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>
<!-- fin formulaire -->


<!-- ***********************message de confirmation si la question a été envoyé ou pas****************** -->
            <?php 
                if(isset($_SESSION['question_confirmation'])){  
                    ?>
                       <script>alert('<?=$_SESSION['question_confirmation']?>');</script>
                    <?php 
                         unset($_SESSION['question_confirmation']);
                }
                
 }else{
            //  si on est pas connecter  on retourne vers la page d'acceuil du site         
            header("Location: /ab/index.php");
            exit;
 }
?>