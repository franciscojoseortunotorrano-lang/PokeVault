<?php   
    session_start();
    include("../conexion.php");
    $titulo=$_POST['titulo'];
    $cuerpo=$_POST['cuerpo'];

    //$titulo = mysqli_real_escape_string($conn, $titulo);
    //$cuerpo = mysqli_real_escape_string($conn, $cuerpo);

    $user = $_SESSION['nombreU'];

    $consulta="SELECT id FROM usuarios WHERE nombre = '$user'";
    $result=mysqli_query($conn,$consulta);
    $iduser=mysqli_fetch_array($result);

    $consulta="INSERT INTO `noticias`(`id`, `autor`, `cuerpo`, `publicado`, `titulo`) VALUES (NULL,'$iduser[0]','$cuerpo',0,'$titulo')";
    //ejecutamos la sentencia SQL
    mysqli_query($conn,$consulta);
    
    header ("LOCATION:Noticias.php");
?>