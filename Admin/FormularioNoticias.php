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
        <!--Contenedor principal donde estara el formulario de acceso-->
        <div class="contenedor">
            <div class="caja">
                <!--Formulario de acceso a la página web-->
                <div ><p class="error"></p></div>
                <form action="NewNoticia.php" method="POST" enctype="multipart/form-data">
                    <!--Campo para insertar el nombre de usuario-->
                    <label for="">Titulo</label>
                    <input type="text" name="titulo" required placeholder="Titulo...">

                    <br>
                    <!--Campo para insertar la constraseña-->
                    <label for="">Cuerpo de la Noticia</label>
                    <textarea name="cuerpo" id="cuerpo" placeholder="Maximo 255 caracteres..." maxlength="255"  rows="4" cols="55"></textarea>

                    <br>
                    <!--boton tipo 'submit' que envia el formulario-->
                    <input type="submit" value="Guardar Noticia" name="" >


                </form>
            </div>
        </div>
    </section>
</body>
</html>