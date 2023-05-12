<?php

/*
ob_start();

$dest = 'mysql:host=localhost;dbname=guide_mpi_db';
$user = 'root';
$pass = '';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
*/

include('database.php');

try {
    $cnx = new PDO($dest, $user, $pass, $option);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo ("You are connected to the database." . "<br>");
} catch (PDOException $e) {
    //echo ("Failed to connect to database" . "<br>" . $e->getMessage());
    //exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //echo "POOOOOOOOOST";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $NumInscri = $_POST["NumInscri"];
    $phone = $_POST["phone"];
    $field = $_POST["filiere"];
    $niveau = $_POST["niveau"];

    try {
        // Start a transaction
        $cnx->beginTransaction();

        // Insert the user data into the "student" table
        $studentInsertStmt = $cnx->prepare("INSERT INTO student (NumInscri, Nom, Prenom, Telephone, Nom_Filiere,Niveau) VALUES (:NumInscri, :Nom, :Prenom, :Telephone, :Nom_Filiere,:niveau)");
        $studentInsertStmt->bindParam(':NumInscri', $NumInscri);
        $studentInsertStmt->bindParam(':Nom', $name);
        $studentInsertStmt->bindParam(':Prenom', $surname);
        $studentInsertStmt->bindParam(':Telephone', $phone);
        $studentInsertStmt->bindParam(':Nom_Filiere', $field);
        $studentInsertStmt->bindParam(':niveau', $niveau);
        $studentInsertStmt->execute();
        
        
        // Insert the user data into the "login" table
        $loginInsertStmt = $cnx->prepare("INSERT INTO login (NumInscri,email, password) VALUES (:NumInscri,:email, :password )");
        $loginInsertStmt->bindParam(':email', $email);
        $loginInsertStmt->bindParam(':password', $password);
        $loginInsertStmt->bindParam(':NumInscri', $NumInscri);
        $loginInsertStmt->execute();

        $getLoginId=$cnx->prepare("SELECT NumLogin FROM login WHERE NumInscri = :NumInscri");
        $getLoginId->bindParam(':NumInscri', $NumInscri);
        $getLoginId->execute();
        
        foreach ($getLoginId->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $LoginId= $row['NumLogin'] . '<br>';
        }

        $studentInsertStmt = $cnx->prepare("UPDATE student SET LoginId=:LoginId WHERE NumInscri = :NumInscri" );
        $studentInsertStmt->bindParam(':LoginId', $LoginId);
        $studentInsertStmt->bindParam(':NumInscri', $NumInscri);
        $studentInsertStmt->execute();

        $studentInsertStmt = $cnx->prepare("UPDATE student SET Nom_Filiere=:nom WHERE NumInscri = :NumInscri" );
        $studentInsertStmt->bindParam(':nom', $field);
        $studentInsertStmt->bindParam(':NumInscri', $NumInscri);
        $studentInsertStmt->execute();

    
        $cnx->commit();
        
        ob_end_clean();
        $_SESSION['id']=$NumInscri;
        //echo $_SESSION['id'];
        header("Location: SignIn.php");
        //exit();
        
    } catch (PDOException $e) {
        // Roll back the transaction and display an error message
        $cnx->rollBack();
        echo "Error inserting data into database: " . $e->getMessage();
    }
}

