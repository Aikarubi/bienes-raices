<?php

require 'includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="/bienes-raices-php/build/img/blog1.webp" type="image/webp">
                <source srcset="/bienes-raices-php/build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="/bienes-raices-php/build/img/blog1.jpg" alt="imagen blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.html">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="/bienes-raices-php/build/img/blog2.webp" type="image/webp">
                <source srcset="/bienes-raices-php/build/img/blog2.jpg" type="image/jpeg">
                <img loading="lazy" src="/bienes-raices-php/build/img/blog2.jpg" alt="imagen blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.html">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="/bienes-raices-php/build/img/blog3.webp" type="image/webp">
                <source srcset="/bienes-raices-php/build/img/blog3.jpg" type="image/jpeg">
                <img loading="lazy" src="/bienes-raices-php/build/img/blog3.jpg" alt="imagen blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.html">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="/bienes-raices-php/build/img/blog4.webp" type="image/webp">
                <source srcset="/bienes-raices-php/build/img/blog4.jpg" type="image/jpeg">
                <img loading="lazy" src="/bienes-raices-php/build/img/blog4.jpg" alt="imagen blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.html">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
            </a>
        </div>
    </article>
</main>

<?php

incluirTemplate('footer');

?>