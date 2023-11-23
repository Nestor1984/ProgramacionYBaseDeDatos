<?php
include_once 'config.php';
include_once 'usuario.php';

$database = new Database();
$db = $database->getConnection();

$usuario = new Usuario($db);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $usuario->id = $_GET['id'];
    $usuario->delete();

    header('Location: index.php');
}
?>
