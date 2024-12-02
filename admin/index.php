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
            <?php while( $propiedades = mysqli_fetch_assoc($resultados)): ?>
            <tr>
                <td><?php echo $propiedades['id']; ?></td>
                <td><?php echo $propiedades['titulo']; ?></td>
                <td><img src="/bienes-raices-php/imagenes/<?php echo $propiedades['imagen']; ?>" class="imagen-tabla"></td>
                <td>$<?php echo $propiedades['precio']; ?></td>
                <td>
                    <a href="#" class="boton-amarillo-block">Actualizar</a>
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</main>

<?php

// Cerrar la conexión
mysqli_close($db);

incluirTemplate('footer');

?>