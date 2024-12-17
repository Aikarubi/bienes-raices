<?php

//Importar la conexion
require 'includes/config/database.php';
$db = conectarBD();

//Crear un email y password
$email = 'correo@correo.com';
$contrasenya = '123456';

//Query para crear el usuario
$query = " INSERT INTO usuarios (email, contrasenya) VALUES ('$email', '$contrasenya'); ";

//Agregarlo a la base de datos
mysqli_query($db, $query);