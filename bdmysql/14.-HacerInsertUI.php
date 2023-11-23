<?php # 2

$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$baseDeDatos = "nestor";

$conexion = new mysqli($servidor, $usuario, $contrasenia, $baseDeDatos);

if ($conexion->connect_error) { // Si hay un error de conexión
    die("No se conecto " . $conexion->connect_error); // Muestra un mensaje de error y se termina la ejecución del script
}

if ($_POST) { // Si se ha enviado una solicitud HTTP POST
    $tarea = $_POST['tarea'];
    // A continuación, se prepara una sentencia SQL utilizando la función prepare de PDO
    $stmt = $conexion->prepare("INSERT INTO tareas(id, tarea) VALUES (NULL, ?)"); // ? es un marcador de posición para el valor de $tarea
    $stmt->bind_param("s", $tarea); // El primer argumento de bind_param especifica el tipo de dato del valor a vincular, en este caso, "s" indica que el valor es una cadena y el segundo argumento vincula el valor de $tarea al marcador de posición en la sentencia SQL.
    $stmt->execute(); // Se ejecuta la consulta preparada utilizando el método execute.
    echo "<br>Se ha insertado un registro a la base de datos";
}

# 3 | TEMA NUEVO: DELETE PHP MYSQL PARA LA APP
if ($_GET) { // Si hay un envio a traves de get
    $id = $_GET['id'];
    $stmt = $conexion->prepare("DELETE FROM tareas WHERE id=?"); // ? es un marcador de posición para el valor de $tarea
    $stmt->bind_param("s", $id); // El primer argumento de bind_param especifica el tipo de dato del valor a vincular, en este caso, "s" indica que el valor es una cadena y el segundo argumento vincula el valor de $id al marcador de posición en la sentencia SQL.
    $stmt->execute();
}

$sql = "SELECT * FROM tareas order By id asc";
$resultado = $conexion->query($sql);
$datos = $resultado->fetch_all(); // Se utiliza el método "fetch_all()" para obtener todas las filas del resultado y almacenarlas en la variable "$datos" 

?>