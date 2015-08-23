<?php

/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 06/08/15
 * Time: 12:08
 */
require 'SPDO.php';
class Client{
        private $connexion               ;
        private $codeITP                 ;
        private $nom                     ;
        private $prenom                  ;
        private $adresse                 ;
        private $numTel                  ;
        private $promoteur               ;
        private $teleOperateur           ;
        private $teamLeader              ;
        private $canalDeLivraison        ;
        private $nomTitulaire            ;
        private $gerant                  ;
        private $delaiPaiement           ;
        private $typeDeContrat           ;
        private $dateFinContrat          ;
        private $potentielDeCommunication;
        private $zoneGeographique        ;
        private $planogramme             ;
        /* _____________________ Constructeur _____________________ */
        public function __construct($codeITP, $nom, $prenom, $adresse, $numTel, $jourLivraison, $promoteur, $teleOperateur, $teamLeader, $canalDeLivraison,$nomTitulaire, $gerant, $delaiPaiement, $typeDeContrat, $dateFinContrat, $potentielDeCommunication, $zoneGeographique, $planogramme){
            $this->connexion                = Connexion::connect()      ;
            $this->codeITP                  = $codeITP                  ;
            $this->nom                      = $nom                      ;
            $this->prenom                   = $prenom                   ;
            $this->adresse                  = $adresse                  ;
            $this->numTel                   = $numTel                   ;
            $this->jourLivraison            = $jourLivraison            ;
            $this->promoteur                = $promoteur                ;
            $this->teleOperateur            = $teleOperateur            ;
            $this->teamLeader               = $teamLeader               ;
            $this->canalDeLivraison         = $canalDeLivraison         ;//
            $this->nomTitulaire             = $nomTitulaire             ;//
            $this->gerant                   = $gerant                   ;//
            $this->delaiPaiement            = $delaiPaiement            ;
            $this->typeDeContrat            = $typeDeContrat            ;
            $this->dateFinContrat           = $dateFinContrat           ;
            $this->potentielDeCommunication = $potentielDeCommunication ;//
            $this->zoneGeographique         = $zoneGeographique         ;
            $this->planogramme              = $planogramme              ;//

            /*try {
                $connexion = new PDO('mysql:host=localhost;dbname=SMT;charset=utf8', "root", "khalil007");
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
            $script = "INSERT INTO `SMT`.`Client` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `jourLivraison`, `promoteur`, `teleOperateur`, `teamLeader`, `canalDeLivraison`, `nomTitulaire`, `gerant`, `delaiDePaiment`, `typeContrat`, `dateFinContrat`, `poDeCommunication`, `zoneGeo`, `planogramme`) VALUES ($i, $nom, $prenom, $adresse, $telephone, $j, $promoteur, $teleOperateur, $teamLeader, $canalDeLivraison,$nomTitulaire, $gerant, $delai, $typeDeContrat, CURRENT_TIMESTAMP , $potentielDeCommunication, $zoneGeographique, $planogramme);";
            $sql = "INSERT INTO `SMT`.`Client` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `jourLivraison`, `promoteur`, `teleOperateur`, `teamLeader`, `canalDeLivraison`, `nomTitulaire`, `gerant`, `delaiDePaiment`, `typeContrat`, `dateFinContrat`, `poDeCommunication`, `zoneGeo`, `planogramme`) VALUES
 ($codeITP, $nom, $prenom, $adresse, 2345432, $jourLivraison, $promoteur, $teleOperateur,
 $teamLeader, $canalDeLivraison,$nomTitulaire, $gerant, $delaiPaiement, $typeDeContrat, CURRENT_TIMESTAMP ,
  $potentielDeCommunication, $zoneGeographique, $planogramme)";

  // Script SQL d'ajout de client
            $connexion->exec($sql);*/

            /* Ajouter après une requete sql qui crée le client dans la base de donnée. */
        }
        /* _____________________ Getters _____________________ */
        public function getCodeITP()                 { return $this->codeITP                   ;}
        public function getNom()                     { return $this->nom                       ;}
        public function getPrenom()                  { return $this->prenom                    ;}
        public function getAdresse()                 { return $this->adresse                   ;}
        public function getNumTel()                  { return $this->numTel                    ;}
        public function getPromoteur()               { return $this->promoteur                 ;}
        public function getTeleOperateur()           { return $this->teleOperateur             ;}
        public function getTeamLeader()              { return $this->teamLeader                ;}
        public function getCanalDeLivraison()        { return $this->canalDeLivraison          ;}
        public function getNomTitulaire()            { return $this->nomTitulaire              ;}
        public function getGerant()                  { return $this->gerant                    ;}
        public function getDelaiPaiement()           { return $this->delaiPaiement             ;}
        public function getTypeDeContrat()           { return $this->typeDeContrat             ;}
        public function getDateFinContrat()          { return $this->dateFinContrat            ;}
        public function getPotentielDeCommunication(){ return $this->potentielDeCommunication  ;}
        public function getZoneGeographique()        { return $this->zoneGeographique          ;}
        public function getPlanogramme()             { return $this->planogramme               ;}


