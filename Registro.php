<?php

session_start();
$_SESSION['error']="";
$_SESSION['nombreU']="";
if(empty($_SESSION['recarga'])){
    $_SESSION['exist']="";
    $_SESSION['passDif']="";
}
$_SESSION['recarga']="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <div>
            <img src="./imagenes/logo.png" alt="">
        </div>
    </header>
    <section>
        <!--Contenedor principal donde estara el formulario de acceso-->
        <div class="contenedor">
            <div class="caja">
                <!--Formulario de acceso a la página web-->
                <div ><p class="error"><?php 
                    if(!empty($_SESSION['exist'])){
                        echo "El usuario o el email ya existe, elija otro";
                    }              
                    if(!empty($_SESSION['passDif'])){
                        echo "La contraseña confirmada no es igual a la contraseña";
                    }              
                
                ?></p></div>
                <form action="./ComprobacionRegistro.php" method="post">
                    <!--Campo para insertar el nombre de usuario-->
                    <label for="">Nombre de Usuario</label>
                    <input type="text" name="user" value="<?php if(!empty($_SESSION['user'])){echo $_SESSION['user'];} ?>" required>
                    <br>
                    <!--Campo para insertar el correo eletrónico-->
                    <label for="">Correo Electrónico</label>
                    <input type="email" name="email" value="<?php if(!empty($_SESSION['email'])){echo $_SESSION['email'];} ?>" required>
                    <br>
                    <!--Campo para insertar la constraseña-->
                    <label for="">Contraseña</label>
                    <input type="password" placeholder="contraseña" name="pass" maxlength="20" minlength="8" required>
                    <br>
                    <!--Campo para confirmar la contraseña-->
                    <label for="">Confirma la contraseña</label>
                    <input type="password" placeholder="confirmacion contraseña" name="confirmPass" maxlength="20" minlength="8" required>
                    <br>
                    <!--boton tipo 'submit' que envia el formulario-->
                    <input type="submit" value="Registrar">

                </form>
                <div><a href="./index.php" class="enlace">Iniciar Sesion</a></div>
            </div>
        </div>
    </section>
</body>
</html>