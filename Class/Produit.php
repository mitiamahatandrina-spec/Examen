<?php
class Produit {
    public $id;
    public $nom;
    public $prix;
    public $categorie;

    public function __construct($id,$nom, $prix,$categorie,$description,$image) {
        $this->id= $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->categorie = $categorie;
        $this->description= $description;
        $this->image= $image;

    }
    public function afficher(){
                echo  "Produit: ". $this->nom;
                echo "<br>";
                echo "Prix: " . $this->prix;
                echo "<br>";
                echo "Quantite: ". $this->quantite;
                echo "<br>";
                echo "Total: ". $this->calculTotal();
                echo "<br>";
}
}
?>