<? php 
include_once ('database.php');

// Requête SQL pour extraire les informations de l'étudiant
$request = "SELECT Num_Inscri, Nom, Prenom, Nom_Filiere, email, Niveau FROM student, filiere, login WHERE student.id = login.id_student AND student.id_filiere = filiere.id AND login.username = 'username'";

$result = $cnx->query($request);

// Vérification du résultat de la requête
if ($result->num_rows > 0) {
    // Récupération des données de l'étudiant
    $row = $result->fetch_assoc();
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