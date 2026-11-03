<?php
    session_start();
    if ((!isset($_SESSION['idU'])&&!isset($_SESSION['rolU']))||$_SESSION['rolU']!=0){
        header("LOCATION:../index.php");

    }
?>