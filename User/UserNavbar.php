<nav>
        <!-- Interruptor para menú hamburguesa en pantallas pequeñas -->
        <input type="checkbox" id="menu-toggle" class="menu-toggle-checkbox">
        <label for="menu-toggle" class="menu-toggle-btn" aria-label="Abrir o cerrar menú">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </label>

        <!-- Contenedor del menú superior -->
        <div class="nav-menu-content">
            <div class="nav-links">
                <a href="./ListadoCartas.php">Cartas</a>
                <a href="./Perfil.php">Perfil</a>
                <a href="./Noticias.php">Noticias</a>
            </div>

            <div class="user-profile">
                <img src="../imagenes/foto.png" alt="Foto usuario" class="user-avatar">
                
                <select class="user-select" onchange="if(this.value) window.location.href=this.value;">
                    <!-- Opción por defecto que muestra el nombre del usuario -->
                    <option value="" disabled selected hidden>
                        Nombre de Usuario
                    </option>
                    <option value="./Perfil.php">Perfil</option>
                    <option value="../cierreSesion.php">Cerrar sesión</option>
                </select>
            </div>
        </div>
    </nav>