<?php include('sesion.php') ?>
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
    <?php include("AdminNavbar.php"); ?>

    <!-- Sección principal: Rejilla de cartas -->
    <section>
        <div class="contenedorCartas">
            <!-- Carta 1 -->
            <?php
                include("../conexion.php");
                $id=$_GET['id'];
                //Lógica del fichero
                $consulta="Select * from cartas WHERE dueño='".$id."'";

                $result=mysqli_query($conn,$consulta);

                if(mysqli_num_rows($result)!=0){
                    while ($row=mysqli_fetch_array($result)){
                        $ruta=$row['imagen'];
                        $estado=$row['estado'];
                        $id =$row['id'];
                        $carta= '<div class="carta">
                                    <p class="state">'.$estado.'</p>
                                    <div class="carta-frame">
                                        <img src="'.$ruta.'" alt="Carta Pokémon" class="carta-img">
                                    </div>';

                        if($row['favorita']==0){
                            $carta = $carta.'<a href="altFav.php?id='.$id.'&aux=1" class="nofav">☆</a>';
                        }else{
                            $carta = $carta.'<a href="altFav.php?id='.$id.'&aux=0" class="fav">★</a>';
                        }
                            
                        $carta = $carta.'<div class="carta-acciones">
                                        <a href="BorrarCartaAgena.php?id='.$row['id'].'" class="btn-eliminar">Eliminar</a>
                                    </div>
                                </div>';
                        echo $carta; 
                        
                    }
                }else{
                    echo "<p class='mensaje'>Este usuario no pose ninguna carta</p>";
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