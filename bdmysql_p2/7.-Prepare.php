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

    // Prepare
    $sentencia = $conexion->prepare("INSERT INTO alumnos(id, nombre, correo)
    VALUES(NULL, :nombre, :correo) "); // Esta sentencia SQL contiene marcadores de posición con nombre (:nombre y :correo) en lugar de valores reales
    
    //Aqui se vinculan las variables $nombre y $correo a los marcadores de posición utilizando el método bindParam() 
    $sentencia->bindParam(":nombre", $nombre); 
    $sentencia->bindParam(":correo", $correo);

    // Se asignan valores a las variables $nombre y $correo con los datos de los registros que se van a insertar en la tabla.
    $nombre = "Oscar0";
    $correo = "uhperezoscar0@gamil.com";
    $sentencia->execute(); // Se llama al método execute() de la clase PDOStatement para ejecutar la sentencia preparada

    // Se asignan valores a las variables $nombre y $correo con los datos de los registros que se van a insertar en la tabla.
    $nombre = "Oscar1";
    $correo = "uhperezoscar1@gamil.com";
    $sentencia->execute(); // Se llama al método execute() de la clase PDOStatement para ejecutar la sentencia preparada

    // Se asignan valores a las variables $nombre y $correo con los datos de los registros que se van a insertar en la tabla.
    $nombre = "Oscar2";
    $correo = "uhperezoscar2@gamil.com";
    $sentencia->execute(); // Se llama al método execute() de la clase PDOStatement para ejecutar la sentencia preparada
    
} catch (PDOException $error) {
    echo "Error " . $error->getMessage();
}

?>