<?php
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
    
    
        echo mysqli_error($conn );

        $consulta="SELECT imagen FROM cartas WHERE id='".$id."'";
        $result=mysqli_query($conn,$consulta);
        //copiamos la imagen que nos ha llegado a su carpeta.
        echo mysqli_error($conn );
        $ima="../imagenes/".((int) $id).".jpg";
        $ruta=$ima;

        COPY($_FILES["carta"]["tmp_name"],$ruta);

        header ("LOCATION:listadoCartas.php");
    }

    
?>