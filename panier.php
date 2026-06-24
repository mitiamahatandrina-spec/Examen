
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>
<body>
    <div id="page-detail" class="page">
            <div class="detail-container" id="product-detail-content"></div>
        </div>

        <div id="page-cart" class="page">
            <h2 class="section-title">Votre Panier</h2>
            <div class="cart-wrapper">
                <div>
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="cart-table-body"></tbody>
                    </table>
                </div>
                <div class="cart-summary">
                    <h3>Résumé</h3>
                    <br>
                    <div class="summary-row">
                        <span>Sous-total</span>
                        <span id="cart-subtotal">0.00 €</span>
                    </div>
                    <div class="summary-row">
                        <span>Livraison</span>
                        <span>4.90 €</span>
                    </div>
                    <div class="summary-row summary-total">
                        <span>Total TTC</span>
                        <span id="cart-total">0.00 €</span>
                    </div>
                    <br>
                    <button class="btn" style="width: 100%;" onclick="alert('Commande validée ! (Simulation)')">Passer la commande</button>
                </div>
            </div>
        </div>
</body>
</html>




