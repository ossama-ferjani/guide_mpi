
const submitButton  = document.getElementById('submit');
const form = document.querySelector('form'); 
const email = document.getElementById('email');
const errorMessage = document.getElementById('error-message');


function isValidEmail(email) {

let emailPattern =/^[a-zA-Z]+\.[a-zA-Z]+@insat\.ucar\.tn$/;
    return emailPattern.test(email);
  }
  

submitButton.addEventListener('click', function(event) {



    if ( isValidEmail(email)) {
      // Conditions are met, allow form submission
      return true;
    } else {
      // Conditions are not met, prevent form submission
      
errorMessage.textContent = 'Veuillez vérifier votre adresse email.';
errorMessage.style.color = 'red';
errorMessage.style.fontSize = 'smaller';

      event.preventDefault();
      
      return false;
    }
  })
