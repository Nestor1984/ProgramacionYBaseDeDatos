<?php
require_once("autoload.php");

// Instancia de la clase Usuario para obtener la lista de usuarios
$objUsuario = new Usuario();
$users = $objUsuario->getUsuarios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Usuarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema de Usuarios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="agregar_usuario.php">Agregar Usuario</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="centered-container">
<div class="container mt-5">
    <h2 class="mb-4">Gestión de Usuarios</h2>

    <!-- Formulario para agregar usuario -->
    <form action="agregar_usuario.php" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </form>

    <br><br><br><br>
    <!-- Tabla para mostrar usuarios -->
    <table class="table mt-4">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nombre'] ?></td>
                <td><?= $user['telefono'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="editar_usuario.php?id=<?= $user['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="borrar_usuario.php?id=<?= $user['id'] ?>" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>


</body>
</html>
