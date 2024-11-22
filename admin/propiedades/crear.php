<?php

require '../../includes/config/database.php';
$db = conectarBD();
var_dump($db);

require '../../includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion">
    <h1>Crear</h1>

    <form class="formulario">
    <fieldset>
        <legend>Información General</legend>

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" required>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" required>

        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
    </fieldset>

    <fieldset>
        <legend>Información Propiedad</legend>

        <label for="habitaciones">Habitaciones:</label>
        <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" required>

        <label for="wc">Baños:</label>
        <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" required>

        <label for="estacionamiento">Estacionamiento:</label>
        <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" required>
    </fieldset>

    <fieldset>
        <legend>Vendedor</legend>

        <label for="vendedor">Vendedor:</label>
        <select id="vendedor" name="vendedor" required>
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="Andres">Andres</option>
            <option value="Carlos">Carlos</option>
            <option value="Juan">Juan</option>
        </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>

    <a href="../index.php" class="boton boton-verde">Volver</a>
</main>

<?php

incluirTemplate('footer');

?>