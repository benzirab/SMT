<?php
 session_start();

include 'menu.php';
include '../../Models/SPDO.php';
?>
<style>
     .title{
        color: white;
        background-color: #a9223e;
         border-radius: 0px;
    }
     .nav-liste{
         padding-right: 0px;
         padding-left: 0px;
     }
</style>
<nav class="navbar navbar-default col-sm-3" role="navigation" style="margin-left: 10px;">
    <!--<div class="collapse navbar-collapse navbar-ex1-collapse">-->
    <div class="nav navbar-nav ">
        <div class="navbar-header col-sm-12">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" id="brand">BDE Application</a>
        </div>

        <li class="col-sm-12 nav-liste">
        <a href="commande.php?id=<?php echo $_POST['idClient'];?>">Passer une commande</a>
    </li>
    <li class="col-sm-12 nav-liste">
        <a href="suivi_BD.php?id=<?php echo $_POST['idClient'];?>">Suivi du client</a>
    </li>
    <li class="col-sm-12 nav-liste">
        <a href="visites.php?id=<?php echo $_POST['idClient'];?>">Démarer une visite du client</a>
    </li>
        </div>


<!--
</div>-->
</nav>
<div class="container-fluid well col-sm-8 text-center" style="margin-left: 50px; border-radius:0px;">

    <?php
    if(isset($_POST['idClient'])) {
        $idClient = trim(stripcslashes(htmlspecialchars($_POST['idClient'])));
        $query = "Select * from Client c  ,manager m, bde b WHERE idClient = $idClient and c.idClient = liste_clients.idClient and m.id = liste_clients.idManager and b.id = liste_clients.idBde";
        $reponse = SPDO::getInstance()->query($query);
        while ($requete = $reponse->fetch()) {
        ?>
        <form>
            <legend class="text-center">Information du client : <?php echo $requete['nom'].' '.$requete['prenom']?></legend>
            <!-- Code ITP -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Code ITP : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm "><?php echo $requete['idClient']; ?></label>
                <input type="hidden" name="codeITP" id="codeITP" value="<?php echo $requete['idClient']; ?>"/>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Nom : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['nom']; ?></label>
            </div>

            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Prenom : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['prenom']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Adresse : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['adresse']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Téléphone : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['telephone']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Jour de livraison : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['jourLivraison']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Promoteur : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['promoteur']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Téléoperateur : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['teleOperateur']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Team leader : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['teamLeader']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Canal de livraison : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['canalDeLivraison']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Titulaire : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['nomTitulaire']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Gérant : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['gerant']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Délai de paiement : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['delaiDePaiment']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Type de contrat : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['typeContrat']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Potentiel de communication : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['poDeCommunication']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Zone géographique : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['zoneGeo']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="form-control title input-sm col-sm-3">Planogramme : </label>
                <label class="form-control col-sm-8 col-sm-push-1 input-sm"><?php echo $requete['planogramme']; ?></label>
            </div>


        </form>
    </div>
    <?php
        }
    }else {
        ?>
        <div class="alert alert-danger">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	<strong>Erreur</strong> Une erreur dans le poste
        </div>
        <?php
    }
?>
</div>
