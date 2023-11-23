<?php # 2 

$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$baseDeDatos = "pdonestor";
$puerto = 3307;

// Se hace una instancia de la clase PDO pasando la cadena de conexión como primer argumento
$conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos;port=$puerto", $usuario, $contrasenia); // "mysql:": Indica que se utilizara MySQL, "dbname=$baseDeDatos": Especifica el nombre de la bd, "host=$servidor": Especifica la dirección IP del servidor, "port=$puerto": Indica el número de puerto en el que el servidor MySQL está escuchando.
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Se usa setAttribute para establecer el atributo PDO::ATTR_ERRMODE en PDO::ERRMODE_EXCEPTION. Esto configura PDO para que lance excepciones en caso de errores.

// INSERT INTO
if ($_POST) { // Si se ha enviado una solicitud HTTP POST
    // Preparamos nuestra instruccion sql
    $sentencia = $conexion->prepare("INSERT INTO tareas(id, tarea) VALUES (NULL, :tarea) "); // Se insertará un valor NULL en la columna id y el valor proporcionado en la variable :tarea en la columna tarea.
    $sentencia->bindParam(":tarea", $tarea); // Vincular el parámetro :tarea de la consulta preparada a la variable $tarea utilizando el método bindParam() 

    // Leemos el dato
    $tarea = $_POST["tarea"];

    $sentencia->execute(); // Ejecutar la consulta preparada
    echo "<br>Registro agregado<br>";

    // Redireccionar al usuario a una página desconocida utilizando el encabezado HTTP
    header("Location:?"); // Para que se deje de insertar cada vez que refresquemos la pagina
}

// DELETE FROM
if ($_GET) { // Si hay un envio a traves de get
    // Preparamos nuestra instruccion sql
    $sentencia = $conexion->prepare("DELETE FROM tareas WHERE id = :id "); //  Esta línea prepara una sentencia SQL utilizando la tabla tareas y el parámetro :id
    $sentencia->bindParam(":id", $id); // Vincular el parámetro :id de la consulta preparada a la variable $id utilizando el método bindParam() 

    // Leemos el dato
    $id = $_GET['id'];

    $sentencia->execute(); // Ejecutar la consulta preparada

    // Redireccionar al usuario a una página desconocida utilizando el encabezado HTTP
    header("Location:?"); // Para que se deje de insertar cada vez que refresquemos la pagina 
}

$sentencia = $conexion->prepare("SELECT * FROM tareas"); // Preparar una consulta SQL utilizando la conexión $conexion
$sentencia->execute(); // Ejecutar la consulta

$resultado = $sentencia->setFetchMode(PDO::FETCH_ASSOC); // Esto indica que queremos obtener los resultados como un array asociativo.
$datos = $sentencia->fetchAll(); // Esto devuelve un array que contiene todas las filas restantes como arrays asociativos.

?>