<?php
include "conexion.php";

$sql = "INSERT INTO alumnos (id, nombre, correo)
VALUES (NULL, 'Oscar Uh', 'uhperezoscar@gmail.com')";

if ($conexion->query($sql) == TRUE) { // Si encuentro la conexion voy a ejecutar un query que va tener una sentencia sql y si esta sentencia sql se ejecuta correctamente
    $id = $conexion->insert_id; // insert_id:  es una propiedad de la clase mysqli que devuelve el ID autogenerado que se utilizó en la última consulta de inserción
    echo "<br>Registro agregado con el id: " . $id;
}else{
    echo "<br>Hubo un error " . $conexion->error;
}
$conexion->close(); // Cerramos la conexion a la base de datos


?>