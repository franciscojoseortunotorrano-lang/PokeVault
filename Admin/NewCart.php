<?php

    session_start();
    //Estableciendo la conexión
    include ("../conexion.php");
    //recogida de datos
    $state=$_POST['state'];

    $user = $_SESSION['nombreU'];

    $consulta="SELECT id FROM cartas WHERE id = (SELECT MAX(id) FROM cartas)";
    $result=mysqli_query($conn,$consulta);
    $id=mysqli_fetch_array($result);

    $consulta="SELECT id FROM usuarios WHERE nombre = '$user'";
    $result=mysqli_query($conn,$consulta);
    $iduser=mysqli_fetch_array($result);

    $ima="../imagenes/".((int) $id[0]+1).".jpg";
    //echo $ima;

    $consulta = "INSERT INTO cartas (`id`, `dueño`, `imagen`, `estado`, `favorita`) VALUES (NULL,'$iduser[0]','$ima','$state',0)";
    //ejecutamos la sentencia SQL
    mysqli_query($conn,$consulta);
    //copiamos la imagen que nos ha llegado a su carpeta.
    echo mysqli_error($conn );
    $ruta=$ima;
    COPY($_FILES["carta"]["tmp_name"],$ruta);
    //redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
    header ("LOCATION:ListadoCartas.php");
?>
