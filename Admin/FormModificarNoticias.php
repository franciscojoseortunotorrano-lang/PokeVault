<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Noticias</title>
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
            $id=$_GET['id'];

             include ("../conexion.php");
             $consulta = "Select * FROM noticias WHERE id='$id'";

            $result=mysqli_query($conn,$consulta);
            $row=mysqli_fetch_array($result);

            $titulo=$row['titulo'];
            $cuerpo=$row['cuerpo'];

        ?>
        <!--Contenedor principal donde estara el formulario de acceso-->
        <div class="contenedor">
            <div class="caja">
                <!--Formulario de acceso a la página web-->
                <div ><p class="error"></p></div>
                <form action="ModNoticias.php" method="POST" enctype="multipart/form-data">
                    <label for="">Titulo</label>
                    <input type="text" name="titulo" required placeholder="Titulo..." value="<?php echo $titulo ?>">

                    <br>
                    <!--Campo para insertar la constraseña-->
                    <label for="">Cuerpo de la Noticia</label>
                    <textarea name="cuerpo" id="cuerpo" placeholder="Maximo 255 caracteres..." maxlength="255"  rows="4" cols="55"><?php echo $cuerpo ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <br>
                    <!--boton tipo 'submit' que envia el formulario-->
                    <input type="submit" value="Guardar Noticia" name="" >

                </form>
            </div>
        </div>
    </section>
</body>
</html>