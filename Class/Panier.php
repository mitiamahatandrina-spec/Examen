<?php
class Panier {
    public $articles = [];

    public function ajouterProduit(Produit $produit, $quantite) {
        $id= $produit->id;

        if(isset($this->articles[$id])) {
            $this->articles[$id]['quantite'] += $quantite;
        } else {
            $this->articles[$id] = [
                'produit' => $produit,
                'quantite' => $quantite
            ];
        }
    }
   
    public function calculerTotal() {
        $total = 0;
        foreach($this->articles as $article) {
            $total += $article['produit']->prix() * $article['quantite'];
        }
        return $total;
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