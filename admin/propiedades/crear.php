<?php

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/


require '../../includes/config/database.php';
$db = conectarBD();
//var_dump($db);

require '../../includes/funciones.php';
incluirTemplate('header');

$auth = estaAutenticado();

if (!$auth) {
    header('Location: /bienes-raices-php/index.php');
}

//Arreglo con mensajes de errores
$errores = [];

$queryVendedores = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $queryVendedores);

$titulo = '';
$precio = '';
$imagen = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores_id = '';

//Ejecutar el codigo despues de q el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>";*/

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']); // Esto hace que este valor no contenga caracteres especiales
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $imagen = $_FILES['imagen'];
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    if (!$titulo) {
        $errores[] = 'El título es obligatorio';
    }
    if (!$precio) {
        $errores[] = 'El Precio es obligatorio';
    }
    if (strlen($descripcion) < 50) {
        $errores[] = 'La Descripción es obligatoria';
    }
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = 'Debes seleccionar una imagen';
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
    if (!$vendedores_id) {
        $errores[] = 'El Seleccione un Vendedor es obligatorio';
    }

    // Validar la imagen (1 mb maximum)

    $medida = 1000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = 'La imagen es muy pesada';
    }
    
    //exit;

    // Revisar que el array de errores este vacio

    if (empty($errores)) {

        /* SUBIDA DE ARCHIVOS*/

        //crear carpeta
        $carpetaImagenes = '../../imagenes';


        if (!is_dir($carpetaImagenes)) {
             mkdir($carpetaImagenes, 0755, true);
        }

        //Generar un nombre unico
        $imagenNombre = md5(uniqid(rand(), true)) . ".jpg";

        //Subida de imagenes
        //move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . '/' . $imagenNombre);
        copy($imagen['tmp_name'], $carpetaImagenes . "/" . $imagenNombre);

        //exit;

        // Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) 
          VALUES ('$titulo', $precio, '$imagenNombre', '$descripcion', $habitaciones, $wc, $estacionamiento, '$creado', $vendedores_id)";

        //echo $query;

        $resultadoo = mysqli_query($db, $query);

        //echo $resultado;

        /*if (!$resultadoo) {
            echo "Error en la consulta: " . mysqli_error($db);
            echo "Consulta: " . $query;
            exit;
        }

        echo "<pre>";
        var_dump($titulo, $precio, $descripcion, $habitaciones, $wc, $estacionamiento, $vendedores_id, $creado);
        echo "</pre>";
        exit;*/

        ///bienes-raices-php/admin/propiedades/crear.php

        if ($resultadoo) {
            header('Location: /bienes-raices-php/admin/index.php?mensaje=1');
            exit;
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

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">

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

            <select id="vendedor" name="vendedor">
                <option value="" disabled selected>-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultadoVendedores)) : ?>

                    <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>

                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-azul">
    </form>

    <a href="../index.php" class="boton boton-verde">Volver</a>
</main>

<?php

incluirTemplate('footer');

?>