<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 12/08/15
 * Time: 08:55
 */


/** Jointure SQL
 * FROM Animal     -- Table principale
 * INNER JOIN Espece ON Animal.espece_id = Espece.id
 */
include_once('../Views/jcart/JCart.php');
require '../Models/Commande.php';
session_start();
$totalos = $jcart->getSubtotal();
$total = str_replace(',','.',$totalos);
$content = $jcart->get_contents();
$bde = $_SESSION['immatricule'];
$codeITP = $_GET['id'];
$modePaiement = htmlspecialchars($_GET['mode']);
$commande = new Commande($bde,$codeITP,$content,$total, $modePaiement);

$check = $commande->addCommande();
if($check == 2){$jcart->empty_cart();}
?>

<script>
    alert("La commande a été stocké dans la base.");
    var obj = 'window.location.replace("http://localhost/Stage_SMT/Views/pages/commande.php");';
    setTimeout(obj,1000);
</script>
