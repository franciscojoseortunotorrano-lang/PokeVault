<?php
    include('../conexion.php');
    session_start();

    $usuario=$_POST['busqueda'];

    $consulta = "SELECT * FROM usuarios WHERE id='".$usuario."'";
    $result=mysqli_query($conn,$consulta);
    
    if(mysqli_num_rows($result)==0){
        $consulta = "SELECT * FROM usuarios WHERE nombre='".$usuario."'";
        $result=mysqli_query($conn,$consulta);

        if(mysqli_num_rows($result)==0){
            $_SESSION['otherUser']=NULL;
            header("LOCATION:GestionUsuarios.php");
        
        }else{
            $row=mysqli_fetch_array($result);
            $_SESSION['otherUser']=$row['id'];
            header("LOCATION:GestionUsuarios.php");
        }
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['otherUser']=$row['id'];
        header("LOCATION:GestionUsuarios.php");
    }




?>