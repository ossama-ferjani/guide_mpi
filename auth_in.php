<?php

$dest = 'mysql:host=localhost;dbname=guide_mpi_db';
$user = 'root';
$pass = '';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
//$cnx = null;

try {
    $cnx = new PDO($dest, $user, $pass, $option);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("You are connected to the database."."<br>");
} catch (PDOException $e) {
    echo ("Failed to connect to database" ."<br>". $e->getMessage());
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT NumInscri FROM login WHERE email='$email' AND password='$password'";

$stmt = $cnx->prepare($query);

$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$numRows = count($rows);

if ($numRows > 0) {
    $_SESSION['id'] = $rows[0]['NumInscri'];
    echo $_SESSION['id'];
    //header('Location: index.php');
    //exit();
} else {
    echo "Veuillez vérifier vos coordonnées.";
}
}

$_SESSION['test'] = 'This is the test.';

foreach ($_SESSION as $key => $value) {
        echo $key . ' = ' . $value . '<br>';
}


?>