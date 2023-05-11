<?php
    session_start();
    //$_SESSION['user_id']='12345';
    unset($_SESSION['user_id']);
    if(isset($_SESSION['user_id'])) {
        setcookie('loggedIn', 'true', time() + 72000, '/');
    }
    else {
        setcookie('loggedIn', '', time() - 3600, '/');
        unset($_COOKIE['loggedIn']);
    }
    
?>