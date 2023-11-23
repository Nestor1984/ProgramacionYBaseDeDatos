<?php
include "conexion.php";

// Concatenamos las 3 consultas
$sql = "INSERT INTO alumnos (id, nombre, correo)
VALUES (NULL, 'Oscar Uh 0', 'uhperezoscar@gmail.com');";

$sql .= "INSERT INTO alumnos (id, nombre, correo)
VALUES (NULL, 'Oscar Uh 1', 'uhperezoscar@gmail.com');";

$sql .= "INSERT INTO alumnos (id, nombre, correo)
VALUES (NULL, 'Oscar Uh 2', 'uhperezoscar@gmail.com');";

if ($conexion->multi_query($sql) == TRUE) { // Si encuentro la conexion voy a ejecutar un multi query que va tener una sentencia sql y si esta consulta múltiple se ejecuta correctamente 
    $id = $conexion->insert_id; // insert_id:  es una propiedad de la clase mysqli que devuelve el ID autogenerado que se utilizó en la última consulta de inserción
    echo "<br>Registro agregado con el id: " . $id;
}else{
    echo "<br>Hubo un error " . $conexion->error;
}
$conexion->close(); // Cerramos la conexion a la base de datos


?>