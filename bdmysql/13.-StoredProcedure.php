<?php
// Stored procedure = Procedimiento almacenado
/*
Query:
DELIMITER $$
CREATE PROCEDURE obtenerNombre()
BEGIN
SELECT nombre as dato FROM alumnos;
END$$
DELIMITER ;
*/

$servidor = "localhost";
$usuario = "root";
$password = "";
$baseDeDatos = "nestor";

// Creamos una instancia de la clase mysqli
$conexion = new mysqli($servidor, $usuario, $password, $baseDeDatos);

$resultado = $conexion->query("CALL obtenerNombre()"); // CALL obtenerNombre(): invocamos al procedimiento almacenado

while($fila = $resultado->fetch_assoc()){ // fetch_assoc: Este metodo nos va servir para que nos devuelta toda la informacion del CALL obtenerNombre() y lo almacene en fila

    echo "<br>Dato: " . $fila['dato'] . "<br>"; // $fila['nombreDeLaColumnaOAlias']

}

?>