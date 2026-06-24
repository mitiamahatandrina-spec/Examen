<?php
session_start();
include "Class\Utilisateur.php";

$admin = new Utilisateur("client", "client123");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($admin->verifierConnexion($_POST["pseudo"], $_POST["motdepasse"])) {
        $_SESSION["connecte"] = true;
        header("Location:confirmation.php");
    } else {
        $erreur = "Identifiants incorrects.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="style.css">

</head>



<header>
        <div class="header-container">
            <div class="logo" onclick="navigateTo('home')" >💚 PharmaEnLigne</div>
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




<body class="container mt-4">
  <h2>Connexion</h2>
  <?php if(isset($erreur)) echo "<div class='alert alert-danger'>$erreur</div>"; ?>
  <form method="post" class="mt-3">
    <div class="mb-3">
      <label class="form-label">Pseudo</label>
      <input type="text" name="pseudo" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Mot de passe</label>
      <input type="password" name="motdepasse" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Connexion</button>
  </form>


  
</body>
</html>
