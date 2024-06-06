<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sparkshop iPad</title>
</head>

<body>

    <nav class="navbar">
        <div class="logo"> <a href="index.php"> <h1> Sparkshop </h1> </a> </div>
        <ul class="menu">
            <li> <a href="index.php"> Accueil </a> </li>
            <li> <a href="Consoles.php"> Consoles </a> </li>
            <li> <a href="Tablettes.php" class="active"> Tablettes </a> </li>
            <li> <a href="Telephone.php"> Téléphones </a> </li>
            <li> <a href="Ordinateurs.php"> Ordinateurs </a> </li>
            <?php if (isset($_SESSION['user'])): ?>
                <li> <a href="profil.php" class="fa-solid fa-user"> Profil</a> </li>
                <li> <a href="logout.php" class="fa-solid fa-sign-out-alt"> Déconnexion</a> </li>
            <?php else: ?> 
                <li> <a href="login.php" class="fa-solid fa-user"> Connexion</a> </li>
            <?php endif; ?>
            <li> <a href="panier.php" class="fa-solid fa-cart-shopping"> Panier</a> </li>
        </ul>
    </nav>

    <section class="Tablettes">

        <!-- Section des tablettes -->

    </section>

    <section class="section_produits">

        <div class="produits">

            <div class="carte">
                <a href="ipad.php">
                    <div class="img"> <img src="Images_Tablettes/apple-tablette-ipad-pro-256gb-11.jpg" alt="iPad Pro 11"> </div>
                    <div class="decs"> iPad Pro 11 </div>
                    <div class="titre"> Tablette Apple Pro 11 </div>
                    <div class="box">
                        <div class="prix"> 699,99 € </div>
                        <button class="achat"> Acheter </button>
                    </div>
                </a>
            </div>

            <div class="carte">
                <a href="android.php">
                    <div class="img"> <img src="Images_Tablettes/tablette-android-tab-m10.jpg" alt="Tablette Android Tab M10"> </div>
                    <div class="decs"> Tablette Android Tab M10 </div>
                    <div class="titre"> Tablette Android M10 </div>
                    <div class="box">
                        <div class="prix"> 165,99 € </div>
                        <button class="achat"> Acheter </button>
                    </div>
                </a>
            </div>

            <div class="carte">
                <a href="tablette_huawei.php">
                    <div class="img"> <img src="Images_Tablettes/tablette-huawei-mediapadT3.jpg" alt="Tablette Huawei MediaPad T3"> </div>
                    <div class="decs"> Tablette Huawei MediaPad T3 </div>
                    <div class="titre"> Tablette Huawei T3 </div>
                    <div class="box">
                        <div class="prix"> 479,99 €</div>
                        <button class="achat"> Acheter </button>
                    </div>
                </a>
            </div>

            <div class="carte">
                <a href="Galaxy.php">
                    <div class="img"> <img src="Images_Tablettes/Galaxy-tab-A8.jpg" alt="Tablette Galaxy A8"> </div>
                    <div class="decs"> Galaxy Tab A8 </div>
                    <div class="titre"> Tablette Galaxy A8 </div>
                    <div class="box">
                        <div class="prix"> 149,99 € </div>
                        <button class="achat"> Acheter </button>
                    </div>
                </a>
            </div>

        </div>

    </section>

    <footer>
        <p> Copyrights <a href="#"> Sparkshop </a></p>
    </footer>

</body>

</html>