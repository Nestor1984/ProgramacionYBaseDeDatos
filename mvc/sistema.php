<?php
require_once("autoload.php");

$objUsuario = new Usuario();

// Insertar usuario
//$insert = $objUsuario->insertUsuario("Jorge", 78987898, "jorge@info.com");
//echo $insert;
//
// Extrae todos los registros
$users = $objUsuario->getUsuarios();
print_r("<pre>");
print_r($users);
print_r("</pre>");

$udpateUser = $objUsuario->updateUser(2, "Roberto Arana", 134534534, "rarana@info.com");
echo $udpateUser;

$user = $objUsuario->getUser(2);
print_r("<pre>");
print_r($user);
print_r("</pre>");

$delete = $objUsuario->deluser(2);
echo $delete;

?>