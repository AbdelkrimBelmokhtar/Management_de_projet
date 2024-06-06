<?php
session_start();

// Ajout au panier
if (isset($_POST['add_to_cart'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = array(
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price']
    );
    echo '<div class="item-added">' . $_POST['product_name'] . ' a été ajouté au panier.</div>';
}

// Suppression du panier
if (isset($_POST['remove_from_cart'])) {
    if (($key = array_search($_POST['product_name'], array_column($_SESSION['cart'], 'name'))) !== false) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Réindexer le tableau
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Sparkshop</title>
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="header">
        <div>
            <a href="index.php">Accueil</a>
            <a href="Consoles.php">Consoles</a>
            <a href="Tablettes.php">Tablettes</a>
            <a href="Telephone.php">Téléphones</a>
            <a href="Ordinateurs.php">Ordinateurs</a>
        </div>
        <div>
            <a href="#">Mon Compte</a>
            <a href="#">Panier</a>
        </div>
    </div>
    <div class="cart-page">
        <h1 class="cart-title">Votre Panier</h1>
        <table class="cart-items">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        echo '<tr>';
                        echo '<td>' . $item['name'] . '</td>';
                        echo '<td>' . $item['price'] . '€</td>';
                        echo '<td>1</td>';
                        echo '<td>' . $item['price'] . '€</td>';
                        echo '<td>
                                <form action="panier.php" method="post">
                                    <input type="hidden" name="product_name" value="' . $item['name'] . '">
                                    <button type="submit" name="remove_from_cart">Supprimer</button>
                                </form>
                              </td>';
                        echo '</tr>';
                        $total += $item['price'];
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="cart-total">
            <h3>Total: <?php echo $total; ?>€</h3>
            <a href="#" class="checkout-button">Passer à la caisse</a>
        </div>
    </div>
</body>
</html>