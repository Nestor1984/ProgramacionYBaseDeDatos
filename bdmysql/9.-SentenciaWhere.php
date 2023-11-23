<?php
include "conexion.php";

$sql = "SELECT * FROM alumnos WHERE correo = 'josueuh@gmail.com'";

$resultado = $conexion->query($sql);  // Se ejecuta la consulta utilizando el método query

if ($resultado->num_rows > 0) { // "si el número de filas en el conjunto de resultados es mayor que cero
    echo "<br>Registros encontrados<br>";
    while($fila=$resultado->fetch_assoc()){ // fetch_assoc: Este metodo nos va servir para que nos devuelta toda la informacion del select y lo almacene en fila
        echo "id: " . $fila['id'] . " Nombre: " . $fila['nombre'] . " Correo: " . $fila['correo'] . "<br>";
    }
}else{
    echo "<br>No hay registros";
}

?>