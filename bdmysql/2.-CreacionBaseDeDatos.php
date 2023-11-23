<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

// Creamos una instancia de la clase mysqli
$conexion = new mysqli($servidor, $usuario, $password);

if ($conexion->connect_error) { // Si hay un error de conexión
    die("Error de conexion: " . $conexion->connect_error); // Muestra un mensaje de error y se termina la ejecución del script
}
echo "Conexion establecida...";

$sql = "CREATE DATABASE nestor";

if($conexion->query($sql) === TRUE){ // Si encuentro la conexion voy a ejecutar un query que va tener una sentencia sql y si esta sentencia sql se ejecuta correctamente
    echo "<br>Base de datos creada";
}else {
    echo "<br>Error " . $conexion->error;
}

?>