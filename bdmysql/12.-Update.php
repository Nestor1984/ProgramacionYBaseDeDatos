<?php
include "conexion.php";

$sql = "UPDATE alumnos SET nombre = 'Oscar' WHERE id = 2";

if ($conexion->query($sql) === TRUE) { // Si encuentro la conexion voy a ejecutar un query que va tener una sentencia sql y si esta sentencia sql se ejecuta correctamente
    echo "<br>Registro actualizado";
}else{
    echo "<br>Hubo problemas: " . $conexion->error;
}

?>