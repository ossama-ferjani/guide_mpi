
const submitButton  = document.getElementById('submit');
const name  = document.getElementById('nom');
const surname  = document.getElementById('prenom');
const form = document.querySelector('form'); 
const password = document.querySelector('#password');
const passwordConfirm = document.getElementById('passwordConfirm');
const email = document.getElementById('email');
const errorMessage = document.getElementById('error-message');
const nameErrorMessage = document.getElementById('NAMEerror-message');
const snErrorMessage = document.getElementById('SNerror-message');
const telErrorMessage = document.getElementById('telerror-message');
const mailerrorMessage = document.getElementById('mailerror-message');
const passerrorMessage = document.getElementById('passerror-message');
const passconferrorMessage = document.getElementById('passconferror-message');
const inputs = form.querySelectorAll('input[required]');



const test=true;



const phoneInput = document.getElementById('tel');


function isValidname(name) {

let namePattern =/^[a-zA-Z]+$/;
    return namePattern.test(name);
  }
name.addEventListener('input', function() {
    
  
    if (isValidname(name)) {
    } else {
        nameErrorMessage.textContent = 'Veuillez vérifier votre nom.';
        nameErrorMessage.style.color = 'red';
        nameErrorMessage.style.fontSize = 'smaller';
        test=false;
    }
  }); 
surname.addEventListener('input', function() {
    
  
    if (isValidname(surname)) {
    } else {
        snErrorMessage.textContent = 'Veuillez vérifier votre prénom.';
        snErrorMessage.style.color = 'red';
        snErrorMessage.style.fontSize = 'smaller';
        test=false;
    }
  }); 
  
  const phoneRegex = /^\d+$/;
  
  phoneInput.addEventListener('input', function() {
    const isValid = phoneRegex.test(phoneInput.value);
  
    if (isValid) {
      // Phone number contains only digits
    } else {
        telErrorMessage.textContent = 'Veuillez saisir un numéro de téléphone composé de 8 chiffres.';
        telErrorMessage.style.color = 'red';
        telErrorMessage.style.fontSize = 'smaller';
        test=false;
    }
  });
  
function isValidEmail(email) {

    let emailPattern =/^[a-zA-Z]+\.[a-zA-Z]+@insat\.ucar\.tn$/;
        return emailPattern.test(email);
      }
      
email.addEventListener('input', function() {
        
      
        if (isValidEmail(email)) {
        } else {
            mailerrorMessage.textContent = 'Veuillez saisir une adresse email (universitaire) valide.';
            mailerrorMessage.style.color = 'red';
            mailerrorMessage.style.fontSize = 'smaller';
            test=false;
        }
      });
password.addEventListener('blur', function() {
        
      
        if (password.value.length>=8 && password.value!== '') {
        } else {
            passerrorMessage.textContent = 'Votre mot de passe doit contenir au moins 8 caractères.';
            passerrorMessage.style.color = 'red';
            passerrorMessage.style.fontSize = 'smaller';
            test=false;
        }
      });
passwordConfirm.addEventListener('blur', function() {
        
      
        if (password.value==passwordConfirm.value) {
        } else {
            passconferrorMessage.textContent = 'Les mots de passe doivent etre identiques.';
            passconferrorMessage.style.color = 'red';
            passconferrorMessage.style.fontSize = 'smaller';
            test=false;
        }
      });
submitButton.addEventListener('click', function(event) {
    if (test==true) {
      // Conditions are met, allow form submission
  
      return true;
    } else {
      event.preventDefault();
      window.location.href=SignUp.html;
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
