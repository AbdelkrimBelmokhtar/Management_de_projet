<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sparkshop</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo"> <a href="index.php"><h1>Sparkshop</h1></a> </div>
        <ul class="menu">
            <li> <a href="index.php" class="active">Accueil</a> </li>
            <li> <a href="Consoles.html">Consoles</a> </li>
            <li> <a href="Tablettes.html">Tablettes</a> </li>
            <li> <a href="Telephone.html">Téléphones</a> </li>
            <li> <a href="Ordinateurs.html">Ordinateurs</a> </li>
            <?php if (isset($_SESSION['user'])): ?>
                <li> <a href="profil.php" class="fa-solid fa-user"> Profil</a> </li>
                <li> <a href="logout.php" class="fa-solid fa-sign-out-alt"> Déconnexion</a> </li>
            <?php else: ?> 
                <li> <a href="login.html" class="fa-solid fa-user"> Connexion</a> </li>
            <?php endif; ?>
            <li> <a href="Payement.html" class="fa-solid fa-cart-shopping"> </a> </li>
        </ul>
    </nav>

    <section class="content">
        <h1>Nouveautés</h1>
        <p>Voici les nouvelles technologies que nous vous proposons</p>
        <button>DÉCOUVRIR</button>
    </section>
    
    <h1 class="produits_texte">Nos best-sellers</h1>
    
    <section class="section_produits">
        <div class="produits">
            <div class="carte">
                <div class="img"> <img src="Images_PC/img1.jpg"> </div>
                <div class="decs">Intel Celeron</div>
                <div class="titre">Asus 14 E410MANS-BV1315WS</div>
                <div class="box"> 
                    <div class="prix">233,25€</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>
            <div class="carte">
                <div class="img"> <img src="Images_Consoles/PS5.JPG"> </div>
                <div class="decs">PS5</div>
                <div class="titre">Playstation 5</div>
                <div class="box"> 
                    <div class="prix">500€</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>
            <div class="carte">
                <div class="img"> <img src="Images_Tablettes/apple-tablette-ipad-pro-256gb-11.jpg"> </div>
                <div class="decs">Tablette Apple</div>
                <div class="titre">Tablette iPad Pro 256GB 11</div>
                <div class="box"> 
                    <div class="prix">379€</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>
            <div class="carte">
                <div class="img"> <img src="Images_Téléphone/Apple Iphone 15 Pro 128 Go Titane Bleu.jpg"> </div>
                <div class="decs">Iphone 15</div>
                <div class="titre">Iphone 15 Pro 128 Go Titane Bleu</div>
                <div class="box"> 
                    <div class="prix">1109€</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>
        </div>
    </section>
</body>

<footer> 
    <p> Copyrights <a href="#">Sparkshop</a></p>
</footer>
</html>