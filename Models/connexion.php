<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 06/08/15
 * Time: 12:10
 */

        session_start();
        try {
            $connexion = new PDO('mysql:host=localhost;dbname=SMT;charset=utf8', "root", "khalil007");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }