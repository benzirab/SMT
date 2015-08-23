<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 10/08/15
 * Time: 15:00
 */
/**
 * input 1: Numéro BDE
 * input 2: Code Client
 */
include_once '../jcart/JCart.php';
session_start();
include '../../Models/SPDO.php';
$reponse1 = SPDO::getInstance()->query('SELECT Distinct Marque from Produits');
$_SESSION['id']= $_GET['id'];
$idClient = $_GET['id'];
?>




<header>
    <?php include 'menu.php'; ?>
</header>

<div class="container col-sm-8">
    <div class="col-sm-12 well">
        <div class="container-fluid col-sm-12">

            <form method="post">
                <div class="col-sm-12">

                <label for="select" class="col-sm-6 control-label text-primary">Marques</label>
                <select class="form-control col-sm-6 input-sm" id="select" name="site">
                    <?php
                    if(isset($_POST['site'])){
                        echo '<option>'.$_POST['site'].'</option>';
                    }else{
                        echo '<option>Liste des Marques</option>';
                    }


                    if(isset($_POST['site'])){
                        while($marques = $reponse1->fetch()){
                            if(utf8_encode($marques['Marque']) == $_POST['site'])continue;
                            ?>

                            <option value="<?php echo utf8_encode($marques['Marque'])  ?>" name="opt">
                                <?php echo utf8_encode($marques['Marque'])  ?>
                            </option>

                            <?php
                        }
                    }else{
                        while($marques = $reponse1->fetch()){
                            ?>

                            <option value="<?php echo utf8_encode($marques['Marque'])  ?>" name="opt">
                                <?php echo utf8_encode($marques['Marque'])  ?>
                            </option>

                            <?php
                        }
                    }

                    ?>
                </select>
                    <input id="idClient" value="<?php echo $_GET['id']?>" hidden>
                    <button type="submit" name="submit" id="valos" hidden>Valider une commande</button>
            </form>
                </div>
                <div class="col-sm-12">
                <label for="select" class="col-sm-6 control-label text-primary">Mode de paiement</label>
                <select class="form-control col-sm-6 input-sm" id="modePaiement" name="site">
                    <?php
                    $reponseDelai = SPDO::getInstance()->query("select * from Client WHERE idClient = $idClient");
                    $row = $reponseDelai->fetch();
                    if ($row['delaiDePaiment'] == 30) {
                        ?>
                        <option value="especes">Espèces</option>
                        <option value="cheque_30_jours">Chèque 30 Jours</option>
                        <option value="cheque_3_jours">Chèque 3 Jours</option>
                        <option value="cheque_7_jours">Chèque 7 Jours</option>
                        <?php
                    }else
                    {
                        if($row['delaiDePaiment'] == 7) {
                            ?>
                            <option value="especes">Espèces</option>
                            <option value="cheque_3_jours">Chèque 3 Jours</option>
                            <option value="cheque_7_jours">Chèque 7 Jours</option>
                            <?php
                        }else {
                            ?>
                            <option value="especes">Espèces</option>
                            <option value="cheque_3_jours">Chèque 3 Jours</option>
                            <?php
                        }
                    }
                    ?>
                </select>
                </div>


        </div>
            <br/><br/>
    <br/><br/>
        <div class="container-fluid well col-sm-12" id="liste">
            <?php include'produits.php' ?>
        </div>
    </div>
</div>
<div id="sidebar" class="well col-sm-4" style="width: 32%">

        <div class="container-fluid well-sm col-sm-12">
            <label class="form-control input-sm col-sm-5 bg-primary" style="border-radius: 0px;">BDE Login : </label>
            <label class="form-control input-sm col-sm-5 col-sm-push-2 text-center" style="border-radius: 0px;background-color: #456e8b;color: #ffffff;"><?php echo $_SESSION['login']; ?></label>
        </div>
        <div class="container-fluid well-sm col-sm-12">
            <label class="form-control input-sm col-sm-5" style="border-radius: 0px;">
                Code Client :
            </label>
            <label class="form-control input-sm col-sm-5 col-sm-push-2 text-center" style="border-radius: 0px;background-color: #456e8b;color: #ffffff;" id="idClient" value="<?php echo $_SESSION['id'];?>">
                <?php echo $_SESSION['id'];?>
            </label>
        </div>

    <div id="jcart" class="col-sm-12">
        <?php $jcart->display_cart();?>
    </div>
    <div class="col-sm-12">
        <br>
    </div>
    <div class="col-sm-12 text-center">

        <a href="../../Controllers/validerCommande.php?id=<?php echo $_GET['id']; ?>&mode=especes" id="link" style="border-radius: 0px;">
..
        </a>
        <div class="btn btn-block btn-success" id="valCommande">Valider la commande</div>
    </div>
</div>


<script>
    $(document).ready(function(){

        $('#select').change(function() {
            $('#valos').click();
        });

        $('#valCommande').click(function(){
            // $("#link").click();
            var modePaiement = $('#modePaiement').val();
            var idClient = $('#idClient').val();
            alert(idClient);
            window.location.replace("../../Controllers/validerCommande.php?id="+idClient+"&mode="+modePaiement+"");

        });

    });




</script>
<script type="text/javascript" src="../jcart/js/jcart.min.js"></script>


</body>

</html>
