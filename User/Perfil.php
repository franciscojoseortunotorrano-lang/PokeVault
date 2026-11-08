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
    <link rel="stylesheet" href="../css/estilos_perfil.css">
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
        <div class="ficha-usuario">
            <div class="foto-perfil">
                <?php 
                    $consulta="SELECT fotoPerfil FROM `usuarios` WHERE id='".$_SESSION['idU']."'"; 
                    $result=mysqli_query($conn,$consulta);
                    $perfil=mysqli_fetch_array($result);
                    echo '<img src="../imagenes/perfil'.$perfil[0].'.png" alt="">';
                ?>
            </div>
            <div class="datos-usuario">
                <p class="nombre">
                    <?php 
                        $consulta="SELECT nombre FROM `usuarios` WHERE id='".$_SESSION['idU']."'"; 
                        $result=mysqli_query($conn,$consulta);
                        $nom=mysqli_fetch_array($result);
                        echo $nom[0];
                    ?>
                </p>
                <p class="rol">Usuario</p>
                <p class="numero-cartas"> 
                    <?php 
                        $consulta="SELECT COUNT(*) FROM `cartas` WHERE dueño='".$_SESSION['idU']."'"; 
                        $result=mysqli_query($conn,$consulta);
                        $cant=mysqli_fetch_array($result);
                        echo $cant[0];
                    ?>
                </p>
                <p class="media-estado-cartas"> 
                    <?php 
                        $consulta="SELECT AVG(estado) FROM `cartas` WHERE dueño='".$_SESSION['idU']."'"; 
                        $result=mysqli_query($conn,$consulta);
                        $media=mysqli_fetch_array($result);
                        echo round($media[0],2);
                    ?>
                </p>
            </div>
            <div class="Cartas-favoritas">
                <?php
                    $consulta="Select * from cartas WHERE dueño='".$_SESSION['idU']."' AND favorita='1'";

                    $result=mysqli_query($conn,$consulta);
                    $conta=0;
                    if(mysqli_num_rows($result)!=0){
                        while ($row=mysqli_fetch_array($result)){
                            $ruta=$row['imagen'];
                            $estado=$row['estado'];
                            echo '<div class="carta">
                                    <p class="state">'.$estado.'</p>
                                    <div class="carta-frame">
                                        <img src="'.$ruta.'" alt="Carta Pokémon" class="carta-img">
                                    </div>
                                </div>';
                            $conta++;
                            if($conta>=3){
                                break;
                            }
                        }
                    }else{
                        echo "<p class='sin-favoritas'>Aun no tienes cartas favoritas</p>";
                    }
                ?>
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