<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "sparktech";

try {
    // Créer une connexion avec PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if (isset($_POST['inscription'])) {
        $user = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];
        $confirm_pass = $_POST['confirm_password'];

        // Vérifier si tous les champs sont remplis
        if (empty($user) || empty($email) || empty($phone) || empty($pass) || empty($confirm_pass)) {
            die("Veuillez remplir tous les champs.");
        }

        // Vérifier si les mots de passe correspondent
        if ($pass !== $confirm_pass) {
            die("Les mots de passe ne correspondent pas.");
        }

        // Hacher le mot de passe
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Préparer la requête d'insertion
        $stmt = $conn->prepare("INSERT INTO utilisateur (nom_utilisateur, mdp_utilisateur, mail_utilisateur, adresse_utilisateur) VALUES (:username, :password, :email, :phone)");

        // Lier les paramètres
        $stmt->bindParam(':username', $user);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "Inscription réussie. <a href='login.html'>Connectez-vous</a>";
        } else {
            echo "Erreur lors de l'inscription.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>