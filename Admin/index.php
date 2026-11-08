<?php 
include('sesion.php') 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Pokémon TCG</title>
    <!-- ENLACE AL ARCHIVO CSS CORREGIDO -->
    <link rel="stylesheet" href="../css/styles_5.css">
</head>
<body>
    <header>
        <div class="logo-header-container">
            <img src="../imagenes/logo.png" alt="Pokémon Logo" class="logo-header" >
        </div>
    </header>

    <?php include("AdminNavbar.php"); ?>
    <!--Cuerpo de la página-->
    <section>
        <div class="contenedorCartas">
            <!--navbar del contenedor-->
            <div>
                <p>Cartas</p>
            </div>
            <a href="PasarCarta.php?aux=0" ></a>
            <!-- Ejemplo de Carta -->
            <?php
                include("../conexion.php");
                //Lógica del fichero
                $consulta="Select * from cartas WHERE dueño=".$_SESSION['idU'];

                $result=mysqli_query($conn,$consulta);
                if(mysqli_num_rows($result)<3){
                    $conta=0;
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
                    $i=0;
                    while ($row=mysqli_fetch_array($result)){
                        $id[$i]=$row['id'];
                        $ruta[$i]=$row['imagen'];
                        $estado[$i]=$row['estado'];
                        $i++;
                    }
                    
                    if(empty($_SESSION['posicion'])){
                        $_SESSION['posicion']=0;
                        $posicion=0;
                    }else{
                        $posicion=$_SESSION['posicion'];
                    }
                    for ($j=0; $j < 3; $j++) { 
                        $indice=($posicion+$j);

                        $calc = ($_SESSION['posicion'] + $j) % $i;

                        if ($calc < 0) {
                            $indice = $calc + $i; 
                        } else {
                            $indice = $calc; 
                        }
    
                       echo '<div class="carta">
                                <p class="state">'.$estado[$indice].'</p>
                                <div class="carta-frame">
                                    <img src="'.$ruta[$indice].'" alt="Carta Pokémon" class="carta-img">
                                </div>
                            </div>';
                    }
                }

                
            ?>
            <a href="PasarCarta.php?aux=0" class="flecha">→</a>
        </div>
    </section>
    <!--Footer con el logo e informacion legal-->
    <footer>
        <img src="../imagenes/logo.png" alt="Logo" class="logo-footer">
        <p class="copyright">®PokeVault. Todos los derechos reservados</p>
        <a class="ancla" href="#">⇮</a>
    </footer>
</body>
</html>