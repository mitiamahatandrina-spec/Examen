
    <?php
session_start();
require_once 'Class\Produit.php';
require_once 'Class\Panier.php';
include 'produits.php';

$panier = $_SESSION['panier'] ?? new Panier();


if(isset($_GET['supprimer'])) {
    $id = intval($_GET['supprimer']);
    unset($panier->articles[$id]); 
    $_SESSION['panier'] = $panier;
}
?>
<!DOCTYPE html>
<html>
<head><title>Panier</title></head>
<body>
<h2>Votre Panier</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Produit</th><th>Prix</th><th>Quantité</th><th>Sous-total</th><th>Action</th>
    </tr>
    <?php foreach($panier->articles as $id => $article): ?>
    <tr>
        <td><?= $article['produit']->id; ?></td>
        <td><?= $article['produit']->nom; ?></td>
        <td><?= $article['produit']->prix; ?> Ar</td>
        <td><?= $article['quantite']; ?></td>
        <td><?= $article['produit']->prix * $article['quantite']; ?> Ar</td>
        <td><a href="produits.php?supprimer=<?= $id; ?>">Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="4"><strong>Total</strong></td>
        <td colspan="2"><strong><?= $panier->calculerTotal(); ?> Ar</strong></td>
    </tr>
</table>
</body>
</html>


