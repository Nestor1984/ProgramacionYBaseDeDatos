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

$sql = "CREATE TABLE alumnos(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    correo VARCHAR(50) NOT NULL
);";

if ($conexion->query($sql) == TRUE) { // Si encuentro la conexion voy a ejecutar un query que va tener una sentencia sql y si esta sentencia sql se ejecuta correctamente
    echo "<br>Tabla creada";
}else{
    echo "<br>Hubo un error";
}

?>