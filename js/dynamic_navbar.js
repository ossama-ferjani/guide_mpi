const myNav = document.querySelector("nav");
const hid1 = document.getElementById("hidden-sign-up");
const nav_elts = document.getElementsByClassName("nav-link");
const username = document.getElementById("username");
//let isLogged=true;

hid1.style.display = "none";

function getCookieValue(cookieName) {
    var name = cookieName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
  
    for (var i = 0; i < cookieArray.length; i++) {
      var cookie = cookieArray[i];
      while (cookie.charAt(0) == ' ') {
        cookie = cookie.substring(1);
      }
      if (cookie.indexOf(name) == 0) {
        return cookie.substring(name.length, cookie.length);
      }
    }
  
    return "";
  }

//if(isLogged){
if (document.cookie.indexOf("loggedIn=true") !== -1) {
    document.getElementById('logged-out-nav').style.display="none";
    document.getElementById('logged-in-nav').style.display="block";
    username.innerHTML=getCookieValue("username");
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


