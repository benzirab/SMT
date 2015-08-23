<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 18/08/15
 * Time: 10:20
 */
class Connexion
{

    public static function connect(){

        try {
            $connexion = new PDO('mysql:host=localhost;dbname=SMT;charset=utf8', "root", "khalil007");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        return $connexion;
    }

}