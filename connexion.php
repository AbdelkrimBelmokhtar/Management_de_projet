<?php
session_start();


$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "sparktech"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form submitted, collect email and password from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    print $user;
    print $pass;
    // To protect from MySQL injection
    $user = stripslashes($user);
    $pass = stripslashes($pass);
    $user = $conn->real_escape_string($user);
    $pass = $conn->real_escape_string($pass);

    // Query to fetch user information
    $sql = "SELECT * FROM utilisateur WHERE nom_utilisateur='$user'";
    $result = $conn->query($sql);
    print $result->num_rows;

    if ($result->num_rows == 1) {
        // Fetching user details
        $row = $result->fetch_assoc();
        // Verifying the password
        print $row['mdp_utilisateur'];
        if (password_verify($pass, $row['mdp_utilisateur'])) {
            // Storing username in session variable
            $_SESSION['username'] = $user;
            print "HERE" ;
            header("Location: index.html"); // Redirect to welcome page
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "No user found with that username.";
    }
}
?>


<?php
$conn->close();
?>
