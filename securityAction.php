<?php
//session_start();
if(!isset($_SESSION['id'])){
    echo "<script> alert(`Vous devez d'abord vous connecter !`); </script>";
    echo "<script> location.replace('./SignIn.php'); </script>";
}
?>