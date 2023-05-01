// add an event listener to the "Editer" button
document.querySelector('.edit-button').addEventListener('click', function() {
    // get the values entered by the user in the form
    const nom = document.querySelector('input[placeholder="Nom"]').value;
    const prenom = document.querySelector('input[placeholder="Prénom"]').value;
    const email = document.querySelector('input[placeholder="entrer votre email universiataire"]').value;
    const tel = document.querySelector('input[placeholder="entrer votre numéro de téléphone"]').value;
    const niveau = document.querySelector('#niveau_etudes').value;
    const filiere = document.querySelector('#filieres').value;

    // update the content in "Informations Personnelles" using the new values
    document.querySelector('#tab1 h4:nth-of-type(1)').textContent = 'Nom: ' + nom +prenom
    ;
    document.querySelector('#tab1 h4:nth-of-type(3)').textContent = 'Email: ' + email;
    document.querySelector('#tab1 h4:nth-of-type(4)').textContent = 'Numéro de téléphone: ' + tel;
    document.querySelector('#tab1 h4:nth-of-type(5)').textContent = 'Niveau d\'études: ' + niveau;
    document.querySelector('#tab1 h4:nth-of-type(6)').textContent = 'Filière: ' + filiere;
});
//