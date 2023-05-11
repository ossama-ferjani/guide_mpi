<?php
    session_start();
    
    
    //$_SESSION['user_id']='12345';
    //unset($_SESSION['user_id']);
    

    if(isset($_GET['logout'])) { 
        unset($_SESSION['user_id']);
        session_unset(); 
        session_destroy(); 
        header("Location:index.php"); 
        
    }

    if(isset($_SESSION['user_id'])) {
        setcookie('loggedIn', 'true', time() + 72000, '/');
    }
    else {
        setcookie('loggedIn', '', time() - 3600, '/');
        unset($_COOKIE['loggedIn']);
    }

    session_unset(); 
    session_destroy(); 
    
?>