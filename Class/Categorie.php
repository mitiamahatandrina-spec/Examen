<?php
class Categorie {
    private $nom;
    private $produits = [];

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getNom() { return $this->nom; }
    public function ajouterProduit(Produit $produit) {
        $this->produits[] = $produit;
    }
    public function getProduits() { return $this->produits; }
}
?>