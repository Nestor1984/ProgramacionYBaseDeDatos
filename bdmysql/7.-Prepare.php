<?php
include "conexion.php";

// Prepare:  La instrucción preparada es una consulta SQL que se prepara una vez y se ejecuta varias veces con diferentes parámetros
$instruccion = $conexion->prepare("INSERT INTO
alumnos (id, nombre, correo) VALUES(NULL, ?, ?)"); // Con ?: dejamos espacios para reemplazarlos con una variable

// bind_param: Se utiliza el método bind_param para vincular los parámetros de la consulta preparada. En este caso, se utilizan dos parámetros de tipo cadena ('s') para los valores de "nombre" y "correo". Los valores de estos parámetros se establecerán más adelante.
$instruccion->bind_param("ss", $nombre, $correo);

// Definir los valores de los parámetros
$nombre = "Josue";
$correo = "josueuh@gmail.com";
$instruccion->execute(); // Ejecutar la instrucción preparada

$nombre = "Josue 1";
$correo = "josueuh1@gmail.com";
$instruccion->execute(); 

$nombre = "Josue 2";
$correo = "josueuh2@gmail.com";
$instruccion->execute(); 

$conexion->close(); // Cerramos la conexion a la base de datos


?>