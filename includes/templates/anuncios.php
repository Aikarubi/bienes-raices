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
            <picture>
                <source srcset="/bienes-raices-php/build/img/anuncio1.webp" type="image/webp">
                <source src="/bienes-raices-php/build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="/bienes-raices-php/build/img/anuncio1.jpg" alt="Imagen Anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con una vista increíble, acabados de lujo y a excelente precio.</p>
                <p class="precio">$3.000.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/parking.svg"
                            alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/bed.svg"
                            alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
            </div><!--.contenido-anuncio-->
        </div><!--.anuncio-->
    <?php endwhile; ?>
</div><!--.contenedor-anuncios-->

<?php

//Cerrar la conexion
mysqli_close($db);

?>