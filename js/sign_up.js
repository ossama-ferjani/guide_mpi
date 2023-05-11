
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
const passerrorMessage = document.getElementById('passerror-message') ;
const inscrierrorMessage = document.getElementById('inscrierror-message');
const passconferrorMessage = document.getElementById('passconferror-message');
const inputs = form.querySelectorAll('input[required]');
var test1=true; var test2=true; var test3=true ;var test4=true; var test5=true; var test6=true; var test7=true;
const numinscri=document.getElementById("inscri");
const phoneInput = document.getElementById('tel');



  function isValidEmail(email) {

    let emailPattern =/^[a-zA-Z]+\.[a-zA-Z]+@insat\.ucar\.tn$/;
        return emailPattern.test(email);
      }
    
 submitButton.addEventListener('click', function(event) { 
    if (isNaN(name)) {
       test1=true;
    } else {
        nameErrorMessage.textContent = 'Veuillez vérifier votre nom.';
        nameErrorMessage.style.color = 'red';
        nameErrorMessage.style.fontSize = 'smaller';
         test1=false;
    }
    if (isNaN(surname)) {
       test2=true;
    } else {
        snErrorMessage.textContent = 'Veuillez vérifier votre prénom.';
        snErrorMessage.style.color = 'red';
        snErrorMessage.style.fontSize = 'smaller';
         test2=false;
    }

  

  

    const isValid = (!isNaN(phoneInput.value)) &&(phoneInput.value.length==8) ;
  
    if (isValid) {
      test3=true;
      // Phone number contains only digits
    } else {
        telErrorMessage.textContent = 'Veuillez saisir un numéro de téléphone composé de 8 chiffres.';
        telErrorMessage.style.color = 'red';
        telErrorMessage.style.fontSize = 'smaller';
         test3=false;
    }


    const Valid = (!isNaN(numinscri.value)) &&(numinscri.value.length==7) ;
  
    if (Valid) {
       test4=true;
      // Phone number contains only digits
    } else {
        inscrierrorMessage.textContent = "Veuillez saisir un numéro d'inscription composé de 7 chiffres.";
        inscrierrorMessage.style.color = 'red';
        inscrierrorMessage.style.fontSize = 'smaller';
         test4=false;
    }
   
  if (isValidEmail(email)) {
           test5=true;
        } else {
            mailerrorMessage.textContent = 'Veuillez saisir une adresse email (universitaire) valide.';
            mailerrorMessage.style.color = 'red';
            mailerrorMessage.style.fontSize = 'smaller';
             test5=false;
        }
   
        
      
        if (password.value.length>=8 && password.value!== '') {
          test6=true;
        } else {
            passerrorMessage.textContent = 'Votre mot de passe doit contenir au moins 8 caractères.';
            passerrorMessage.style.color = 'red';
            passerrorMessage.style.fontSize = 'smaller';
            test6=false;
        }
      
        
      
        if (password.value==passwordConfirm.value) {
          test7=true;
        } else {
            passconferrorMessage.textContent = 'Les mots de passe doivent etre identiques.';
            passconferrorMessage.style.color = 'red';
            passconferrorMessage.style.fontSize = 'smaller';
            test7=false;
        }
      

    if (test1 && test2 && test3 && test4 && test5 && test6 && test7 ) {
      // Conditions are met, allow form submission
  
      return true;
    } else {
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


