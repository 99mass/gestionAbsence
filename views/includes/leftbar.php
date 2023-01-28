<?php @session_start();

// verifier si la session n'est pas vide
 if(!empty($_SESSION["user"])){
                // sb-sidenav-dark
?>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion " id="sidenavAccordion" style="background-color: darksalmon;">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-black ">Access Rapide</div>
                <a class="nav-link text-light " href="/ab/index.php">
                    <div class="sb-nav-link-icon "><i class="fa-solid fa-house"></i></div>
                    Acceuil
                </a>

                <!-- Tableau de bord des Professeur et Surveillant -->
                <?php if($_SESSION['user']['role'] =='PF'||$_SESSION['user']['role'] =='SV'  ){?>
                <a class="nav-link text-light" href="/ab/views/personnelle_dasbord.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt"></i></div>
                    Tableau de bord
                </a>
                <?php }else{?>
                <a class="nav-link text-light" href="/ab/views/admin_dasbord.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt"></i></div>
                    Tableau de bord
                </a>
                <?php }?>

                <?php  //on a access a se champs si notre rôles est SuperAdmin ou Admin
                        if($_SESSION['user']['role'] =='SAD' || $_SESSION['user']['role'] =='AD'){?>
                <a class="nav-link collapsed text-light " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon "><i class="fa-solid fa-users-line"></i></div>
                    Personnelles
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <?php  //on peut Acceder ici que si on a le role Super Admin
                        if($_SESSION['user']['role'] =='SAD'){?>
                        <a class="nav-link text-light " href="/ab/views/inscrire/personnelle.php?status=PS">
                            <i class="fa-solid fa-right-from-bracket me-1 "></i>Admins
                        </a>
                        <?php }?>
                        <a class="nav-link text-light " href="/ab/views/inscrire/personnelle.php?status=SV">
                            <i class="fa-solid fa-right-from-bracket me-1 "></i>Surveillants
                        </a>
                        <a class="nav-link text-light " href="/ab/views/inscrire/personnelle.php?status=PF">
                            <i class="fa-solid fa-right-from-bracket me-1 "></i>Proffesseurs
                        </a>
                    </nav>
                </div>


                <?php }  //Acces possible si notre role est different de Proffesseur ou surveillant
            if($_SESSION['user']['role'] =='SAD' ||$_SESSION['user']['role'] =='AD' ){?>
                <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon "><i class="fa-solid fa-users-line"></i></div>
                    Eleves
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link text-light" href="/ab/views/personnelle_dasbord.php?inscri=IS">
                            <i class="fa-solid fa-right-from-bracket me-1 "></i>Inscrire
                        </a>
                         <?php  //Acces possible que si notre role est SuperAdmin
                         if($_SESSION['user']['role'] =='SAD'){?>
                        <a class="nav-link text-light " href="/ab/views/personnelle_dasbord.php?presence=P">
                            <i class="fa-solid fa-right-from-bracket me-1 "></i>Presence
                        </a>
                        <a class="nav-link text-light " href="/ab/views/personnelle_dasbord.php?justifie=js">
                            <i class="fa-solid fa-right-from-bracket me-1 "></i>Justifier
                        </a>
                        <?php }?>
                    </nav>
                </div>
            <?php  }?>


                <div class="sb-sidenav-menu-heading text-black ">Divers</div>
                <?php   
                         //Acces possible si notre role est different de SuperAdmin ou Admin
                    if($_SESSION['user']['role'] =='SV' ||$_SESSION['user']['role'] =='PF' ){?>
                <a class="nav-link text-light" href="/ab/views/divers/nouvelle.php">
                    <div class="sb-nav-link-icon "><i class="fa-solid fa-message"></i></div>
                   Nouvelles
                </a>
                <!--lien  formulaire pour :  questions posés par les proffesseurs et surveillant -->
                <div class="sb-nav-link-icon ps-3 mb-2 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                    style="cursor: pointer;">
                    <i class="fa-solid fa-circle-question me-2"></i>Questions
                </div>
                <!-- reponse des admin -->
                <a class="nav-link text-light" href="/ab/views/divers/rep_question.php">
                    <div  class="sb-nav-link-icon ">
                        <i class="fa-solid fa-registered me-2"></i>reponses
                    </div>
                </a>
                <?php  }?>
                <a class="nav-link text-light" href="/ab/views/statistiques/voir.php">
                    <div class="sb-nav-link-icon "><i class="fa-solid fa-signal "></i></div>
                    Statistiques
                </a>

            </div>
        </div>
    </nav>
</div>
<?php }      else{
        /**
         * si on est pas connecter  on retourne vers la page d'acceuil du site
         */
     header("location: ../index.php");
      }
?>