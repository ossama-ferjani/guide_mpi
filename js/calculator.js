var sem1= document.getElementById("sem1");
var sem2= document.getElementById("sem2");

var notes_sem1=document.getElementById("notes-sem1");
var inputs_sem1=document.querySelectorAll("#notes-sem1 .note");

var notes_sem2=document.getElementById("notes-sem2");
var inputs_sem2=document.querySelectorAll("#notes-sem2 .note");

var clear_btn=document.getElementById('clear');
  



//Checking radioBox
if (sem1.checked) {
    notes_sem1.style.opacity = 1;
    inputs_sem1.forEach(input => {
        input.readOnly = false;
    });
    
} else {
    notes_sem1.style.opacity = 0.5;
    inputs_sem1.forEach(input => {
        input.readOnly = true;
    });
}

if (sem2.checked) {
    notes_sem2.style.opacity = 1;
    inputs_sem2.forEach(input => {
        input.readOnly = false;
    });
    
} else {
    notes_sem2.style.opacity = 0.5;
    inputs_sem2.forEach(input => {
        input.readOnly = true;
    });
}

//Initializing
inputs_sem1.forEach(input => {
    input.value = "10";
});

inputs_sem2.forEach(input => {
    input.value = "10";
});


sem1.addEventListener("change", function() {
    if (this.checked) {
        notes_sem1.style.opacity = 1;
        inputs_sem1.forEach(input => {
            input.readOnly = false;
        });
        
    } else {
        notes_sem1.style.opacity = 0.5;
        inputs_sem1.forEach(input => {
            input.readOnly = true;
        });
    }
});

sem2.addEventListener("change", function() {
    if (this.checked) {
        notes_sem2.style.opacity = 1;
        inputs_sem2.forEach(input => {
            input.readOnly = false;
        });
        
    } else {
        notes_sem2.style.opacity = 0.5;
        inputs_sem2.forEach(input => {
            input.readOnly = true;
        });
    }
});


clear_btn.addEventListener('click',()=>{
    inputs_sem1.forEach(input => {
        input.value = "";
    });
    
    inputs_sem2.forEach(input => {
        input.value = "";
    });
});