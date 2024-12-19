<?php

//Importar la conexion
require 'includes/config/database.php';
$db = conectarBD();

//Crear un email y password
$email = 'correo@correo.com';
$contrasenya = '123456';

$contrasenyaHash = password_hash($contrasenya, PASSWORD_BCRYPT);

//Query para crear el usuario
$query = " INSERT INTO usuarios (email, contrasenya) VALUES ('$email', '$contrasenyaHash'); ";

//exit;
//Agregarlo a la base de datos
mysqli_query($db, $query);