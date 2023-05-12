<?php

/*ob_start();

$dest = 'mysql:host=localhost;dbname=guide_mpi_db';
$user = 'root';
$pass = '';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
//$cnx = null;*/

include('database.php');

try {
    $cnx = new PDO($dest, $user, $pass, $option);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo ("You are connected to the database." . "<br>");
} catch (PDOException $e) {
    //echo ("Failed to connect to database" . "<br>" . $e->getMessage());
}

if (isset($_POST["submit"])) {
    $query = "SELECT * FROM login WHERE Email = :email AND Password = :password";
    $statement = $cnx->prepare($query);
    $statement->execute(
        array(
            'email'     =>     $_POST["email"],
            'password'     =>     $_POST["password"]
        )
    );
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    $count = $statement->rowCount();
    if ($count > 0) {
        $_SESSION["id"] = $rows[0]['NumInscri'];

        $query = "SELECT * FROM student WHERE NumInscri = :num_inscri";
        $getInscri = $cnx->prepare($query);
        $getInscri->bindParam(':num_inscri', $_SESSION["id"]);
        $getInscri->execute();

        $student_rows=$getInscri->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["username"] = $student_rows[0]['Nom'];
        echo "<script> location.replace('./index.php'); </script>";
    } else {
        //$message = "<script>alert('veuillez vérifier vos coordonnées')</script>";
        //echo $message;
        echo "<script>
            swal('Attention!', 'Veuillez verifier vos coordnnées!', 'warning');
        </script>";
    }
}  



















/*
//if($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($POST['submit'])){ 
    echo "We're in !";
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;

    $query = "SELECT NumInscri FROM login WHERE email='$email' AND password='$password'";

    $stmt = $cnx->prepare($query);

    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $numRows = count($rows);

    if ($numRows > 0) {
        session_start();
        $_SESSION['id'] = $rows[0]['NumInscri'];
        //echo $_SESSION['id'];
        //header('Location: index.php');
        //exit();
    } else {
        echo "Veuillez vérifier vos coordonnées.";
    }

    
}

foreach ($_SESSION as $key => $value) {
        echo $key . ' = ' . $value . '<br>';
}*/
