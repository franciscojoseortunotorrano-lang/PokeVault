<?php
session_start();
include("conexion.php");

//obtenemos los datos del formulario
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];



//hacemos la consulta para ver si ese usuario ya existe
$consulta="SELECT * FROM usuarios WHERE nombre='$user' AND correo='$email'";

//la ejecutamos y vemos si hay error
$result=mysqli_query($conn, $consulta);
echo mysqli_error($conn);

//vemos si esos datos estaban ya registrados
if (mysqli_num_rows($result)==0){
    $consulta="INSERT INTO `usuarios`(`id`, `nombre`, `correo`, `rol`, `bloqueado`, `password`) VALUES (NULL,'$user','$email','1','0','$pass')";
    $result=mysqli_query($conn, $consulta);
    echo mysqli_error($conn);
    header("LOCATION:./index.php");
}else{
    $_SESSION['user']=$user;
    $_SESSION['email']=$email;
    header("LOCATION:./Registro.php");

}

?>
