<?php
require_once("autoload.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    $objUsuario = new Usuario();
    $update = $objUsuario->updateUser($id, $nombre, $telefono, $email);

    if ($update) {
        header("Location: sistema.php");
    } else {
        echo "Error al actualizar usuario.";
    }
}
?>

<!-- Formulario para editar usuario -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Editar Usuario</h2>

    <?php
    // Obtener el ID del usuario de la URL
    $userId = isset($_GET['id']) ? $_GET['id'] : null;

    // Verificar si se proporcionó un ID válido
    if ($userId) {
        $objUsuario = new Usuario();
        $user = $objUsuario->getUser($userId);

        // Verificar si el usuario existe
        if ($user) {
    ?>
            <!-- Formulario para editar usuario -->
            <form action="editar_usuario.php" method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $user['nombre'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" value="<?= $user['telefono'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
    <?php
        } else {
            echo "Usuario no encontrado.";
        }
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
