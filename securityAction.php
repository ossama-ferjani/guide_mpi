<?php
//Ce code ne permet le user d'acceder a une page que si il est connecté
if(!isset($_SESSION['id'])){
    echo "<script> alert(`Vous devez d'abord vous connecter !`); </script>";
    echo "<script> location.replace('./SignIn.php'); </script>";
}
?>