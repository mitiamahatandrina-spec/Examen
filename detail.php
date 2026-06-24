<?php
session_start();
require_once "Class\Produit.php";
require_once "Class\Panier.php";


$produits= [
    new Produit(1,  "Paracétamol",  10000 ,"calmant", "Traitement symptomatique des douleurs légères à modérées et/ou de la fièvre","Images\paracetamol.jpg"),
    new Produit(2,  "Doliprane", 15000, "calmant", "Médicament contenant du paracétamol. Soulage rapidement maux de tête et courbatures.","Images\doliprane.jpg" ),
    new Produit(3,  "Ibuprofène",  12000, "calmant", "Anti-inflammatoire non stéroïdien indiqué chez l'adulte en cas de fièvre ou douleurs.","Images\ibuprofene.jpg"),
    
    new Produit( 4,  "Vitamine C", 7000,"fortifiant","Idéal pour lutter contre la fatigue passagère et tonifier les défenses immunitaires.","vitaminec.jpg"),
    new Produit( 5, "Multivitamines", 8000, "fortifiant", "Cocktail complet d'oligo-éléments et vitamines pour retrouver l'énergie au quotidien.","Images\multivitamine.jpg" ),
    new Produit( 6, "Fer Plus",  10000,"fortifiant","Complément ciblé pour réduire les carences en fer et redonner du tonus cellulaire.","Images\ferplus.jpg"),
    
    new Produit( 7, "Bepanthen", 20000, "creme","Onguent de protection cutanée pour apaiser les irritations et rougeurs.","Images\bepanthen.jpg"),
    new Produit( 8,  "Dexeryl", 17000, "creme","Crème émolliente protectrice pour le traitement des états de sécheresse cutanée.","Images\dexeryl.jpg" ),
    new Produit( 9,  "Dermalex", 30000, "creme", "Soin dermatologique d'activation de réparation de la barrière épidermique.", "Images\dermalex.jpg"),
    
    new Produit( 10,  "Touxcalm", 12000, "sirop","Sirop préconisé pour calmer les toux sèches et les toux d'irritation gênantes.","Images\touxcalm.jpg"),
    new Produit( 11,  "Bronchoflex", 28000,"sirop","Formulation douce pour apaiser et dégager les voies respiratoires de l'enfant.", "Images\bronchoflex.jpg"),
    new Produit( 12, "Sirop enfant", 24000,"sirop","Formulation douce pour apaiser et dégager les voies respiratoires de l'enfant","Images\sirop.jpg")
];


$id = $_GET['id'] ?? 1;
$produit = $produits[$id-1];

if(!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = new Panier();

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $quantite = intval($_POST['quantite']);
      $_SESSION['panier']->ajouterProduit($produit, $quantite);
       echo "Produit ajouté au panier.";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
        <div class="header-container">
            <div class="logo" onclick="navigateTo('home')">💚 PharmaEnLigne</div>
            <nav>
                <ul>
                    <li><a id="nav-home" onclick="navigateTo('home')" class="active" href="index.php">Accueil</a></li>
                    <li><a id="nav-products" onclick="navigateTo('products')" href="produits.php">Nos Produits</a></li>
                    <li><a id="nav-contact" onclick="navigateTo('contact')" href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <a id="nav-login" onclick="navigateTo('login')" style="cursor:pointer;" href="connexion.php">👤 Connexion</a>
                
            </div>
        </div>
    </header>



    <img class="image"src="<?php echo $produit->image; ?>" alt="<?php echo $produit->nom;?>"
<h2 class="texte"><?= $produit->nom; ?></h2>
<p><?= $produit->description; ?></p>
<p>Prix : <?= $produit->prix; ?> Ar</p>

<footer class="bg-success text-white text-center">
                <div class="container">
                <p>&copy; Mitia Kanto MAHATANDRINA</p>
                <p>
                <a href="contact.php" class="text-white">Nous contacter</a> | 
                </p>
                </div>
        </footer>
</body>
</html>