<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 10/08/15
 * Time: 09:20
 */
session_start();

include 'SPDO.php';

class Produits
{
    private $idProduit;
    private $descProduit;
    private $marqueProduit;
    private $prixProduit;
    private $pckOut;
    private $cigarettes;

    /**
     * Produits constructor.
     * @param $idProduit
     * @param $descProduit
     * @param $marqueProduit
     * @param $prixProduit
     * @param $pckOut
     * @param $cigarettes
     */
    /*      Constructor      */
    public function __construct($idProduit, $descProduit, $marqueProduit, $prixProduit, $pckOut, $cigarettes)
    {
        $this->idProduit = $idProduit;
        $this->descProduit = $descProduit;
        $this->marqueProduit = $marqueProduit;
        $this->prixProduit = $prixProduit;
        $this->pckOut = $pckOut;
        $this->cigarettes = $cigarettes;
    }
    /*      End of Constructor      */

    /*  Getters and Setters */

    /**
     * @return $idProduit
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param mixed $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return $descProduit
     */
    public function getDescProduit()
    {
        return $this->descProduit;
    }

    /**
     * @param mixed $descProduit
     */
    public function setDescProduit($descProduit)
    {
        $this->descProduit = $descProduit;
    }

    /**
     * @return $marqueProduit
     */
    public function getMarqueProduit()
    {
        return $this->marqueProduit;
    }

    /**
     * @param mixed $marqueProduit
     */
    public function setMarqueProduit($marqueProduit)
    {
        $this->marqueProduit = $marqueProduit;
    }

    /**
     * @return $prixProduit
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * @param mixed $prixProduit
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;
    }

    /**
     * @return $pckOut
     */
    public function getPckOut()
    {
        return $this->pckOut;
    }

    /**
     * @param mixed $pckOut
     */
    public function setPckOut($pckOut)
    {
        $this->pckOut = $pckOut;
    }

    /**
     * @return $cigarettes
     */
    public function getCigarettes()
    {
        return $this->cigarettes;
    }

    /**
     * @param mixed $cigarettes
     */
    public function setCigarettes($cigarettes)
    {
        $this->cigarettes = $cigarettes;
    }

    /*  End of Getters and Setters */
    public static function getProduits(){

    }



}