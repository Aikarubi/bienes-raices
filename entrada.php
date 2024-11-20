<?php

    include './includes/templates/header.php';

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="/bienes-raices-php/build/img/destacada2.webp" type="image/webp">
            <source srcset="/bienes-raices-php/build/img/destacada2.jpg" type="image/jpeg">
            <img lazy="loading" src="/bienes-raices-php/build/img/destacada2.jpg" alt="Casa en venta">
        </picture>
        
        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Nulla ipsum sapien, iaculis ut ante a, ultricies sodales dui. Morbi pharetra, ex non vehicula blandit, velit orci consequat sem, vitae accumsan lectus enim in lorem. Curabitur consectetur mollis dignissim. Ut efficitur, velit id porttitor blandit, diam libero scelerisque lectus, et venenatis tellus massa ac sapien. Vestibulum tincidunt nisi mauris, vitae efficitur dolor imperdiet suscipit. Integer vitae imperdiet leo. Proin aliquam dapibus vulputate. Praesent orci justo, interdum nec est eget, volutpat scelerisque urna. Proin non arcu iaculis nulla porta viverra tempus ut tortor. Suspendisse vitae enim sit amet erat faucibus gravida. Praesent egestas in tortor a volutpat. Curabitur posuere purus eros. Sed aliquam, tortor venenatis varius tincidunt, ligula velit tincidunt mauris, non tincidunt purus turpis vel eros.</p>

            <p>Duis et arcu volutpat, ullamcorper ante vitae, volutpat arcu. Praesent mattis quam a elit pretium feugiat. Nunc posuere turpis ut erat dictum mattis. Suspendisse et felis ullamcorper, tincidunt ipsum eget, fringilla mi. Donec a odio rhoncus, accumsan neque in, auctor est. Nulla non feugiat augue. Nulla et ante interdum, pharetra nunc convallis, volutpat quam.</p>
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