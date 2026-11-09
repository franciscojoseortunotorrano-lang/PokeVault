<?php

    include('../conexion.php');

    $id=$_GET['id'];

    $consulta = "SELECT * FROM CARTAS WHERE id='".$id."'";
    $result=mysqli_query($conn,$consulta);
    $row=mysqli_fetch_array($result);
    $rutaImagen=$row['imagen'];

    if (file_exists($rutaImagen)) {
            unlink($rutaImagen);
        }

    $consulta = "DELETE FROM CARTAS WHERE id='".$id."'";

    mysqli_query($conn,$consulta);

    header ("LOCATION:listadoCartas.php");

?>