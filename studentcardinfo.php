<?php
global $cnx;
include_once ('database.php');

session_start();
if(!isset($_SESSION['id'])){
    header("Location: SignIn.php");
    exit(302);

}
$id = $_SESSION['id'];
// Requête SQL pour extraire les informations de l'étudiant
$request = "SELECT * FROM student AS s INNER JOIN login AS l ON s.NumInscri=l.NumInscri WHERE s.NumInscri = $id";


$result = $cnx->query($request);

// Vérification du résultat de la requête
if ($result !== false) {
    // Récupération des données de l'étudiant

    $row = $result->fetch();

    $nom = $row["Nom"];
    $prenom = $row["Prenom"];
    $email = $row["Email"];
    $num_inscription = $row["NumInscri"];
    $numero_telephone = $row["Telephone"];; // la colonne "numéro de téléphone" n'est pas disponible dans la base de données fournie
    $niveau_etudes = $row["Niveau"];
    $filiere = $row["Nom_Filiere"];

    // Affichage des informations de l'étudiant dans le code HTML

}
?>