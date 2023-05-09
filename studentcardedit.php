<?php
include_once ('database.php');
global $cnx;

// Récupération des données envoyées par le formulaire POST
$num_inscriptionPost = $_POST['num_inscription'];
$nomPost = $_POST['nom'];
$prenomPost = $_POST['prenom'];
$emailPost = $_POST['email'];
$numero_telephonePost = $_POST['numero_telephone'];
$niveau_etudesPost = $_POST['niveau_etudes'];
$filierePost = $_POST['filiere'];



$sql = "UPDATE student SET Nom=$nomPost, Prenom=$prenomPost, Email=$emailPost, Numero_Telephone=$numero_telephonePost, Niveau_Etudes=$niveau_etudesPost, Nom_Filiere=$filierePost WHERE Num_Inscri=$num_inscriptionPost.";

if ($cnx->query($sql) === TRUE) {
  echo "Mise à jour effectuée avec succès !";
} else {
  echo "Erreur lors de la mise à jour : " . $cnx->error;
}

// Fermeture de la connexion à la base de données depend de la fin de vie de l'objet cnx

?>
