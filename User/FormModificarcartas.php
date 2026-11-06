<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cartas</title>
    <link rel="stylesheet" href="../css/formularios.css">
</head>
<body>
    <header>
        <div>
            <img src="./imagenes/logo.png" alt="">
        </div>
    </header>
    <section>
        <?php
            $id=$_GET['id']
        ?>
        <!--Contenedor principal donde estara el formulario de acceso-->
        <div class="contenedor">
            <div class="caja">
                <!--Formulario de acceso a la página web-->
                <div ><p class="error"></p></div>
                <form action="ModCart.php" method="POST" enctype="multipart/form-data">
                    <label for="">Imagen</label>
                    <input type="file" name="carta" required >
                    <!--Campo para insertar el estado-->
                    <label for="">Estado</label>
                    <input type="number" placeholder="(1-10)" name="state" max="10" min="1" required >
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <br>
                    <!--boton tipo 'submit' que envia el formulario-->
                    <input type="submit" value="Registrar carta" name="" >

                </form>
            </div>
        </div>
    </section>
</body>
</html>