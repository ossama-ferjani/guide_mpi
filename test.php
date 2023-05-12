<?php
    session_start();

    if (isset($_SESSION['id']) != null){
        echo "Boyaah!";
    }
    else{
        echo "Oops !";
    }
    
?>