<?php
require_once("autoload.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    $objUsuario = new Usuario();
    $insert = $objUsuario->insertUsuario($nombre, $telefono, $email);

    if ($insert) {
        echo "Usuario insertado con éxito. ID: " . $insert;
        header("Location: sistema.php");
    } else {
        echo "Error al insertar usuario.";
    }
}
?>

