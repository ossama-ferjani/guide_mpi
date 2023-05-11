<?php
global $cnx;
include_once ('database.php');

session_start();
if(!isset($_SESSION['id'])){
    header("Location: Login.php");
    exit(302);

}
$id = (int)$_SESSION['id'];
// Requête SQL pour extraire les informations de l'étudiant
$request = "SELECT student.NumInscri AS Num_Inscri , student.Nom AS Nom, student.Prenom AS Prenom, student.Nom_Filiere AS Nom_Filiere, Email AS email, Niveau AS Niveau 
            FROM student, filiere, login 
            WHERE student.NumInscri = $id
            AND student.NumInscri = login.NumInscri 
            AND student.Nom_Filiere = filiere.Nom";

$result = $cnx->query($request);

// Vérification du résultat de la requête
if ($result !== false) {
    // Récupération des données de l'étudiant

    $row = $result->fetch();
    $nom = $row["Nom"];
    $prenom = $row["Prenom"];
    $num_inscription = $row["Num_Inscri"];
    $email = $row["email"];
    $numero_telephone = ""; // la colonne "numéro de téléphone" n'est pas disponible dans la base de données fournie
    $niveau_etudes = $row["Niveau"];
    $filiere = $row["Nom_Filiere"];

    // Affichage des informations de l'étudiant dans le code HTML

}
?>