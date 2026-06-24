<?php
require_once "Class\Produit.php";
require_once "Class\Categorie.php";

session_start();

if(!isset($_SESSION['panier'])){
    $_SESSION['panier']=[];
}
if(isset($_POST['quantite'])){
    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
    if($quantite > 0){
        $_SESSION['panier'][]=
            ['nom'=>$nom,
            'prix'=>$prix,
            'quantite'=>$quantite,
            'Total'=>$prix*$quantite];
    }
}
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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Produits</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo" onclick="navigateTo('home')" >💚 PharmaEnLigne</div>
            <nav>
                <ul>
                    <li><a id="nav-home" onclick="navigateTo('home')" class="active"href="index.php">Accueil</a></li>
                    <li><a id="nav-products" onclick="navigateTo('products')" href="produits.php">Nos Produits</a></li>
                    <li><a id="nav-contact" onclick="navigateTo('contact')" href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <a id="nav-login" onclick="navigateTo('login')" style="cursor:pointer;" href="connexion.php">👤 Connexion</a>
                
            </div>
        </div>
    </header>
</body>
</html>

<?php foreach($produits as $p): ?>
    <p>
        <div class="grid">
          <div class="fond">
            <img class="image"src="<?php echo $p->image; ?>" alt="<?php echo $p->nom;?>">
        <?= $p->nom; ?>: <?= $p->prix; ?> Ar 
        <form method="POST">

            <input type="text" name='nom' value= <?php echo $p->nom;?>>
            <input type="hidden" name='prix' value= <?php echo $p->prix;?>>
            <input type="number" name="quantite">
            <button class="btn btn-dark">Ajouter au panier</button>
            
        </form>
        <a href="detail.php?id=<?= $p->id; ?>" class="btn btn-outline-primary">Voir détail</a>

        </div>

          </div>
            
        
    </p>
    <style>
                      table { border-collapse: collapse; width: 70%; margin: auto; }
                      th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
                      th { background-color: #f2f2f2; }
                      h2 { text-align: center; }
              </style>

<?php endforeach; ?>


<table border=3>
<tr>
    <th>Produit</th>
    <th>Prix</th>
    <th>Quantite</th>
    <th>Total</th>

</tr>
    <?php
    foreach($_SESSION['panier'] as $panier=>$p)
    { ?>
        <tr>
            <td><?php  echo $p['nom']?></td>
            <td><?php  echo $p['prix']?>Ar</td>
            <td><?php  echo $p['quantite']?></td>
            <td colspan="4"><?php  echo $p['Total']?>Ar</td>
        </tr>
    <?php }?>
</table>
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
