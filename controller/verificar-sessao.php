<?php
    session_start();
    if(!isset($_SESSION["id"]) or !isset($_SESSION["usuario"])){
        header("Location:login.php");
        #session_destroy();
    }
?>