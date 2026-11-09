<?php
    include("../conexion.php");

    $id=$_GET['id'];
    $aux=$_GET['aux'];

    $consulta ="SELECT * FROM usuarios WHERE id='".$id."'";
    $result = mysqli_query($conn,$consulta);
    $row=mysqli_fetch_array($result);
    if($row['rol']!=0){
        $consulta = "UPDATE usuarios SET bloqueado='".$aux."' WHERE id='".$id."'";
        mysqli_query($conn,$consulta);
    }

    header("LOCATION:GestionUsuarios.php");

?>