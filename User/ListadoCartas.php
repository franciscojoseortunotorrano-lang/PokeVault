<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cartas - Pokémon TCG</title>
    <link rel="stylesheet" href="../css/styles_gestion.css">
</head>
<body>
    <!-- Header: Logo principal -->
    <header>
        <div class="logo-header-container">
            <img src="../imagenes/logo.png" alt="Pokémon Logo" class="logo-header">
        </div>
    </header>

    <!-- Barra de navegación con botón hamburguesa -->
    <?php include("UserNavbar.php") ?>

    <!-- Sección principal: Rejilla de cartas -->
    <section>
        <div class="nav-menu-content">
            <a href="#" class="navbar-Cartas">Añadir</a>
        </div>
        <div class="contenedorCartas">
            <!-- Carta 1 -->
            <div class="carta">
                <div class="carta-frame">
                    <img src="../imagenes/1.png" alt="Carta Pokémon" class="carta-img">
                </div>
                <div class="carta-acciones">
                    <a href="#" class="btn-modificar">Modificar</a>
                    <a href="#" class="btn-eliminar">Eliminar</a>
                </div>
            </div>

            <!-- Carta 2 -->
            <div class="carta">
                <div class="carta-frame">
                    <img src="../imagenes/2.png" alt="Carta Pokémon" class="carta-img">
                </div>
                <div class="carta-acciones">
                    <a href="#" class="btn-modificar">Modificar</a>
                    <a href="#" class="btn-eliminar">Eliminar</a>
                </div>
            </div>

            <!-- Carta 3 -->
            <div class="carta">
                <div class="carta-frame">
                    <img src="../imagenes/3.png" alt="Carta Pokémon" class="carta-img">
                </div>
                <div class="carta-acciones">
                    <a href="#" class="btn-modificar">Modificar</a>
                    <a href="#" class="btn-eliminar">Eliminar</a>
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