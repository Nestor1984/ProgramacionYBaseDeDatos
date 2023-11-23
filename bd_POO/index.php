<?php
include_once 'config.php';
include_once 'usuario.php';

$database = new Database();
$db = $database->getConnection();

$usuario = new Usuario($db);
$stmt = $usuario->read();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP y MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Agregar Usuario</a>
            </li>
            <!-- Agrega aquí enlaces a otras páginas si es necesario -->
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <h2>Lista de Usuarios</h2> <br>
    <a href="create.php" class="btn btn-primary mb-3">Agregar Usuario</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

<!--
create table usuarios(
	id int AUTO_INCREMENT,
    nombre varchar(60),
    email varchar(60),
    constraint PK_idUsuarios primary key(id)
);
-->