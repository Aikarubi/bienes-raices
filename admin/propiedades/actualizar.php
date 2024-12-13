<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Validar la URL por ID válido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /bienes-raices-php/admin/index.php');
}

require '../../includes/config/database.php';
$db = conectarBD();
//var_dump($db);

require '../../includes/funciones.php';
incluirTemplate('header');

//Arreglo con mensajes de errores
$errores = [];

//Consulta para obtener la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = '$id'";
$resultado =  mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

//Consulta para obtener los vendedores
$queryVendedores = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $queryVendedores);

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$imagen = '';
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedores_id = $propiedad['vendedores_id'];
$imagenPropiedad = $propiedad['imagen'];

//Ejecutar el codigo despues de q el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


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

    $medida = 1000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = 'La imagen es muy pesada';
    }

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
        $query = "UPDATE propiedades SET titulo = '$titulo', precio = $precio, descripcion = '$descripcion', habitaciones = $habitaciones, wc = $wc, estacionamiento = $estacionamiento, vendedores_id = $vendedores_id WHERE id = $id";

        //echo $query;

        $resultadoo = mysqli_query($db, $query);

        if ($resultadoo) {
            header('Location: /bienes-raices-php/admin/index.php?mensaje=2');
            exit;
        }
    }
}

?>


<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

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


            <img src="/bienes-raices-php/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">

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

        <input type="submit" value="Actualizar Propiedad" class="boton boton-azul">
    </form>

    <a href="../index.php" class="boton boton-verde">Volver</a>
</main>

<?php

incluirTemplate('footer');

?>