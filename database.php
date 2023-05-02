<?php

$dest = 'mysql:host=localhost;dbname=guide_mpi_db';
$user = 'root';
$pass = '';
try {
    session_start();
    $database= new PDO($dest, $user, $pass);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}

?>

