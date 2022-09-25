<?php
    session_start();
    if(!isset($_SESSION['id_user']))
    {
        header("location: index.php");
        exit;
    }
?>

Welcome!!!!

<a href="logout.php">Logout</a>