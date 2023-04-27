<?php
try{
    $database = new PDO('mysql:host=localhost;dbname=database;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
