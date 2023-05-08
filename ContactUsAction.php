<?php
include 'securityAction';
include 'database.php';
if(isset($_POST["submit"])) {
    $tire = htmlspecialchars($_POST["Titre"]);
    $comment = htmlspecialchars($_POST["comment"]);
    $numInscri=$_SESSION["numInscri"];


    $stmt = $cnx->prepare("INSERT INTO feedback (contenu, Titre,NumInscri) VALUES ( ?, ?,?)");
    $stmt->bindParam(1, $comment);
    $stmt->bindParam(2, $titre);   
    $stmt->bindParam(3, $numInscri); 

    try {
        $stmt->execute();
        $cnx = null;
        header('location: ContactUs.php?success=true');//nbadil lurl bich nijm naffichi il popup ken il insertion fil database tinja7
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $cnx = null;
}
?>