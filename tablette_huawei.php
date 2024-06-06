<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Huawei MediaPad T3</title>
</head>

<body>

    <nav class="navbar">
        <div class="logo"> <a href="index.php"> <h1> Sparkshop </h1> </a> </div>
        <ul class="menu">
            <li> <a href="index.html" class="active"> Accueil </a> </li>
            <li> <a href="Tablettes.html"> Tablettes </a> </li>
            <li> <a href="Telephone.html"> Téléphones </a> </li>
            <li> <a href="Ordinateurs.html"> Ordinateurs </a> </li>
            <li> <a href="Consoles.html"> Consoles </a> </li>
            <li> <a href="login.html" class="fa-solid fa-user"> </a> </li>
            <li> <a href="Panier.html" class="fa-solid fa-cart-shopping"> </a> </li>
        </ul>
    </nav>

    <section class="content">
        <div class="img"> <img src="Images_Tablettes/tablette-huawei-mediapadT3.jpg" alt="Huawei MediaPad T3"> </div>
        <div class="product-details">
            <div class="product-info">
                <h2>Huawei MediaPad T3</h2>
                <p>La tablette Huawei MediaPad T3 offre une expérience multimédia exceptionnelle avec son écran HD de 9,6 pouces. Elle est idéale pour la navigation sur Internet, le visionnage de vidéos et bien plus encore.</p>
                <p class="price">Prix : 179,99 €</p>
                <form action="Panier.html" method="post">
                    <input type="hidden" name="product_name" value="Huawei MediaPad T3">
                    <input type="hidden" name="product_price" value="179.99">
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