<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "sparktech";

try {
    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        throw new Exception("Échec de la connexion : " . $conn->connect_error);
    }

    echo "Connexion réussie à la base de données";

    // Fermer la connexion
    $conn->close();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>