<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Sparkshop </title>

</head>

<body>

    <nav class ="navbar">

        <div class="logo"> <a href="index.php"><h1> Sparkshop </h1> </a> </div>
            
            <ul class="menu">
                
                <li> <a href = "index.php"> Accueil </a> </li>
                <li> <a href="Consoles.php">Consoles</a> </li>
                <li> <a href="Tablettes.php">Tablettes</a> </li>
                <li> <a href="Telephone.php">Téléphones</a> </li>
                <li> <a href="Ordinateurs.php">Ordinateurs</a> </li>
                <?php if (isset($_SESSION['user'])): ?>
                <li> <a href="profil.php" class="fa-solid fa-user"> Profil</a> </li>
                <li> <a href="logout.php" class="fa-solid fa-sign-out-alt"> Déconnexion</a> </li>
            <?php else: ?> 
                <li> <a href="login.php" class="fa-solid fa-user"> Connexion</a> </li>
            <?php endif; ?>
                <li> <a href = "login.php" class = "fa-solid fa-user"> </a> </li>
                <li> <a href = "Panier.php" class="fa-solid fa-cart-shopping"> </a> </li>

            </ul>
    </nav>

    <section class = "Ordinateur">

   
        <!-- <p> Voici les Ordinateurs que nous vendons </p> -->

    </section>

    
    <h1 class="produits_texte"> Nos best-sellers </h1>
    
    <section class="section_produits">
       
        <div class="produits">

            <div class="carte">
            <a href="Asus14.php">    
                <div class="img"> <img src="Images_PC/img1.jpg"> </div>
                <div class="decs">  Intel Celeron    </div>
                <div class="titre">  Asus 14 E410MANS-BV1315WS   </div>
                <div class="box"> 
                    <div class="prix"> 233,25€</div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>
        
            <div class="carte">
            <a href="Asus_Gaming.php"> 
                <div class="img"> <img src="Images_PC/img2.jpg"> </div>
                <div class="decs">  TUF Gaming   </div>
                <div class="titre"> PC Portable Gamer ASUS TUF Gaming  </div>
                <div class="box"> 
                    <div class="prix"> 500€</div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
            <a href="acer.php"> 
                <div class="img"> <img src="Images_PC/img3.jpg"> </div>
                <div class="decs">  Acer </div>
                <div class="titre"> Acer Aspire 3 A315-58  </div>
                <div class="box"> 
                    <div class="prix"> 499€</div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
            <a href="lenovo.php"> 
                <div class="img"> <img src="Images_PC/img5.jpg"> </div>
                <div class="decs"> Lenovo </div>
                <div class="titre"> Lenovo V110-15ISK </div>
                <div class="box"> 
                    <div class="prix"> 199,99€ </div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

        </div>    

    </section>
    
</body>

<footer> 
    <p> Copyrights <a href="#"> Sparkshop </a></p>
</footer>

</html>