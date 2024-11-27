<?php

require '../../includes/config/database.php';
$db = conectarBD();
//var_dump($db);

require '../../includes/funciones.php';
incluirTemplate('header');

//Arreglo con mensajes de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

//Ejecutar el codigo despues de q el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>";*/

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    //$imagen = $_FILES['imagen'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];

    if (!$titulo) {
        $errores[] = 'El título es obligatorio';
    }
    if (!$precio) {
        $errores[] = 'El Precio es obligatorio';
    }
    if (strlen($descripcion) < 50) {
        $errores[] = 'La Descripción es obligatoria';
    }
    if (!$habitaciones) {
        $errores[] = 'El número de Habitaciones es obligatorio';
    }
    if (!$wc) {
        $errores[] = 'El número de Baños es obligatorio';
    }
    if (!$estacionamiento) {
        $errores[] = 'El número de Estacionamientos es obligatorio';
    }
    if (!$vendedorId) {
        $errores[] = 'El Seleccione un Vendedor es obligatorio';
    }

    //exit;

    // Revisar que el array de errores este vacio

    if (empty($errores)) {
        // Insertar en la base de datos
        $query = " INSERT INTO  propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId') ";

        //echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario
            header('Location: ../index.php');
        }
    }
}
?>


<main class="contenedor seccion">
    <h1>Crear</h1>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <label for="vendedor">Vendedor:</label>
            <select id="vendedor" name="vendedor" value="<?php echo $vendedorId; ?>">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Andres">Andres</option>
                <option value="Carlos">Carlos</option>
                <option value="Juan">Juan</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-azul">
    </form>

    <a href="../index.php" class="boton boton-verde">Volver</a>
</main>

<?php

incluirTemplate('footer');

?>