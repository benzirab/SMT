<?php

include_once('../jcart/JCart.php');


if(isset($_POST['site'])) {
    $marque = $_POST['site'];
    $sql = "SELECT * from Produits where Marque LIKE '$marque'";
    $reponse2 = SPDO::getInstance()->query($sql);
    while ($row = $reponse2->fetch()) {
?>
        <div class="well col-sm-4" style="background-color: white;width:220px;margin-left:17px">

        <form method="post" action="" class="jcart">
            <fieldset>
                <input type="hidden" name="jcartToken"
                       value="<?php echo $_SESSION['jcartToken']; ?>"/>
                <input type="hidden" name="my-item-id" value="<?php echo $row['id']; ?>"/>
                <input type="hidden" name="my-item-name"
                       value="<?php echo utf8_encode($row['nomProduit']); ?>"/>
                <input type="hidden" name="my-item-price" value="<?php echo $row['prix']; ?>"/>
                <input type="hidden" name="my-item-url" value=""/>

                <strong class="text-info"><?php echo utf8_encode($row['nomProduit']); ?></strong><br/><br/>
                <table class="col-sm-12">
                    <tr>
                        <td><p class="text-warning">Prix :</p></td>
                        <td><input type="text" value="<?php echo $row['prix']; ?> Dh" size="10" disabled class="text-danger text-center"/></td>
                    </tr>
                    <tr>
                        <td><p class="text-danger">Quantité:</p></td>
                        <td><input type="text" name="my-item-qty" value="1" size="10" style="color: blue;text-align:center;"/></td>
                    </tr>
                </table>
            </fieldset>
                <br>
                <input type="submit" name="my-add-button" value="Ajouter au panier"
                       class="button btn-xs btn-default btn-block"/>

        </form>
    </div>

<?php
        }
    }else {


    ?>
    <div class="alert alert-info">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	<strong>Information: </strong> Sélectionnez une marque pour afficher ces produits associés !
    </div>
    <?php
}
?>
</body>
