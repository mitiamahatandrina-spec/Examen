<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
  <meta charset="UTF-8">
  <title>Contact </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <div class="header-container">
            <div class="logo" onclick="navigateTo('home')">💚 PharmaEnLigne</div>
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


  <!-- SECTION CONTACT -->
  <main class="container my-5">
    <h2 class="mb-4 text-center">Contactez-nous</h2>
    <div class="row">
      
      <!-- Infos entreprise -->
      <div class="col-md-5">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title">PHARMACIE EN LIGNE</h5>
            <p><strong>Adresse :</strong> Rue des Écoles, Antananarivo</p>
            <p><strong>Téléphone :</strong> +261 34 12 345 67</p>
            <p><strong>Email :</strong> contact@medc.mg</p>
            <p><strong>Horaires :</strong> Lundi - Vendredi : 8h - 17h</p>
          </div>
        </div>
      </div>

      <!-- Formulaire contact -->
      <div class="col-md-7">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Envoyez-nous un message</h5>
            <form action="send_contact.php" method="post">
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
              </div>
              <button type="submit" class="btn btn-secondary btn-sm">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
<footer class="bg-success text-white text-center">
                <div class="container">
                <p>&copy; Mitia Kanto MAHATANDRINA</p>
                <p>
                <a href="contact.php" class="text-white">Nous contacter</a> | 
                </p>
                </div>
        </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</body>
</html>


