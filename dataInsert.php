<?php
$dest = 'mysql:host=localhost;dbname=guide_mpi_db';
$user = 'root';
$pass = '';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
$cnx=null;

try {
    $cnx = new PDO($dest, $user, $pass, $option);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("You are connected to the database."."<br>");
} catch (PDOException $e) {
    echo ("Failed to connect to database" ."<br>". $e->getMessage());
}


// Get form data
//$email = $_POST['email'];
$test1 = filter_var($_POST['test1'], FILTER_SANITIZE_EMAIL);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
/*$password = $_POST["password"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$NumInscri = $_POST["NumInscri"];
$phone = $_POST["phone"];
$field= $_POST["field"];
$niveau = $_POST["niveau"];*/
$password = filter_var($_POST['password'], FILTER_SANITIZE_EMAIL);
$name = filter_var($_POST['name'], FILTER_SANITIZE_EMAIL);
$surname = filter_var($_POST['surname'], FILTER_SANITIZE_EMAIL);
$NumInscri = filter_var($_POST['NumInscri'], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_EMAIL);
$field = filter_var($_POST['field'], FILTER_SANITIZE_EMAIL);
$niveau = filter_var($_POST['niveau'], FILTER_SANITIZE_EMAIL);

// Prepare SQL statement
$sql1 = "INSERT INTO student (Num Inscri,Nom,Prenom,Telephone,email, password) 
VALUES ('$NumInscri','$name','$surname','$phone','$email', '$password')";
$sql2="INSERT INTO filiere(Nom,Niveau) VALUES('$field','$niveau')";

//Execute SQL statement
if (($cnx->query($sql1) === TRUE) && ($cnx->query($sql1) === TRUE)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $cnx->error;
}

// Close database connection
$cnx->close();
?>