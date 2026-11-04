<?php
    session_start();
    include('conexion.php');

    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $consulta="SELECT * FROM usuarios WHERE nombre='$user' AND password='$pass'";
    //echo $consulta;
    $result=mysqli_query($conn, $consulta);

    echo mysqli_error($conn);

    if (mysqli_num_rows($result)==0){
        $_SESSION['error']="Error: datos incorrectos";
        header("LOCATION:./index.php");
    }
    elseif (mysqli_num_rows($result)==1) {
        $datosUsuario=mysqli_fetch_assoc($result);
        $_SESSION['idU']=$datosUsuario['id'];
        $_SESSION['nombreU']=$datosUsuario['nombre'];
        $_SESSION['rolU']=$datosUsuario['rol'];
        $rolU=$datosUsuario['rol'];
        $bloqueado=$datosUsuario['bloqueado'];
        if($bloqueado==0){
            if ($rolU==0){
                $_SESSION['error']="";
                header("LOCATION:Admin/index.php");
            }
            else if ($rolU==1){
                $_SESSION['error']="";
                header("LOCATION:User/index.php");
            }
            else{
                $_SESSION['error']="ERROR: Rol inexistente";
                header("LOCATION:./index.php");
            }
        }else{
            echo $bloqueado;
        }
    }else{
        $_SESSION['error']="ERROR: error de integridad en bbdd";
        header("LOCATION:./index.php");
    }
?>