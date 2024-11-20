<?php

    include './includes/templates/header.php';

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="/bienes-raices-php/build/img/destacada.webp" type="image/webp">
            <source srcset="/bienes-raices-php/build/img/destacada.jpg" type="image/jpeg">
            <img lazy="loading" src="/bienes-raices-php/build/img/destacada.jpg" alt="Casa en venta">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/wc.svg" alt="icono wc">
                    <p>5</p>
                </li>
                <li>
                    <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/parking.svg" alt="icono estacionamiento">
                    <p>4</p>
                </li>
                <li>
                    <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/bed.svg" alt="icono habitaciones">
                    <p>8</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corrupti provident voluptatem nesciunt culpa tempora, perspiciatis autem eos. Est aliquam consequuntur quia consequatur, placeat tempore? Neque natus hic inventore atque?</p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>

        </div>

        <p class="copyright">Todos los derechos reservados &copy; Bienes Raices 2024</p>

    </footer>

    <script src="/bienes-raices-php/build/js/bundle.min.js"></script>
</body>

</html>