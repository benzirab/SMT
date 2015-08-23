<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 19/08/15
 * Time: 16:34
 */
session_start();

include 'menu.php';
include '../../Models/Commande.php';
$row = Commande::caMensuelBDE(8,$_SESSION['immatricule']);
?>


<div class="container-fluid well">

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Total :</strong> <?php echo $row['ca'];?>
    </div>

</div>

