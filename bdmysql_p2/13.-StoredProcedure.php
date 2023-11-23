<?php
/*
NOTA: Los procedimientos almacenados son como funciones en programacion.

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerNombre`()
BEGIN
  SELECT nombre as dato FROM alumnos;
END$$
DELIMITER ;
 */

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

    // Stored Procedure (procedimiento almacenado)
    $sentencia = $conexion->prepare("CALL obtenerNombre() "); 
    $sentencia->execute();

    $resultado = $sentencia->fetchAll(); // Se obtiene todas las filas restantes del conjunto de resultados y las almacena en la variable $resultado como un array de arrays asociativos.

    // Mostramos los resgistros
    echo "<br>";
    print_r($resultado);

} catch (PDOException $error) {
    echo "Error " . $error->getMessage();
}

?>

