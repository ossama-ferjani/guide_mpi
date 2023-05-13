<?php

include 'database.php';

if(isset($_POST["submit"])) {
    $titre = ($_POST["titre"]);
    $content = ($_POST["contenu"]);
    $numInscri=$_SESSION["id"];
    $currentDate = date("Y-m-d");

    $forign0=$cnx->prepare("SET FOREIGN_KEY_CHECKS=0");
    $forign0->execute();

    $stmt = $cnx->prepare("INSERT INTO feedback (Contenu,NumInscri ,Date,Titre) VALUES ( ?, ?,?,?)");
    $stmt->bindParam(1, $content);
    $stmt->bindParam(2, $numInscri);
    $stmt->bindParam(3, $currentDate); 
    $stmt->bindParam(4, $titre);   
    

    try {
        $stmt->execute();
        $cnx = null;
        echo "<script> location.replace('./ContactUs.php?success=true'); </script>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $cnx = null;
}
?>