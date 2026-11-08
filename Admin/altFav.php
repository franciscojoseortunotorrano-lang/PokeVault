<?php
session_start();
    include("../conexion.php");

    $id=$_GET['id'];
    $aux=$_GET['aux'];

    $consulta = "SELECT * FROM cartas WHERE dueño='".$_SESSION['idU']."' AND favorita='1'";
    $result=mysqli_query($conn,$consulta);
    if(mysqli_num_rows($result)<3||$aux==0){
        $consulta = "UPDATE cartas SET favorita=".$aux." WHERE id='".$id."'";
        mysqli_query($conn,$consulta);
    }
       header("LOCATION:ListadoCartas.php");
?>