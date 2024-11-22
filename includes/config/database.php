<?php

function conectarBD() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    /*if ($db) {
        echo "Se conectó";
    } else {
        echo "No se conectó";
    }*/

    if (!$db) {
        echo "Error: No se pudo conectar a MySQL.";
        exit;
    }

    return $db;
}