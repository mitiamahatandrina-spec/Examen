<?php
class Utilisateur {
    private $pseudo;
    private $motDePasse;

    public function __construct($pseudo, $motDePasse) {
        $this->pseudo = $pseudo;
        $this->motDePasse = $motDePasse;
    }

    public function getPseudo() { 
        return $this->pseudo; }
    public function verifierConnexion($pseudo){
        return $this->pseudo === $pseudo;}
    public function verifierMotDePasse($mdp) {
        return $this->motDePasse === $mdp;
    }
}
?>