<?php
include_once ('database.php');
global $cnx;

session_start();
if(!isset($_SESSION['id'])){
  header('Location: SignIn.php');
  exit(302);
}
if(empty($_POST)){
  header('Location: studentcard.php');
  exit();
}
// Récupération des données envoyées par le formulaire POST
$isFirst = true;
$toExecute = array();

$num_inscriptionPost = $_SESSION['id'];

$sql = "UPDATE student SET ";

if(isset($_POST['nom'])){
  $nomPost = $_POST['nom'];
  $sql .= " Nom = ? ";
  $isFirst = false;
  $toExecute[] = $nomPost;
}
if(isset($_POST['prenom'])){
  $prenomPost = $_POST['prenom'] ;
  if(!$isFirst) $sql .=" ,";
  else $isFirst = false;
  $sql .= " Prenom = ? ";
  $toExecute[] = $prenomPost;
}

if(isset($_POST['numero_telephone'])){
  $numero_telephonePost = $_POST['numero_telephone'];
  if(!$isFirst) $sql .=" ,";
  else $isFirst = false;
  $sql .= " Telephone = ? ";
  $toExecute[] = $numero_telephonePost;
}
if(isset($_POST['niveau_etudes'])){
  $niveau_etudesPost = $_POST['niveau_etudes'];
  if(!$isFirst) $sql .=" ,";
  else $isFirst = false;
  $sql .= " Niveau= ? ";
  $toExecute[] = $niveau_etudesPost;
}
if(isset($_POST['filiere'])){
  $filierePost = $_POST['filiere'];
  if(!$isFirst) $sql .=" ,";
  else $isFirst = false;
  $sql .= " Nom_Filiere = ? ";
  $toExecute[] = $filierePost;
}

$sql .=  "WHERE NumInscri = ? ;";
$toExecute[] = $num_inscriptionPost;

if ($cnx->prepare($sql)->execute($toExecute) === TRUE) {
  echo "Mise à jour effectuée avec succès !";
} else {
  echo "Erreur lors de la mise à jour : " . $cnx->$error;
}

// Fermeture de la connexion à la base de données depend de la fin de vie de l'objet cnx
header('Location: studentcard.php');
exit();
?>
