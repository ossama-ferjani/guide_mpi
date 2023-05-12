<?php
session_start();
require('database.php');

$getAllMyQuestions = $cnx->prepare('SELECT id, titre, description FROM questions WHERE id_auteur = ? ORDER BY id DESC');
$getAllMyQuestions->execute(array($_SESSION['id']));
?>