<!DOCTYPE html>

<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Sparkshop i pad </title>

</head>

<body>

    <nav class ="navbar">
        <div class="logo"> <a href="index.php"> <h1> Sparkshop </h1> </a>  </div>
            <ul class="menu">
                
                <li> <a href = "index.php"> Accueil </a>   </li>
                <li> <a href="Consoles.php">Consoles</a> </li>
                <li> <a href="Tablettes.php">Tablettes</a> </li>
                <li> <a href="Telephone.php">Téléphones</a> </li>
                <li> <a href="Ordinateurs.php">Ordinateurs</a> </li>
                <?php if (isset($_SESSION['user'])): ?>
                <li> <a href="profil.php" class="fa-solid fa-user"> Profil</a> </li>
                <li> <a href="logout.php" class="fa-solid fa-sign-out-alt"> Déconnexion</a> </li>
            <?php else: ?> 
                <li> <a href="login.html" class="fa-solid fa-user"> Connexion</a> </li>
            <?php endif; ?>
                <li> <a href = "login.html" class = "fa-solid fa-user"> </a> </li>
                <li> <a href = "Payement.html" class="fa-solid fa-cart-shopping"> </a> </li>


            </ul>
    </nav>

    <section class = "Tablettes">

        
        <!-- <p> Voici les Tablettes que nous vendons </p> -->

    </section>

    <section class="section_produits">

        
        <div class="produits">
        
            <div class="carte">
                
                <div class="img"> <img src="Images_Tablettes/apple-tablette-ipad-pro-256gb-11.jpg"> </div>
                <div class="decs">   ipad-pro-256gb-11    </div>
                <div class="titre">  tablette apple pro 11 </div>
                <div class="box"> 
                    <div class="prix"> 699,99 € </div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
                    
                <div class="img"> <img src="Images_Tablettes/tablette-android-tab-m10.jpg"> </div>
                <div class="decs">  tablette-android-tab-m10  </div>
                <div class="titre"> tablette android m10  </div>
                <div class="box"> 
                    <div class="prix"> 165,99 € </div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
                
                <div class="img"> <img src="Images_Tablettes/tablette-huawei-mediapadT3.jpg"> </div>
                <div class="decs">  tablette-huawei-mediapadT3 </div>
                <div class="titre">  tablette huawei T3 </div>
                <div class="box"> 
                    <div class="prix"> 479,99 €</div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
             
                <div class="img"> <img src="Images_Tablettes/Galaxy-tab-A8.jpg"> </div>
                <div class="decs">  Galaxy-tab-A8 </div>
                <div class="titre"> tablette Galaxy A8 </div>
                <div class="box"> 
                    <div class="prix"> 149,99 € </div>
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