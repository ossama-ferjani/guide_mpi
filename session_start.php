<?php
    session_start(); 
    unset($_SESSION['user_id']);
    $connected=false;
    //$_SESSION['user_id']=1;
   if (isset($_SESSION['user_id'])) {
        $myBool = true;
        $data = array("boolValue" => $myBool);
        echo json_encode($data);
    } 
    else {
        $myBool = false;
        $data = array("boolValue" => $myBool);
        echo json_encode($data);
    }
