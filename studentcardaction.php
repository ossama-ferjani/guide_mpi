<? php 
require('databse.php');



// Requête SQL pour extraire les informations de l'étudiant
$request = "SELECT Num_Inscri, Nom, Prenom, Nom_Filiere, email, Niveau FROM student, filiere, login WHERE student.id = login.id_student AND student.id_filiere = filiere.id AND login.username = 'username'";

$result = $conn->query($request);

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
    echo '
        <div class="tab-pane fade show active" id="tab1">
            <h4>Nom: ' . $nom . ' ' . $prenom . '</h4>
            <br>
            <h4>Numéro d\'inscription : ' . $num_inscription . '</h4>
            <br>
            <h4>Email: ' . $email . '</h4>
            <br>
            <h4>Numéro de téléphone: ' . $numero_telephone . '</h4>
            <br>
            <h4>Niveau d\'études: ' . $niveau_etudes . '</h4>
            <br>
            <h4>Filière: ' . $filiere . '</h4>
        </div>
    ';
} else {
    echo "Aucun résultat trouvé pour cet utilisateur.";
}

// Fermeture de la connexion à la base de données
$conn->close();
?>