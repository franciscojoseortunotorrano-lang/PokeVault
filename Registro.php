<?php
session_start();
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
                <form action="./ComprobacionRegistro.php" method="post">
                    <!--Campo para insertar el nombre de usuario-->
                    <label for="">Nombre de Usuario</label>
                    <input type="text" name="user" value="<?php echo $_SESSION['user'] ?>" required>
                    <br>
                    <label for="">Correo Electrónico</label>
                    <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" required>
                    <br>
                    <!--Campo para insertar la constraseña-->
                    <label for="">Contraseña</label>
                    <input type="password" placeholder="contraseña" name="pass" maxlength="20" required>
                    <br>
                    <!--boton tipo 'submit' que envia el formulario-->
                    <input type="submit" value="Registrar">

                </form>
            </div>
        </div>
    </section>
</body>
</html>