<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaEnLigne - Votre Pharmacie Éco-Responsable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="header-container">
            <div class="logo" onclick="navigateTo('home')" href="index.php">💚 PharmaEnLigne</div>
            <nav>
                <ul>
                    <li><a id="nav-home" onclick="navigateTo('home')" href="index.php" class="active">Accueil</a></li>
                    <li><a id="nav-products" onclick="navigateTo('products')" href="produits.php">Nos Produits</a></li>
                    <li><a id="nav-contact" onclick="navigateTo('contact')" href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <a id="nav-login" onclick="navigateTo('login')" style="cursor:pointer;" href="connexion.php">👤 Connexion</a>
                
            </div>
        </div>
    </header>

    <main>

        <div id="page-home" class="page active-page">
            <div class="hero">
                <h1>Votre santé, notre priorité absolue</h1>
                <p>Commandez vos produits de parapharmacie et médicaments sans ordonnance en toute sécurité. Conseils d'experts inclus.</p>
                <br>
                <button class="btn" onclick="navigateTo('products')">Découvrir la boutique</button>
            </div>

            <div class="home-categories">
                <h2 class="section-title">Parcourir par catégories</h2>
                <div class="grid-categories">
                    <div class="category-card" onclick="filterCategory('calmant')">
                        <span class="icon">💊</span>
                        <h3>Calmants</h3>
                        <p>Douleurs et fièvres</p>
                    </div>
                    <div class="category-card" onclick="filterCategory('fortifiant')">
                        <span class="icon">🍏</span>
                        <h3>Fortifiants</h3>
                        <p>Vitamines et Énergie</p>
                    </div>
                    <div class="category-card" onclick="filterCategory('creme')">
                        <span class="icon">🧴</span>
                        <h3>Crèmes</h3>
                        <p>Soins et Dermatologie</p>
                    </div>
                    <div class="category-card" onclick="filterCategory('sirop')">
                        <span class="icon">🧪</span>
                        <h3>Sirops</h3>
                        <p>Toux et Voies respiratoires</p>
                    </div>
                </div>
            </div>
        </div>



        <footer class="bg-success text-white text-center ">
                <div class="container">
                <p>&copy; Mitia Kanto MAHATANDRINA</p>
                <p>
                <a href="contact.php" class="text-white">Nous contacter</a> | 
                </p>
                </div>
        </footer>