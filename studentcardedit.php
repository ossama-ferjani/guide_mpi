<? php 
include ('database.php');

// Récupération des données envoyées par le formulaire POST
$num_inscription = $_POST['num_inscription'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$numero_telephone = $_POST['numero_telephone'];
$niveau_etudes = $_POST['niveau_etudes'];
$filiere = $_POST['filiere'];



$sql = "UPDATE student SET Nom='$nom', Prenom='$prenom', Email='$email', Numero_Telephone='$numero_telephone', Niveau_Etudes='$niveau_etudes', Nom_Filiere='$filiere' WHERE Num_Inscri='$num_inscription'";

if ($cnx->query($sql) === TRUE) {
  echo "Mise à jour effectuée avec succès !";
} else {
  echo "Erreur lors de la mise à jour : " . $cnx->error;
}

// Fermeture de la connexion à la base de données
$conn->close();

?>
