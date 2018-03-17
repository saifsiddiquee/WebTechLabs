<?php 
    session_start();
    unset($_SESSION['t_email']);
    unset($_SESSION['t_password']);
    session_destroy();
    header("Location: index.php");
?>