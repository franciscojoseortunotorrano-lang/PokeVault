<?php

    include('../conexion.php');

    $consulta = "DELETE FROM noticias WHERE id='".$_GET['id']."'";

    mysqli_query($conn,$consulta);

    header ("LOCATION:Noticias.php");

?>