//var isLogged = false;
const username = document.getElementById("username");
//const disconnect=document.getElementById('disconnect');

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
    document.getElementById('logged-out-nav').style.display = "none";
    document.getElementById('logged-in-nav').style.display = "block";
    username.innerHTML = getCookieValue("username");
}

else {
    document.getElementById('logged-out-nav').style.display = "block";
    document.getElementById('logged-in-nav').style.display = "none";

}