        /* _____________________ Setters _____________________ */
        public function setCodeITP($codeITP)                                  {  $this->codeITP                  = $codeITP                  ;}
        public function setNom($nom)                                          {  $this->nom                      = $nom                      ;}
        public function setPrenom($prenom)                                    {  $this->prenom                   = $prenom                   ;}
        public function setAdresse($adresse)                                  {  $this->adresse                  = $adresse                  ;}
        public function setNumTel($numTel)                                    {  $this->numTel                   = $numTel                   ;}
        public function setPromoteur($promoteur)                              {  $this->promoteur                = $promoteur                ;}
        public function setTeleOperateur($teleOperateur)                      {  $this->teleOperateur            = $teleOperateur            ;}
        public function setTeamLeader($teamLeader)                            {  $this->teamLeader               = $teamLeader               ;}
        public function setCanalDeLivraison($canalDeLivraison)                {  $this->canalDeLivraison         = $canalDeLivraison         ;}
        public function setNomTitulaire($nomTitulaire)                        {  $this->nomTitulaire             = $nomTitulaire             ;}
        public function setGerant($gerant)                                    {  $this->gerant                   = $gerant                   ;}
        public function setDelaiPaiement($delaiPaiement)                      {  $this->delaiPaiement            = $delaiPaiement            ;}
        public function setTypeDeContrat($typeDeContrat)                      {  $this->typeDeContrat            = $typeDeContrat            ;}
        public function setDateFinContrat($dateFinContrat)                    {  $this->dateFinContrat           = $dateFinContrat           ;}
        public function setPotentielDeCommunication($potentielDeCommunication){  $this->potentielDeCommunication = $potentielDeCommunication ;}
        public function setZoneGeographique($zoneGeographique)                {  $this->zoneGeographique         = $zoneGeographique         ;}
        public function setPlanogramme($planogramme)                          {  $this->planogramme              = $planogramme              ;}

        public function addClient(){
            $query = "INSERT INTO `SMT`.`Client` (`idClient`, `nom`, `prenom`, `adresse`, `telephone`, `jourLivraison`, `promoteur`, `teleOperateur`, `teamLeader`, `canalDeLivraison`, `nomTitulaire`, `gerant`, `delaiDePaiment`, `typeContrat`, `dateFinContrat`, `poDeCommunication`, `zoneGeo`, `planogramme`)" ."VALUES ('$this->codeITP', '$this->nom', '$this->prenom', '$this->adresse', '$this->numTel','$this->jourLivraison', '$this->promoteur', '$this->teleOperateur', '$this->teamLeader', '$this->canalDeLivraison','$this->nomTitulaire','$this->gerant', '$this->delaiPaiement', '$this->typeDeContrat', '$this->dateFinContrat' , '$this->potentielDeCommunication', '$this->zoneGeographique', '$this->planogramme');";
            return $this->connexion->exec($query);

        }


        /* _____________________ Utils _____________________ */
        public static function getClient($idClient){
            $query = "Select * from Client WHERE id = $idClient";

            return SPDO::getInstance()->query($query);
        }
        public function getPalier(){
            /** Renvoie le palier du client
             * Calculer à partir du C.A
             *
             */
        }
        public function caActuel(){
            /**
             * La somme des commandes relatif à ce Client
             */
        }
        public function caMensuel($moi){
            /**
             * La somme des commandes réaliser par ce client de ce moi
             * on extrait les commandes de $moi
             * Return la somme
             */
        }



    }
?>
