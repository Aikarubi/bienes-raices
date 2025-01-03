<?php
//Importar la conexion de la BD
require 'includes/config/database.php';
$db = conectarBD();

//Consultar
$query = "SELECT * FROM propiedades LIMIT $limite";

//Obtener resultados
$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>
        <div class="anuncio">

            <img loading="lazy" src="/bienes-raices-php/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen Anuncio">

            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
                <p class="precio"> $<?php echo $propiedad['precio']; ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/wc.svg" alt="icono wc">
                        <p><?php echo $propiedad['wc']; ?></p>
                    </li>
                    <li>
                        <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/parking.svg"
                            alt="icono estacionamiento">
                        <p><?php echo $propiedad['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/bed.svg"
                            alt="icono habitaciones">
                        <p><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>

                <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Ver Propiedad</a>
            </div><!--.contenido-anuncio-->
        </div><!--.anuncio-->
    <?php endwhile; ?>
</div><!--.contenedor-anuncios-->

<?php

//Cerrar la conexion
mysqli_close($db);

?>