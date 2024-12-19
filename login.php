<?php

require 'includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <form class="formulario">
    <fieldset>
            <legend>Email y Contraseña</legend>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Tu E-mail" required>

            <label for="contrasenya">Contraseña:</label>
            <input type="password" id="contrasenya" name="contrasenya" placeholder="Tu Contraseña">

        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton boton-azul">
    </form>
</main>

<?php

incluirTemplate('footer');

?>