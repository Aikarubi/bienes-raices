<?php

// Importar la conexión
require '../includes/config/database.php';
$db = conectarBD();

// Escribir la query
$query = "SELECT * FROM propiedades";

// Consultar la BD
$resultados = mysqli_query($db, $query);

// Muestra mensaje condicional
$mensaje = $_GET['mensaje'] ?? null; //Si no existe la variable se le da el valor de null

// Incluye un template
require '../includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if (intval($mensaje) === 1): ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php endif; ?>

    <a href="../admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody> <!-- Mostrar los resultados -->
            <tr>
                <td>1</td>
                <td>Casa en venta frente al bosque</td>
                <td><img src="/bienes-raices-php/build/img/destacada.webp" class="imagen-tabla" alt="imagen casa"></td>
                <td>$3.000.000</td>
                <td>
                    <a href="#" class="boton-amarillo-block">Actualizar</a>
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>

</main>

<?php

// Cerrar la conexión

incluirTemplate('footer');

?>