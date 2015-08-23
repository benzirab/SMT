<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 07/08/15
 * Time: 08:57
 */
require 'SPDO.php';

class Commande
{

    private $idBDE;
    private $codeITP;
    private $contents;
    private $total;
    private $modePaiement;
    public function __construct($idBDE, $codeITP, $contents,$total , $modePaiement)
    {
        $this->codeITP = $codeITP;
        $this->idBDE = $idBDE;
        $this->contents = $contents;
        $this->total = $total;
        $this->modePaiement = $modePaiement;
    }
    // 1 Getteur de Content
    public function getContents()
    {
        return $this->contents;
    }
    // Ajout de commande
    public function addCommande(){
        $insertCommande = "INSERT INTO `SMT`.`commande` (`idcommande`, `idbde`, `codeitp`, `date`, total, modePaiment) VALUES (NULL,$this->idBDE, $this->codeITP, CURRENT_TIMESTAMP, $this->total,'$this->modePaiement');";
        $reponse = SPDO::getInstance()->exec($insertCommande);
        if($reponse == 1){
            $idcommande = SPDO::getInstance()->lastInsertedId();
            echo $idcommande."La commande est insérée !";
            foreach ($this->contents as $item) {
                $itemId = $item['id'];
                $itemQty = $item['qty'];
                $insertPanier = "INSERT INTO `SMT`.`panier`  (`idproduit`,`idcommande`, `quantite`) VALUES ($itemId, $idcommande , $itemQty)  ;";
                $reponse1 = SPDO::getInstance()->exec($insertPanier);
            }
        }else{
            echo "La commande ne passe pas <br>";
            echo $this->idBDE."<br>";
            echo $this->modePaiement;

        }

        return $reponse + $reponse1;
    }
    public function update($idBDE, $codeITP, $contents){
        // Requête Update.
    }

    // Ces fonction sont static car elles n'ont pas de relation avec l'objet commande crée !
    /**
     * @param $commandeID
     * @return une commande spécifique désignée par son id
     */
    public static function getCommande($commandeID){
        $query = "select from commande c ,panier p WHERE idbde = $commandeID and c.idcommande = p.idcommande";
        $reponse = SPDO::getInstance()->query($query);
        return $reponse;
    }

    /**
     * @param $bde
     * @return Toutes les commandes réalisée par un bde
     */
    public static function getAllMyCommandes($bde){
        $query = "SELECT * FROM commande C,Client cl ,panier p, Produits pr WHERE C.codeitp = cl.idClient AND C.idcommande = p.idcommande AND p.idproduit = pr.id AND C.idbde = '$bde'group by C.idcommande  ORDER BY C.date DESC";
        $result = SPDO::getInstance()->query($query);
        return $result;

    }

    /**
     * @return PDOStatement
     */
    public static function getAllCommandes(){
        $query = "Select * from commande";
        $result = SPDO::getInstance()->query($query);
        return $result;
    }
    public static function getVolumeCommande(){
        $query = 'Select * from panier p , Produits pr WHERE p.';

    }

    /**
     * @param $mois
     * @return mixed
     */
    public static function caMensuelTotal($mois){
        $query = "SELECT SUM(`total`) as ca FROM commande WHERE MONTH(`date`) = ".$mois;
        $reponse = SPDO::getInstance()->query($query);
        return $reponse->fetch();
    }

    /**
     * @param $mois
     * @param $idBDE
     * @return mixed
     *
     */
    public static function caMensuelBDE($mois, $idBDE){
        $query = "SELECT SUM(`total`) as ca FROM commande WHERE MONTH(`date`) = ".$mois." and idbde =".$idBDE;
        $reponse = SPDO::getInstance()->query($query);
        return $reponse->fetch();
    }




}