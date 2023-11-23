<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$baseDeDatos = "nestor";

// Creamos una instancia de la clase mysqli
$conexion = new mysqli($servidor, $usuario, $password, $baseDeDatos);

if ($conexion->connect_error) { // Si hay un error de conexión
    die("Error de conexion: " . $conexion->connect_error); // Muestra un mensaje de error y se termina la ejecución del script
}
echo "Conexion establecida...";

?>