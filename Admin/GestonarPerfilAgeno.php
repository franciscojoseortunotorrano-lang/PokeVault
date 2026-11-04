<?php include('sesion.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Pokémon TCG</title>
    <!-- ENLACE AL ARCHIVO CSS CORREGIDO -->
    <link rel="stylesheet" href="../css/styles_perfil (2).css">
</head>
<body>
    <header>
        <div class="logo-header-container">
            <img src="../imagenes/logo.png" alt="Pokémon Logo" class="logo-header">
        </div>
    </header>

    <?php include("AdminNavbar.php"); ?>

    <!-- Cuerpo de la página: Sección Noticias -->
    <section>
        <div class="ficha-usuario">
            <div class="foto-perfil">
                <img src="../imagenes/foto.png" alt="">
            </div>
            <div class="datos-usuario">
                <p class="nombre">nombre usuario</p>
                <p class="apellidos">Apellidos</p>
                <p class="rol">rol</p>
                <p class="numero-cartas">999</p>
                <p class="media-estado-cartas">PSA: 8.9</p>
            </div>
                <div class="nav-menu-content">
                    <div class="user-profile">
                        <img src="../imagenes/foto.png" alt="Foto usuario" class="user-avatar">
                        <a class="user-name" href="#">Nombre Otro Usuario</a>
                    </div>
                    <div class="nav-links">
                        <a href="./ListadoCartasAgeno.html">Cartas</a>
                        <button>Bloquear</button>
                    </div>
                </div>
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