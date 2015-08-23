<?php
session_start();

include 'menu.php';
include '../../Models/Connection.php';
$connexion = Connexion::connect();
?>
    <div class="container-fluid well col-sm-8 col-sm-offset-2 text-center">
<?php
if(isset($_GET['id'])) {
    $idClient = trim(stripcslashes(htmlspecialchars($_GET['id'])));
    $query = "Select * from Client WHERE idClient = $idClient";
    $reponse = $connexion->query($query);
    while ($requete = $reponse->fetch()) {
        ?>
        <form>
            <legend class="text-center">Suivi BD de <?php echo $requete['nom']." ".$requete['prenom'];?></legend>
            <!-- Code ITP -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Code ITP : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm "><?php echo $requete['idClient']; ?></label>
                <input type="hidden" name="codeITP" id="codeITP" value="<?php echo $requete['idClient']; ?>"/>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Nom : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['nom']; ?></label>
            </div>

            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Prenom : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['prenom']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Adresse : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['adresse']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Téléphone : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['telephone']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Jour de livraison : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['jourLivraison']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Promoteur : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['promoteur']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Téléoperateur : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['teleOperateur']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Team leader : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['teamLeader']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Canal de livraison : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['canalDeLivraison']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Titulaire : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['nomTitulaire']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Gérant : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['gerant']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Délai de paiement : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['delaiDePaiment']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Type de contrat : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['typeContrat']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Potentiel de communication : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['poDeCommunication']; ?></label>
            </div>

            <!-- E-mail -->
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Zone géographique : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['zoneGeo']; ?></label>
            </div>
            <div class="container-fluid well-sm col-sm-12">
                <label class="label-primary col-sm-5">Planogramme : </label>
                <label class="form-control col-sm-6 col-sm-push-1 input-sm"><?php echo $requete['planogramme']; ?></label>
            </div>

            <div class="btn-group">
                <a href="commande.php?id=<?php echo $_POST['idClient'];?>"><button type="button" class="btn btn-primary" id="commande" >Passer une commande </button></a>
                <a href="commande.php?id=<?php echo $_POST['idClient'];?>"><button type="button" class="btn btn-info" id="suivi">Suivi du client</button></a>
                <a href="commande.php?id=<?php echo $_POST['idClient'];?>"><button type="button" class="btn btn-success" id="visite">Démarer une visite du client</button></a>
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