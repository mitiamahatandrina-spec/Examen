<?php
session_start();

// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION['connecte']) || $_SESSION['connecte'] !== true) {
    // Redirection vers la page de connexion si non connecté
    header("Location:connexion.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Validation de commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .box { border: 2px solid #4CAF50; padding: 20px; display: inline-block; background: #f9fff9; }
        h2 { color: #4CAF50; }
    </style>
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


    <div class="box">
        <h2>✅ Commande validée</h2>
        <p>Votre commande a été enregistrée avec succès.</p>
        <p>Merci pour votre confiance !</p>
        <a href="index.php">Retour à l'accueil</a>
    </div>

    <footer class=" text-white text-center">
                <div class=" container">
                <p>&copy; Mitia Kanto MAHATANDRINA</p>
                <p>
                <a href="contact.php" class="text-white">Merciiiiiii!!!!💚</a> | 
                </p>
                </div>
        </footer>
</body>
</html>
