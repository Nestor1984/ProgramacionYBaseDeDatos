<?php
include_once 'config.php';
include_once 'usuario.php';

$database = new Database();
$db = $database->getConnection();

$usuario = new Usuario($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario->id = $_POST['id'];
    $usuario->nombre = $_POST['nombre'];
    $usuario->email = $_POST['email'];
    $usuario->update();

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Editar Usuario</h2> <br>
    <form method="post" action="">
            <!--Leemos el id que se nos envia por el metodo get a traves de la URL-->
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar nuevo nombre..." required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar nuevo email..." required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>