<?php

    
    if(isset($_GET['logout'])) { 
        unset($_SESSION['id']);
        session_unset(); 
        session_destroy(); 
        header("Location:index.php"); 
        
    }


    if(isset($_SESSION['id']) != null) {
        setcookie('loggedIn', 'true', time() + 72000, '/');
    }
    else {
        setcookie('loggedIn', '', time() - 3600, '/');
        unset($_COOKIE['loggedIn']);
    }

    
    //session_unset(); 
    //session_destroy(); 
    
?>