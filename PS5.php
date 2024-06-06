<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PS5</title>
</head>

<body>

    <nav class="navbar">
        <div class="logo"> <a href="index.php"> <h1> Sparkshop </h1> </a> </div>
        <ul class="menu">
            <li> <a href="index.php" class="active"> Accueil </a> </li>
            <li> <a href="Tablettes.php"> Tablettes </a> </li>
            <li> <a href="Telephone.php"> Téléphones </a> </li>
            <li> <a href="Ordinateurs.php"> Ordinateurs </a> </li>
            <li> <a href="Consoles.php"> Consoles </a> </li>
            <li> <a href="login.php" class="fa-solid fa-user"> </a> </li>
            <li> <a href="panier.php" class="fa-solid fa-cart-shopping"> </a> </li>
        </ul>
    </nav>

    <section class="content">
        <div class="product-details">
            <div class="img"> <img src="Images_Consoles/PS5.JPG" alt="PS5"> </div>
            <div class="product-info">
                <h2>PlayStation 5 (PS5)</h2>
                <p>La PlayStation 5 (PS5) est la dernière console de jeu vidéo de Sony, offrant des performances de jeu ultimes avec des graphismes haute résolution et un temps de chargement ultra-rapide. Plongez dans une expérience de jeu immersive avec la PS5.</p>
                <p class="price">Prix : 499,99 €</p>
                <form action="panier.php" method="post">
                    <input type="hidden" name="product_name" value="PlayStation 5 (PS5)">
                    <input type="hidden" name="product_price" value="499.99">
                    <button type="submit" name="add_to_cart" class="buy-btn">Acheter</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyrights <a href="#">Sparkshop</a></p>
    </footer>
</body>

</html>