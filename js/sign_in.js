
const submitButton  = document.getElementById('submit');
const form = document.querySelector('form'); 
const password = document.querySelector('#password');
const email = document.getElementById('email');
const errorMessage = document.getElementById('error-message');
const inputs = form.querySelectorAll('input[required]');


function isValidEmail(email) {

var emailPattern ="^[a-zA-Z]*\.[a-zA-Z]*\@insat\.ucar\.tn$";
    return emailPattern.test(email);
  }
  

submitButton.addEventListener('click', function(event) {



    if ((password.value!="") && (isValidEmail(email)))
      // Conditions are met, allow form submission
      return true;
    else {
      // Conditions are not met, prevent form submission
      
errorMessage.textContent = 'Identifiants incorrects. Veuillez réessayer.';
errorMessage.style.color = 'red';
errorMessage.style.fontSize = 'smaller';

      event.preventDefault();
      
      return false;
    }
  })
 

  
  
  submitButton.addEventListener('click', function(event) {
    let isValid = true;
    
    inputs.forEach(function(input) {
      if (!input.validity.valid) {
        input.classList.add('invalid-input');
        isValid = false;
      } else {
        input.classList.remove('invalid-input');
      }
    });
    
    if (!isValid) {
      event.preventDefault();
    }
  });
  
  





