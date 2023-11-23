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

$sql = "INSERT INTO alumnos (id, nombre, correo)
VALUES (NULL, 'Oscar Uh', 'uhperezoscar@gmail.com')";

if ($conexion->query($sql) == TRUE) { // Si encuentro la conexion voy a ejecutar un query que va tener una sentencia sql y si esta sentencia sql se ejecuta correctamente
    echo "<br>Registro agregado.";
}else{
    echo "<br>Hubo un error " . $conexion->error;
}
$conexion->close(); // Cerramos la conexion a la base de datos

?>