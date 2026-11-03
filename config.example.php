<?php
$servidor="Servidor";
$user="Usuario";
$clave="Contraseña";
$basededatos="Nombre Base de Datos";
//Establecimiento de la conexión al servidor, 
//con el usuario y clave
$conn= mysqli_connect($servidor,$user,$clave);
//Seleccionamos la base de datos
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_select_db($conn,$basededatos);
//Imprimimos si hay algún error
echo mysqli_error($conn);
?>