<?php 
    include('sesion.php') ;
    include("../conexion.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Pokémon TCG</title>
    <!-- ENLACE AL ARCHIVO CSS CORREGIDO -->
    <link rel="stylesheet" href="../css/styles_noticias.css">
</head>
<body>
    <header>
        <div class="logo-header-container">
            <img src="../imagenes/logo.png" alt="Pokémon Logo" class="logo-header">
        </div>
    </header>

    <?php include("UserNavbar.php") ?>

    <!-- Cuerpo de la página: Sección Noticias -->
    <section>
        <div class="contenedor-Noticias">
            <!-- Navbar del contenedor de noticias (Filtrar) -->
            <!--<div>
                <a href="#">Filtrar</a>
            </div>-->

            <!-- Ejemplo de Noticia 1 -->
            <?php
                //Lógica del fichero
                $consulta="Select * from noticias";

                $result=mysqli_query($conn,$consulta);

                while ($row=mysqli_fetch_array($result)){
                    $titulo=$row['titulo'];
                    $cuerpo=$row['cuerpo'];
                    $id=$row["id"];
                    $fecha=$row['publicado'];
                    echo    
                            "<div class='noticia'>
                                <div class='noticias-frame'>
                                    <h3>$titulo</h3>
                                    <p class='cuerpo-Noticia'>$cuerpo</p>
                                </div>
                                <div class='noticia-pie'>
                                    <span class='fecha'>$fecha</span>
                                </div>
                            </div>";
                    
                }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <img src="../imagenes/logo.png" alt="Logo" class="logo-footer">
        <p class="copyright">®PokeVault. Todos los derechos reservados</p>
        <a class="ancla" href="#">⇮</a>
    </footer>
</body>
</html>