<?php
session_start();
include("conexion.php");

//obtenemos los datos del formulario
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$passConfirm = $_POST['confirmPass'];

$_SESSION['passDif'] = "";
$_SESSION['user'] = "";
$_SESSION['email'] = "";
$_SESSION['exist'] = "";


//hacemos la consulta para ver si ese usuario ya existe
$consulta="SELECT * FROM usuarios WHERE nombre='$user' OR correo='$email'";

//la ejecutamos y vemos si hay error
$result=mysqli_query($conn, $consulta);
echo mysqli_error($conn);

//vemos si esos datos estaban ya registrados
if (mysqli_num_rows($result)==0){
    if($pass===$passConfirm){
        $consulta="INSERT INTO `usuarios`(`id`, `nombre`, `correo`, `rol`, `bloqueado`, `password`) VALUES (NULL,'$user','$email','1','0','$pass')";
        $result=mysqli_query($conn, $consulta);
        echo mysqli_error($conn);
        header("LOCATION:./index.php");
    }else{
        $_SESSION['user']=$user;
        $_SESSION['email']=$email;
        $_SESSION['passDif']=true;
        header("LOCATION:./Registro.php");
    }
}else{
    $_SESSION['user']=$user;
    $_SESSION['email']=$email;
    $_SESSION['exist']=true;
    header("LOCATION:./Registro.php");

}

?>
