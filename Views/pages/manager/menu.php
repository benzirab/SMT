<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 10/08/15
 * Time: 14:29
 */
include 'head.php';
?>


<div class="top">
    <img src="../../img/valeur.png" class="pull-left">
    <img src="../../img/logo_couleur.jpg" class="col-sm-offset-3">
</div>
<nav class="navbar navbar-default col-sm-12" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" id="brand">BDE Application</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <div class="nav navbar-nav">

            <?php
            if(!isset($_SESSION['login'])){
                ?>
                <li><a href="index.php" id="acceuil">Accueil</a></li>
                <?php
            }
            ?>
            <?php
            if(isset($_SESSION['login'])){
            ?>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <li><a href="liste_clients.php" id="fa">Liste des clients</a></li>
            <li><a href="visites.php" id="fc">Visite</a></li>
            <li><a href="Enquete.php" id="fd">Enquête</a></li>
            <li><a href="Suivi_Bd.php" id="fc">Suivi BD</a></li>
            <li><a href="Reclamation.php" id="fv">Réclamation</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Rapports et extractions
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="RecapCom.php"><i class="fa fa-user fa-fw"></i> Récapitulatif des commandes BDE</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="RecapEn.php"><i class="fa fa-gear fa-fw"></i>  Enquêtes BDE</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->


            <li>
                <form class="navbar-form" style="padding-top: 3px" action="liste_clients.php" method="post" id="recher">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Code Client" size="10" name="codeITP">
                        <span class="input-group-addon input-sm" onclick="$('#recher').submit();"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </form>

            </li>
        </div>
        <ul class="nav navbar-nav navbar-right col-sm-push-2">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php

                    echo 'Bonjour ['.$_SESSION['login'].']';

                    ?>

                    <span class="glyphicon glyphicon-user"></span>
                    <span class="caret"></span>

                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="deconnexion.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>


        <!-- /.navbar-collapse -->
    </div>
    <?php
    }
    ?>

</nav>
