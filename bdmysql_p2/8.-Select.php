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

    // Select...
    // Se prepara una sentencia SELECT para obtener todas las filas de la tabla "alumnos" y luego se ejecuta la sentencia.
    $sentencia = $conexion->prepare("SELECT * FROM alumnos "); 
    $sentencia->execute();

    $sentencia->setFetchMode(PDO::FETCH_ASSOC); // Aquí, se establece el modo de obtención de la sentencia en PDO::FETCH_ASSOC. Este modo de obtención indica que cada fila se obtendrá como un array asociativo.

    $resultado = $sentencia->fetchAll(); // Se obtiene todas las filas restantes del conjunto de resultados y las almacena en la variable $resultado como un array de arrays asociativos.

    // Mostramos los resgistros
    foreach ($resultado as $key => $registro) {
        echo "<br>Id: " . $registro['id'] . "<br>Nombre: " . $registro['nombre'] . "<br>Correo: " . $registro['correo'] . "<br>";
    }

} catch (PDOException $error) {
    echo "Error " . $error->getMessage();
}

?>