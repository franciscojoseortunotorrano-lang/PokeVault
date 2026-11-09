<?php 
include('sesion.php') ;
include('../conexion.php') ;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Pokémon TCG</title>
    <!-- ENLACE AL ARCHIVO CSS CORREGIDO -->
    <link rel="stylesheet" href="../css/styles_Gestion_usuarios.css">
</head>
<body>
    <header>
        <div class="logo-header-container">
            <img src="../imagenes/logo.png" alt="Pokémon Logo" class="logo-header">
        </div>
    </header>

    <?php include("AdminNavbar.php"); ?>

    <!-- Cuerpo de la página: Sección Gestion de usuarios -->
    <section>
        <div class="contenedorBuscador">
            <form action="buscar.php" class="buscador" method="post">
                <input type="text" name="busqueda" id="busqueda" placeholder="Usuario o id de usuario">
                <input type="submit" value="🔍 Buscar">
            </form>
        </div>
        <div class="panelUsuarios">
            <?php
                if(isset($_SESSION['otherUser'])){
                    $otherUser=$_SESSION['otherUser'];
                }else{
                    $otherUser=-1;
                }
                if($otherUser==-1){
                    $consulta= "SELECT * FROM usuarios WHERE rol=1";

                    $result=mysqli_query($conn, $consulta);
                    while($row=mysqli_fetch_array($result)){
                        echo '<div class="usuario">
                            <span class="foto-perfil"><img src="../imagenes/perfil'.$row["fotoPerfil"].'.png" alt=""></span>
                            <a href="#">'.$row["nombre"].'</a>
                            <a class="bloquear">Bloquear</a>
                        </div>';
                    }
                }else{
                    $consulta= "SELECT * FROM usuarios WHERE id='".$otherUser."'";
    
                    $result=mysqli_query($conn, $consulta);
                    while($row=mysqli_fetch_array($result)){
                        echo '<div class="usuario">
                            <span class="foto-perfil"><img src="../imagenes/perfil'.$row["fotoPerfil"].'.png" alt=""></span>
                            <a href="#">'.$row["nombre"].'</a>
                            <a class="bloquear">Bloquear</a>
                        </div>';
                    }
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