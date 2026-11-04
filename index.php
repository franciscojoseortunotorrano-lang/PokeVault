<?php

session_start();
$_SESSION['passDif'] = "";
$_SESSION['user'] = "";
$_SESSION['email'] = "";
$_SESSION['exist'] = "";
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
                    if(!empty($_SESSION['error'])){
                        echo $_SESSION['error'];
                    }                           
                
                ?></p></div>
                <form action="accesoBD.php" method="post">
                    <!--Campo para insertar el nombre de usuario-->
                    <label for="">Usuario</label>
                    <input type="text" name="user" required value="<?php if(!empty($_SESSION['nombreU'])){echo $_SESSION['nombreU'];}  ?>">

                    <br>
                    <!--Campo para insertar la constraseña-->
                    <label for="">Contraseña</label>
                    <input type="password" placeholder="contraseña" name="pass" required>

                    <br>
                    <!--boton tipo 'submit' que envia el formulario-->
                    <input type="submit" value="Iniciar sesión" name="" >

                </form>

                <div><a href="./Registro.php" class="enlace">Registrate</a></div>
            </div>
        </div>
    </section>
</body>
</html>