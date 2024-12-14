<?php
//Importar la conexion de la BD
require 'includes/config/database.php';
$db = conectarBD();

//Consultar
$query = "SELECT * FROM propiedades WHERE id = '$_GET[id]'";

//Obtener resultados
$resultado = mysqli_query($db, $query);

require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion contenido-centrado">
<?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>
    <h1><?php echo $propiedad['titulo']; ?></h1>

        <img lazy="loading" src="/bienes-raices-php/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Casa en venta">

    <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedad['precio']; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/wc.svg" alt="icono wc">
                <p><?php echo $propiedad['wc']; ?></p>
            </li>
            <li>
                <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/parking.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad['estacionamiento']; ?></p>
            </li>
            <li>
                <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/bed.svg" alt="icono habitaciones">
                <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>
        </ul>
        <p><?php echo $propiedad['descripcion']; ?></p>
    </div>

<?php endwhile; ?>
</main>

<?php

incluirTemplate('footer');

//Cerrar la conexion de la BD
mysqli_close($db);

?>