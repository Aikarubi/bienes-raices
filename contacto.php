<?php

require 'includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="/bienes-raices-php/build/img/destacada3.webp" type="image/webp">
        <source srcset="/bienes-raices-php/build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="/bienes-raices-php/build/img/destacada3.jpg" alt="Casa en venta">
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Tu E-mail" required>

            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Tu Telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select id="opciones" name="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" id="presupuesto" name="presupuesto" placeholder="Tu Precio o Presupuesto">
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefon">Teléfono</label>
                <input type="radio" id="contactar-telefon" name="contacto" value="telefono">

                <label for="contactar-email">E-mail</label>
                <input type="radio" id="contactar-email" name="contacto" value="email">
            </div>

            <p>Si eligio teléfono, elija la fecha y hora</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" min="9:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-azul">

    </form>
</main>

<?php

incluirTemplate('footer');

?>