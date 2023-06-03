<?php 
    session_start();
    session_destroy();
    setcookie("auth", "username", time() - 3600, "/");
    header("Location: login.php");
?>