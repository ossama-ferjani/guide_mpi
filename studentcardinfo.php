<?php
global $cnx;
include_once ('database.php');

// Requête SQL pour extraire les informations de l'étudiant
$id = null;
if(isset($_GET["id"]) and is_int( $_GET["id"]))
{
   $id = intval( htmlspecialchars( $_GET["id"]));
};

$request = "SELECT student.NumInscri AS Num_Inscri , student.Nom AS Nom, student.Prenom AS Prenom, student.Nom_Filiere AS Nom_Filiere, Email AS email, Niveau AS Niveau 
            FROM student, filiere, login 
            WHERE student.NumInscri = login.NumInscri 
            AND student.Nom_Filiere = filiere.Nom";

$result = $cnx->query($request);

// Vérification du résultat de la requête
if ($result !== false) {
    // Récupération des données de tous les étudiants

    $row = $result->fetchAll()[0];
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