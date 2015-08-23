<?php

include '../jcart/JCart.php';
session_start();
include 'menu.php';
include '../../Models/Connection.php';
$connexion = Connexion::connect();

if(isset($_POST['codeITP'])) {
    $idClient = $_POST['codeITP'];
    $sql = "SELECT * FROM Client WHERE idClient LIKE '%$idClient%'";
    $reponse2 = $connexion->query($sql);
    // Affiche le nombre de ligne dans cette requete echo $reponse2->rowCount();
    ?>
    <div class="col-sm-8 col-sm-offset-2 well ">
    <?php
    if ($reponse2->rowCount() != 0) {
        while ($row = $reponse2->fetch()) {
            ?>
            <div class="well col-sm-4" style="background-color: white;width:240px;margin-left:17px">

                <form method="post" action="info_client.php" class="jcart" id="formClient">

                    <strong>
                        <p class="text-info text-center">
                            <?php echo utf8_encode($row['nom']); ?>
                            <?php echo utf8_encode($row['prenom']); ?>
                        </p>
                    </strong>


                    <table class="col-sm-12">

                        <tr>
                            <strong>
                                <p class="text-warning text-center">Code Client :</p>
                            </strong>

                        </tr>
                        <tr>
                            <input type="text" name="idClient" value="<?php echo $row['idClient']; ?> "
                                   class="text-danger text-center col-sm-12"/>
                        </tr>


                        <tr>
                            <strong>
                                <p class="text-success text-center">Type de contrat :</p></tr>
                        </strong>
                        <tr>
                            <input type="text" name="my-item-qty" value="<?php echo $row['typeContrat']; ?>" disabled
                                   class="text-info text-center col-sm-12"/>
                        </tr>

                    </table>

                    <br>
                    <br>
                    <!--                    <input type="submit" name="my-add-button" value="Selectionner Le client" class="button btn-xs btn-default btn-block" />-->
                    <button name="my-add-button" id="submitter" class="button btn-xs btn-default btn-block">Selectionner
                        Le client
                    </button>
                </form>
            </div>
            <?php

        }
        ?>

        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Erreur</strong> Le client recherché est introuvable !
        </div>
        <?php
    }
}

$connexion = null;
?>
        </body>


        <script>
            $('#submitter').click(function(){
                $('formClient').submit();
            });

        </script>