<?php

$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$baseDeDatos = "pdonestor";
$puerto = 3307;

try {
    // Se hace una instancia de la clase PDO pasando la cadena de conexión como primer argumento
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos;port=$puerto", $usuario, $contrasenia); // "mysql:": Indica que se utilizara MySQL, "dbname=$baseDeDatos": Especifica el nombre de la bd, "host=$servidor": Especifica la dirección IP del servidor, "port=$puerto": Indica el número de puerto en el que el servidor MySQL está escuchando.
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Se usa setAttribute para establecer el atributo PDO::ATTR_ERRMODE en PDO::ERRMODE_EXCEPTION. Esto configura PDO para que lance excepciones en caso de errores.
    echo "Conexion establecida...";

    // Insertamos datos en la tabla alumnos
    $sql = "INSERT INTO alumnos(id, nombre, correo)
    VALUES (NULL, 'Oscar uh', 'uhperezoscar@gmail.com') ";

    $conexion->exec($sql); // Se ejecuta la sentencia SQL almacenada en la variable $sql utilizando el método exec()
    echo "<br>Datos insertados...";
    
} catch (PDOException $error) {
    echo "Error " . $error->getMessage();
}

?>