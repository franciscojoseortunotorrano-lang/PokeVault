<?php
    session_start();
    include ("../conexion.php");


    $state=$_POST['state'];
    $id=$_POST['id'];

    $user=$_SESSION['idU'];
    $consulta = "Select * FROM cartas WHERE id='".$id."' AND dueño='".$user."'";

    $result=mysqli_query($conn,$consulta);
    if(mysqli_num_rows($result)==0){
        header ("LOCATION:listadoCartas.php");      
    }else{
        $consulta = "UPDATE cartas SET estado='".$state."' WHERE id='".$id."'";
    
    
        mysqli_query($conn,$consulta);
    
    
        

        if(!empty($_FILES["carta"]["tmp_name"])){
            $consulta="SELECT imagen FROM cartas WHERE id='".$id."'";
            $result=mysqli_query($conn,$consulta);
            //copiamos la imagen que nos ha llegado a su carpeta.
            
            $ima="../imagenes/".((int) $id).".jpg";
            $ruta=$ima;

            COPY($_FILES["carta"]["tmp_name"],$ruta);
        }

        header ("LOCATION:listadoCartas.php");
    }

    
?>