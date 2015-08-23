<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 07/08/15
 * Time: 08:53
 */
require 'SPDO.php';
class BDE
{
    private $immatricule;
    private $nom;
    private $prenom;
    private $zone;

    public function __construct($immatricule, $nom, $prenom, $zone){

        $this->con = Connexion::connect();
        $this->immatricule = $immatricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->zone = $zone;

    }
    public function checkConnexion($login,$password){

        SPDO::getInstance()->query("select * from bde WHERE immatricule = $login AND password = $password");

    }

}