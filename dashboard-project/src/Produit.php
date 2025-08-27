<?php

class Produit {
    private $reference;
    private $libelle;
    private $prix;
    private $quantite;
    private $prixAchat;
    private $categorie;

    public function __construct($reference, $libelle, $prix, $quantite, $prixAchat, $categorie) {
        $this->reference = $reference;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->prixAchat = $prixAchat;
        $this->categorie = $categorie;
    }

    public function getReference() {
        return $this->reference;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getPrixAchat() {
        return $this->prixAchat;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public static function afficher() {
        // Logic to fetch products from the database
        // This should return an array of Produit objects
    }

    public function modifier() {
        // Logic to update product details in the database
    }

    public function supprimer() {
        // Logic to delete the product from the database
    }
}