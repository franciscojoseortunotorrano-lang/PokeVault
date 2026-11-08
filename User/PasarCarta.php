<?php
    session_start();

    if(empty($_SESSION['posicion'])){
        $_SESSION['posicion']=0;
    }
    //echo  $_SESSION['posicion'];
    $aux=$_GET['aux'];
    if($aux==0){
        $_SESSION['posicion']=($_SESSION['posicion']+1);
    }else{
        $_SESSION['posicion']=($_SESSION['posicion']-1);
    }
    //echo $_SESSION['posicion'];
    header ("LOCATION:index.php");

?>