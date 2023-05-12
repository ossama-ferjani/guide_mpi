<?php
session_start();
if(!isset($_SESISON['id'])){
    header('Location: login.php');
}
?>