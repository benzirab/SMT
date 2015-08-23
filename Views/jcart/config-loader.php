<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// By default, this file returns the $config array for use with PHP scripts
// If requested via Ajax, the array is encoded as JSON and echoed out to the browser

// Don't edit here, edit config.php
include_once('config.php');
$date = new DateTime();
$datos = $date->format('d-m-Y');
// Use default values for any settings that have been left empty
if (!$config['currencyCode']) $config['currencyCode']                     = 'MAD';
if (!$config['text']['cartTitle']) $config['text']['cartTitle']           = 'Commande du '.$datos;
if (!$config['text']['singleItem']) $config['text']['singleItem']         = 'Produit';
if (!$config['text']['multipleItems']) $config['text']['multipleItems']   = 'Produits';
if (!$config['text']['subtotal']) $config['text']['subtotal']             = 'Total';
if (!$config['text']['update']) $config['text']['update']                 = 'Mise à jour';
if (!$config['text']['checkout']) $config['text']['checkout']             = 'Facture';
if (!$config['text']['checkoutPaypal']) $config['text']['checkoutPaypal'] = 'Facture paiement PayPal';
if (!$config['text']['removeLink']) $config['text']['removeLink']         = 'Supprimer';
if (!$config['text']['emptyButton']) $config['text']['emptyButton']       = 'Vide';
if (!$config['text']['emptyMessage']) $config['text']['emptyMessage']     = 'Le panier est vide';
if (!$config['text']['itemAdded']) $config['text']['itemAdded']           = 'Produit Ajouté';
if (!$config['text']['priceError']) $config['text']['priceError']         = 'Le format du prix est invalide';
if (!$config['text']['quantityError']) $config['text']['quantityError']   = 'Les quantités des produits sont des nombres !';
if (!$config['text']['checkoutError']) $config['text']['checkoutError']   = 'Votre commande ne peux être achevée !';

if ($_GET['ajax'] == 'true') {
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($config);
}
?>
