<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparktech";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user_id = $_SESSION['user']['id'];
    $stmt = $conn->prepare("SELECT * FROM commandes WHERE user_id = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monsterrat&family=Roboto+condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profil Utilisateur</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo"><a href="index.php"><h1>Sparkshop</h1></a></div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Consoles.php">Consoles</a></li>
            <li><a href="Tablettes.php">Tablettes</a></li>
            <li><a href="Telephone.php">Téléphones</a></li>
            <li><a href="Ordinateurs.php">Ordinateurs</a></li>
            <li><a href="profil.php" class="fa-solid fa-user"> Profil</a></li>
            <li><a href="logout.php" class="fa-solid fa-sign-out-alt"> Déconnexion</a></li>
            <li><a href="panier.php" class="fa-solid fa-cart-shopping"></a></li>
        </ul>
    </nav>

    <section class="profile-content">
        <h1>Profil Utilisateur</h1>
        <p><strong>Nom d'utilisateur:</strong> <?php echo $_SESSION['user']['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION['user']['email']; ?></p>

        <h2>Vos Commandes</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Commande</th>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commandes as $commande): ?>
                    <tr>
                        <td><?php echo $commande['id']; ?></td>
                        <td><?php echo $commande['produit']; ?></td>
                        <td><?php echo $commande['prix']; ?>€</td>
                        <td><?php echo $commande['date_commande']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>