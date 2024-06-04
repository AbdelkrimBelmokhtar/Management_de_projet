<?php

<<<<<<< HEAD
=======
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


>>>>>>> 2d59c41b69f407fbd2fcedf1b75bffdfad3bdbef

$servername = "localhost";
$username = ""; 
$password = "";
$dbname = "sparktech"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

<<<<<<< HEAD
=======



>>>>>>> 2d59c41b69f407fbd2fcedf1b75bffdfad3bdbef
$user = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirm_password'];

if (empty($user) || empty($email) || empty($phone) || empty($pass) || empty($confirm_pass)) {
    die("Veuillez remplir tous les champs.");
}

if ($pass !== $confirm_pass) {
    die("Les mots de passe ne correspondent pas.");
}

<<<<<<< HEAD
=======

>>>>>>> 2d59c41b69f407fbd2fcedf1b75bffdfad3bdbef
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO utilisateur (nom_utilisateur, mdp_utilisateur, mail_utilisateur, adresse_utilisateur) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $user, $hashed_password, $email, $phone);

if ($stmt->execute()) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
<<<<<<< HEAD
=======


<!-- $conn = new mysqli($servername, $username, $password, $dbname); -->
<!--  -->
<!-- if ($conn->connect_error) { -->
    <!-- die("Échec de la connexion : " . $conn->connect_error); -->
<!-- } -->
<!--  -->
<!-- $user = $_POST['username']; -->
<!-- $email = $_POST['email']; -->
<!-- $phone = $_POST['phone']; -->
<!-- $pass = $_POST['password']; -->
<!-- $confirm_pass = $_POST['confirm_password']; -->
<!--  -->
<!-- if (empty($user) || empty($email) || empty($phone) || empty($pass) || empty($confirm_pass)) { -->
    <!-- die("Veuillez remplir tous les champs."); -->
<!-- } -->
<!--  -->
<!-- if ($pass !== $confirm_pass) { -->
    <!-- die("Les mots de passe ne correspondent pas."); -->
<!-- } -->
<!--  -->
<!-- $hashed_password = password_hash($pass, PASSWORD_DEFAULT); -->
<!--  -->
<!-- $stmt = $conn->prepare("INSERT INTO utilisateur (nom_utilisateur, mdp_utilisateur, mail_utilisateur, adresse_utilisateur) VALUES (?, ?, ?, ?)"); -->
<!-- $stmt->bind_param("ssss", $user, $hashed_password, $email, $phone); -->
<!--  -->
<!-- if ($stmt->execute()) { -->
    <!-- echo "Nouvel enregistrement créé avec succès"; -->
<!-- } else { -->
    <!-- echo "Erreur : " . $stmt->error; -->
<!-- } -->
<!--  -->
<!-- $stmt->close(); -->
<!-- $conn->close(); -->
<!-- ?> -->
>>>>>>> 2d59c41b69f407fbd2fcedf1b75bffdfad3bdbef
