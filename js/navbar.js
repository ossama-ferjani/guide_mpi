var myNav = document.querySelector("nav");
var hid1 = document.getElementById("hidden-sign-up");
hid1.style.display = "none";
var nav_elts = document.getElementsByClassName("nav-link");
var isLogged=false;

if(isLogged){
    document.getElementById('logged-out-nav').style.display="none";
    document.getElementById('logged-in-nav').style.display="block";
}

else{
    document.getElementById('logged-out-nav').style.display="block";
    document.getElementById('logged-in-nav').style.display="none";
}

window.addEventListener("scroll", function () {

    myNav.classList.toggle("sticky", window.scrollY > 100);

    if (this.scrollY > 100) {
        for (var i = 0; i < nav_elts.length; i++) {
            nav_elts[i].style.fontSize = "1em";
        }
        hid1.style.display = "block";
    }
    else {
        for (var i = 0; i < nav_elts.length; i++) {
            nav_elts[i].style.fontSize = "1.25em";
        }
        hid1.style.display = "none";
    }

});

/*try {
    hid1.style.display = "none";
    window.addEventListener("scroll", function () {
        myNav.classList.toggle("sticky", window.scrollY > 100);
        if (this.scrollY > 100) {
            hid1.style.display = "block";
        }
        else {
            hid1.style.display = "none";
        }

    });
}
catch(err){
    console.log("Error !");
}*/

