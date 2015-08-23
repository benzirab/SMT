<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/08/2015
 * Time: 09:38
 */
session_start();
include 'menu.php';
include '../../Models/Commande.php';
$bde=$_SESSION['immatricule'];
?>
<div class="container-fluid well col-sm-10 col-sm-offset-1">
<table class="table table-bordered">
    <legend class="text-center">Les commandes passées par le BDE : <i class="text-success"><?php echo $_SESSION['login'];?></i> </legend>
    <tbody>
    <tr>
        <td class="td-info">Code ITP</td>
        <td class="td-info">Nom</td>
        <td class="td-info">Prenom</td>
        <td class="td-info">Jour de livraison </td>
        <td class="td-info">Code commande</td>
        <td class="td-info">Jour de commande </td>
        <td class="td-info">Total </td>


    </tr>
<?php

    $result = Commande::getAllMyCommandes($bde);

    while($row=$result->fetch()) {
        ?>

        <tr>
            <td><?php echo $row['idClient']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['jourLivraison']; ?></td>
            <td><?php echo $row['idcommande']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['total']; ?></td>

        </tr>
<?php
    }
    ?>

    </tbody>
</table>
    </div>