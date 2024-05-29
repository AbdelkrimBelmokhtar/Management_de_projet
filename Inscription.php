<?php


$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "sparktech"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

print($_POST['username']);
print($_POST['email']);
print($_POST['password']);

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
print 'HERE';
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);
print($hashed_password);
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
