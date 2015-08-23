<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 13/08/15
 * Time: 14:56
 */

//include '../../Models/Client.php';

/*for($i=0;$i<20;$i++){

    for($j=1;$j<6;$j++){
        $delai = 3;
        if($i%2 == 0) $delai = 7;
        if($i%3 == 0) $delai = 30;
        $client = new Client($i,'Mr. Nom '.$i , 'Prenom '.$i, 'Adresse n '.$i,
            '1232400094'.$i, $j, 'promoteur '.$i+$j, 'teleoperateur '.$i+$j, 'teamleader '.$i+$j,
            'Canal de livraison '.$i+$j, 'nom Titulaire '.$i+$j, 'gerant '.$i+$j, $delai, 'Type de contrat n: '.$i+$j,
            'date', 'Potentiel de communication n: '.$i+$j, 'Zone n: '.$i+$j, 'Planogramme n: '.$i+$j);
    }
}
echo 'ALL IS GOOD KNOW';





$nom= 'Mr. Nom ';
$prenom = 'Prenom ';
$adresse = 'Adresse n '
$telephone = 1232400094;
$promoteur ='promoteur ';
$teleOperateur ='teleoperateur ';
$teamLeader ='teamleader ';
$canalDeLivraison ='Canal de livraison ';
$nomTitulaire ='nom Titulaire ';
$gerant ='gerant ';
$typeDeContrat ='Type de contrat n: ';
$potentielDeCommunication ='Potentiel de communication n: ';
$zoneGeographique ='Zone n: ';
$planogramme ='Planogramme n: ';*/
try {
    $connexion = new PDO('mysql:host=localhost;dbname=SMT;charset=utf8', "root", "khalil007");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
$nbClient = 0 ;
$script = '';
for($i=21;$i<2221;$i++){
    $nom= "'Mr. Nom ".$i."'";
    $prenom = "'Prenom ".$i."'";
    $adresse = "'Adresse n ".$i."'";
    $telephone = "'1232400094'";
    $promoteur ="'promoteur ".$i."'";
    $teleOperateur ="'teleoperateur ".$i."'";
    $teamLeader ="'teamleader ".$i."'";
    $canalDeLivraison ="'Canal de livraison ".$i."'";
    $nomTitulaire ="'nom Titulaire ".$i."'";
    $gerant ="'gerant ".$i."'";
    $typeDeContrat ="'Type de contrat n: ".$i."'";
    $potentielDeCommunication ="'Potentiel de communication n: ".$i."'";
    $zoneGeographique ="'Zone n: ".$i."'";
    $planogramme ="'Planogramme n: ".$i."'";
    for($j=1;$j<6;$j++){
        $nbClient++;
        $delai = 3;
        if($i%2 == 0) $delai = 7;
        if($i%3 == 0) $delai = 30;
        $script = "INSERT INTO `SMT`.`Client` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `jourLivraison`, `promoteur`, `teleOperateur`, `teamLeader`, `canalDeLivraison`, `nomTitulaire`, `gerant`, `delaiDePaiment`, `typeContrat`, `dateFinContrat`, `poDeCommunication`, `zoneGeo`, `planogramme`)
                    VALUES ($i, $nom, $prenom, $adresse, $telephone, $j, $promoteur, $teleOperateur,
                     $teamLeader, $canalDeLivraison,$nomTitulaire, $gerant, $delai,
                     $typeDeContrat, CURRENT_TIMESTAMP , $potentielDeCommunication, $zoneGeographique, $planogramme);";
        $res = $connexion->exec($script);
        if($res == 1) {
            echo 'Client n° '.$nbClient.' Added <br><hr>';
        }else echo 'Il y\'a un problème !! '.$i.' <br>';
    }
}
echo $script;