<?php   
    session_start();
    include("../conexion.php");
    $titulo=$_POST['titulo'];
    $cuerpo=$_POST['cuerpo'];

    $fechaActual = date('Y-m-d');

    $user = $_SESSION['nombreU'];

    $consulta="SELECT id FROM usuarios WHERE nombre = '$user'";
    $result=mysqli_query($conn,$consulta);
    $iduser=mysqli_fetch_array($result);

    $consulta="INSERT INTO `noticias`(`id`, `autor`, `cuerpo`, `publicado`, `titulo`) VALUES (NULL,'$iduser[0]','$cuerpo','$fechaActual','$titulo')";
    //ejecutamos la sentencia SQL
    mysqli_query($conn,$consulta);
    
    header ("LOCATION:Noticias.php");
?>