const myNav = document.querySelector("nav");
const hid1 = document.getElementById("hidden-sign-up");
const nav_elts = document.getElementsByClassName("nav-link");
let isLogged=true;

hid1.style.display = "none";

//if(isLogged){
if (document.cookie.indexOf("loggedIn=true") !== -1) {
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


