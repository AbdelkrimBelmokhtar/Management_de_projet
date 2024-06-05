<!DOCTYPE html>

<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Sparkshop Selfphones </title>

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

    <section class = "Téléphones">

        <!-- <p> Voici les Consoles que nous vendons </p> -->

    </section>

    <section class="section_produits">

        
        <div class="produits">
        
            <div class="carte">
                
                <div class="img"> <img src="Images_Téléphone/Apple Iphone 15 Pro 128 Go Titane Bleu.jpg"> </div>
                <div class="decs">  Iphone 15   </div>
                <div class="titre"> Iphone-15-Pro-128 Go-Titane-Bleu </div>
                <div class="box"> 
                    <div class="prix"> 1109€ </div>
                    <button class="achat"> Acheter </button>
                </div>
            
            
            </div>

            <div class="carte">
                    
                <div class="img"> <img src="Images_Téléphone/Samsung-Galaxy-S24.jpg"> </div>
                <div class="decs">  Samsung_Galaxy_S24  </div>
                <div class="titre">  Samsung Galaxy 24  </div>
                <div class="box"> 
                    <div class="prix"> 749,99 € </div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
                
                <div class="img"> <img src="Images_Téléphone/Xiaomi-Redmi-Note-13-4G.jpg"> </div>
                <div class="decs"> Xiaomi_Redmi_Note_13_4G </div>
                <div class="titre"> Redmi Note 13 </div>
                <div class="box"> 
                    <div class="prix"> 177,99 €</div>
                    <button class="achat"> Acheter </button>
                </div>
            
            </div>

            <div class="carte">
             
                <div class="img"> <img src="Images_Téléphone/huawei-nova-12i-1.jpg"> </div>
                <div class="decs">  huawei_nova_12i_1 </div>
                <div class="titre"> huawei nova 12i 1 </div>
                <div class="box"> 
                    <div class="prix"> 279,99 € </div>
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