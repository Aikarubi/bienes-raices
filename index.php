<?php
    $inicio = true;
    include './includes/templates/header.php';

?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/bienes-raices-php/build/img/lock.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Nos comprometemos con la seguridad en cada paso del proceso, protegiendo tu inversión y garantizando
                    discreción. Desde la privacidad de tus datos hasta la seguridad jurídica en transacciones, brindamos
                    tranquilidad y respaldo en cada decisión.</p>
            </div>
            <div class="icono">
                <img src="/bienes-raices-php/build/img/coins.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Ofrecemos propiedades de lujo a precios justos, asegurando un equilibrio entre exclusividad y
                    accesibilidad. Valoramos tu inversión y nos enfocamos en encontrar opciones de calidad que reflejen
                    el verdadero valor del mercado.</p>
            </div>
            <div class="icono">
                <img src="/bienes-raices-php/build/img/clock-hour-2.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Respetamos el valor de tu tiempo, por eso cumplimos cada plazo y optimizamos cada etapa. Nuestro
                    equipo se enfoca en brindarte una experiencia ágil y organizada, desde visitas hasta trámites,
                    garantizando puntualidad en cada paso.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">

        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
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

            <div class="anuncio">
                <picture>
                    <source srcset="/bienes-raices-php/build/img/anuncio2.webp" type="image/webp">
                    <source src="/bienes-raices-php/build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="/bienes-raices-php/build/img/anuncio2.jpg" alt="Imagen Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa de diseño moderno, con tecnología inteligente y completamente amueblada.</p>
                    <p class="precio">$2.500.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/wc.svg" alt="icono wc">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/parking.svg"
                                alt="icono estacionamiento">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/bed.svg"
                                alt="icono habitaciones">
                            <p>5</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div><!--.contenido-anuncio-->
            </div><!--.anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="/bienes-raices-php/build/img/anuncio3.webp" type="image/webp">
                    <source src="/bienes-raices-php/build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="/bienes-raices-php/build/img/anuncio3.jpg" alt="Imagen Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en la ciudad con alberca privada y acabados de lujo, una gran oportunidad.</p>
                    <p class="precio">$4.700.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/wc.svg" alt="icono wc">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/parking.svg" alt="icono estacionamiento">
                            <p>5</p>
                        </li>
                        <li>
                            <img class="icono-departamento" loading="lazy" src="/bienes-raices-php/build/img/bed.svg" alt="icono habitaciones">
                            <p>6</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div><!--.contenido-anuncio-->
            </div><!--.anuncio-->


        </div><!--.contenedor-anuncios-->

        <div class="alinear-derecha">
            <a href="anuncios.html" class=" boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Rellena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

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
                        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                            ahorrando dinero</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="/bienes-raices-php/build/img/blog2.webp" type="image/webp">
                        <source srcset="/bienes-raices-php/build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="/build/img/blog2.jpg" alt="imagen blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para
                            darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                    cumple con todas mis expectativas.
                </blockquote>
                <p>- Aikarubi</p>
            </div>
        </section>
    </div>

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