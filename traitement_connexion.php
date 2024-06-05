<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparktech";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['connexion'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Vérifier les champs
        if (empty($email) || empty($password)) {
            die("Veuillez remplir tous les champs.");
        }

        // Rechercher l'utilisateur dans la base de données
        $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE mail_utilisateur = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['mdp_utilisateur'])) {
            // Enregistrer les informations de l'utilisateur dans la session
            $_SESSION['user'] = [
                'id' => $user['id_utilisateur'],
                'username' => $user['nom_utilisateur'],
                'email' => $user['mail_utilisateur']
            ];
            header("Location: index.php");
            exit;
        } else {
            die("Email ou mot de passe incorrect.");
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
4. Page de profil (profil.php)
Créer une page de profil pour afficher les informations de l'utilisateur connecté.

php
Copier le code
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Profil</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Profil Utilisateur</h1>
        </div>
    </header>

    <div class="container">
        <div class="form-container">
            <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']['username']); ?></h2>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
            <form action="logout.php" method="POST">
                <div class="form-group">
                    <button type="submit">Déconnexion</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>