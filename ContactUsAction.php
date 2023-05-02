<?php
include 'securityAction';
include 'database.php';
if(isset($_POST["submit"])) {
    $name = $_POST["Titre"];
    $comment = $_POST["comment"];
    $numInscri=$_SESSION["numInscri"];


    $stmt = $cnx->prepare("INSERT INTO feedback (contenu, Titre,NumInscri) VALUES ( ?, ?,?)");
    $stmt->bindParam(1, $comment);
    $stmt->bindParam(2, $name);   
    $stmt->bindParam(3, $numInscri); 

    try {
        $stmt->execute();
        $cnx = null;
        header('location: ContactUs.html?success=true');
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $cnx = null;
}
//header('location: ContactUs.php');
?>