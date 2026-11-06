<?php

    include('../conexion.php');

    $consulta = "DELETE FROM CARTAS WHERE id='".$_GET['id']."'";

    mysqli_query($conn,$consulta);

    header ("LOCATION:listadoCartas.php");

?>