<?php

if (isset($_SESSION['id'])) {
    setcookie('loggedIn', 'true', time() + 72000, '/');
    setcookie('username', $_SESSION['username'], time() + 72000, '/');
} else {
    setcookie('loggedIn', '', time() - 3600, '/');
    unset($_COOKIE['loggedIn']);
    setcookie('username', '', time() - 3600, '/');
    unset($_COOKIE['username']);
}

if (isset($_GET['logout'])) {
    unset($_SESSION['id']);
    session_unset();
    session_destroy();
    header("Location:index.php");
}


