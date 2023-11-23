<?php
include "conexion.php";

$sql = "DELETE FROM alumnos WHERE id > 3";

if ($conexion->query($sql) === TRUE) { // Si encuentro la conexion voy a ejecutar un query que va tener una sentencia sql y si esta sentencia sql se ejecuta correctamente
    echo "<br>Registro borrado";
}else{
    echo "<br>Hubo problemas de borrado " . $conexion->error;
}

?>