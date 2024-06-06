<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Iphone 15</title>
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><h1>Sparkshop</h1></a>
        </div>
        <ul class="menu">
            <li><a href="index.php" class="active">Accueil</a></li>
            <li><a href="Tablettes.php">Tablettes</a></li>
            <li><a href="Telephone.php">Téléphones</a></li>
            <li><a href="Ordinateurs.php">Ordinateurs</a></li>
            <li><a href="Consoles.php">Consoles</a></li>
            <li><a href="login.php" class="fa-solid fa-user"></a></li>
            <li><a href="panier.php" class="fa-solid fa-cart-shopping"></a></li>
        </ul>
    </nav>

    <section class="content">
        <div class="img">
            <img src="Images_Téléphone/Apple Iphone 15 Pro 128 Go Titane Bleu.jpg" alt="Apple iPhone 15 Pro">
        </div>
        <div class="details">
            <h2>Apple iPhone 15 Pro 128 Go Titane Bleu</h2>
            <p>
                Découvrez le nouvel Apple iPhone 15 Pro avec un stockage de 128 Go, une finition en titane bleu,
                et des performances incroyables. Profitez d'une qualité d'image exceptionnelle avec son écran
                Super Retina XDR et capturez vos moments précieux avec son système de caméra avancé.
            </p>
            <p class="price">Prix : 1200€</p>
            <form action="panier.php" method="post">
                <input type="hidden" name="product_name" value="Apple iPhone 15 Pro 128 Go">
                <input type="hidden" name="product_price" value="1200">
                <button type="submit" name="add_to_cart" class="buy-btn">Acheter</button>
            </form>
        </div>
    </section>

</body>

<footer>
    <p>Copyrights <a href="#">Sparkshop</a></p>
</footer>
</html>