<?php
    session_start();
    include ("../conexion.php");


    $cuerpo=$_POST['cuerpo'];
    $titulo=$_POST['titulo'];
    $id=$_POST['id'];

    $user=$_SESSION['idU'];
    $consulta = "Select * FROM noticias WHERE id='".$id."'";

    $result=mysqli_query($conn,$consulta);
    if(mysqli_num_rows($result)==0){
        header ("LOCATION:listadoCartas.php");      
    }else{
        $consulta = "UPDATE noticias SET cuerpo='".$cuerpo."' ,titulo='".$titulo."' WHERE id='".$id."'";
    
    
        mysqli_query($conn,$consulta);

        header ("LOCATION:Noticias.php");
    }

    
?>