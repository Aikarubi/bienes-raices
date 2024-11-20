<?php

require 'includes/funciones.php';
incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="/bienes-raices-php/build/img/nosotros.webp" type="image/webp">
                    <source srcset="/bienes-raices-php/build/img/nosotros.jpg" type="image/jpeg">
                    <img src="/bienes-raices-php/build/img/nosotros.jpg" alt="imagen nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p> Morbi imperdiet a tortor a lacinia. Vestibulum ac erat sed nisi ultricies rhoncus eu at nunc. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. In tincidunt ipsum a magna dapibus, a fermentum
                    nisi euismod. Nullam dolor lacus, sodales non consectetur ac, fermentum nec erat. Nunc eget turpis
                    ac nisi rutrum finibus. Sed hendrerit eros in turpis consequat tristique. Fusce finibus risus eu
                    rutrum malesuada. Morbi feugiat fermentum ligula eu iaculis. Suspendisse a mi est.</p>

                <p> Donec ullamcorper fermentum efficitur. Orci varius natoque penatibus et magnis dis parturient
                    montes, nascetur ridiculus mus. Aliquam erat volutpat. Cras sollicitudin sagittis ligula et
                    facilisis. Pellentesque elit ante, mollis quis massa nec, mattis efficitur velit. </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/bienes-raices-php/build/img/lock.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Nos comprometemos con la seguridad en cada paso del proceso, protegiendo tu inversión y garantizando discreción. Desde la privacidad de tus datos hasta la seguridad jurídica en transacciones, brindamos tranquilidad y respaldo en cada decisión.</p>
            </div>
            <div class="icono">
                <img src="/bienes-raices-php/build/img/coins.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Ofrecemos propiedades de lujo a precios justos, asegurando un equilibrio entre exclusividad y accesibilidad. Valoramos tu inversión y nos enfocamos en encontrar opciones de calidad que reflejen el verdadero valor del mercado.</p>
            </div>
            <div class="icono">
                <img src="/bienes-raices-php/build/img/clock-hour-2.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Respetamos el valor de tu tiempo, por eso cumplimos cada plazo y optimizamos cada etapa. Nuestro equipo se enfoca en brindarte una experiencia ágil y organizada, desde visitas hasta trámites, garantizando puntualidad en cada paso.</p>
            </div>
        </div>
    </section>

<?php 

incluirTemplate('footer');

?>