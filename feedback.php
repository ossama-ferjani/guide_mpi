<?php
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comment = $_POST["comment"];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'feedback'; 

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if (!$conn) {
        die('Connexion échouée : ' . mysqli_connect_error());
    }

    $stmt = $conn->prepare("INSERT INTO feedback (name, email, phone, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $comment); 
    

    try {
        $stmt->execute();
        $conn = null;
        header('location: ContactUs.html?success=true');
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
//header('location: ContactUs.php');
?>