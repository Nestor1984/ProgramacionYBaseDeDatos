<?php
require_once("autoload.php");

// Verificar si se proporcionó un ID de usuario válido
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $objUsuario = new Usuario();
    $delete = $objUsuario->deluser($userId);

    if ($delete) {
        header("Location: sistema.php");
    } else {
        echo "Error al eliminar usuario.";
        exit();
    }
}
?>
