<?php
$dest = 'mysql:host=localhost;dbname=guide_mpi_db';
$user = 'root';
$pass = '';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
$cnx = null;
if(empty($_POST)){
    header('Location: SignIn.php');
    exit();
}

try {
    $cnx = new PDO($dest, $user, $pass, $option);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("You are connected to the database."."<br>");
} catch (PDOException $e) {
    echo ("Failed to connect to database" ."<br>". $e->getMessage());
}
// Start the session
session_start();

// Get the email and password submitted through the HTML form
$email = $_POST['email'];
$password = $_POST['password'];
// Prepare the SQL query to check if the email and password match
$sql = "SELECT NumInscri FROM login WHERE email='$email' AND password='$password'";
$result = $cnx->query($sql);

// Check if the query returned a row
if ($result !== false) {
    // The email and password match, so set the session variable and redirect to the homepage
    $_SESSION['id'] = (int)$result->fetch()['NumInscri'];
    header('Location: home.php');
    exit();
} else {
    // The email and password don't match, so display an error message
    echo "Veuillez vérifier vos coordonnées.";
}
?>
