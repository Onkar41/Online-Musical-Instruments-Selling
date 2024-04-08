<?php

session_start();
 if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    unset($_SESSION['uname']);
    $_SESSION['message']="Admin Logged out Successfully..";
 }
 header('location:../../index.php');
 
?>