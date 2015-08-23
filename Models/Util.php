<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 10/08/15
 * Time: 09:35
 */
require 'Client.php';
session_start();
$date = date_create('2000-01-01');
$datos =  date_format($date, 'Y-m-d');

$client = new Client(131315, "El Boss", "Del Testos", "Paris Couzin ! ", 3333333333, 5, "El promotor", "El teleOperationnal", "El Leader", "Canalos 123","El Titularios", "gerancias", 30, "Gold", $datos , "El potential TOUS ÇA !", "El Zonas", "Los planogrammos");
$statut = $client->addClient();
if($statut == 1) echo 'Client Ajouté avec succée';
else echo 'idekfih';
?>