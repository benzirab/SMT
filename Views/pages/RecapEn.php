<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/08/2015
 * Time: 09:39
 */
session_start();
$bde=$_SESSION['immatricule'];
include 'menu.php';
include '../../Models/SPDO.php';
$querry ="SELECT * FROM remontee_terrain WHERE idbde = '$bde' ORDER BY Date DESC";
$result = SPDO::getInstance()->query($querry);
?>
<div class="container-fluid well col-sm-10 col-sm-offset-1">
<table class="table table-bordered">
    <legend class="text-center">Les enquêtes passées par le BDE : <i class="text-success"><?php echo $_SESSION['login'] ;?></i></legend>
    <tbody>
    <tr>
        <td class="td-info" width="15%">Date </td>
        <td class="td-info" width="15%">Secteur</td>
        <td class="td-info" width="15%">Marque</td>
        <td class="td-info" width="15%">Sujet</td>
        <td class="td-info" width="40%">Commentaire</td>

    </tr>
    <?php
    while($row=$result->fetch()) {
        ?>
        <tr>
            <td><?php echo utf8_encode($row['date']); ?></td>
            <td><?php echo utf8_encode($row['Secteur']); ?></td>
            <td><?php echo utf8_encode($row['Marque']); ?></td>
            <td><?php echo utf8_encode($row['sujet']); ?></td>
            <td style="word-wrap: break-word;"><?php echo utf8_encode($row['commentaire']); ?></td>
        </tr>
    <?php
    }
    ?>

    </tbody>
</table>


</div>