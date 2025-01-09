<?php

// Incluye un template
require '../includes/funciones.php';
incluirTemplate('header');

$auth = estaAutenticado();

if (!$auth) {
    header('Location: /bienes-raices-php/index.php');
}
// Importar la conexión
require '../includes/config/database.php';
$db = conectarBD();

// Escribir la query
$query = "SELECT * FROM propiedades";

// Consultar la BD
$resultados = mysqli_query($db, $query);

// Muestra mensaje condicional
$mensaje = $_GET['mensaje'] ?? null; //Si no existe la variable se le da el valor de null


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if ($id) {

        //Eliminar archivo
        $query = "SELECT imagen FROM propiedades WHERE id = $id";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $propiedad['imagen']);

        // Eliminar propiedad
        $query = "DELETE FROM propiedades WHERE id = $id";
        $resultado = mysqli_query($db, $query);
    }

    if ($resultado) {
        header('Location: /bienes-raices-php/admin/index.php?mensaje=3');
    }
}


?>


<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if (intval($mensaje) === 1): ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php elseif (intval($mensaje) === 2): ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif (intval($mensaje) === 3): ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
    <?php endif; ?>

    <a href="../admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody> <!-- Mostrar los resultados -->
            <?php while ($propiedades = mysqli_fetch_assoc($resultados)): ?>
                <tr>
                    <td><?php echo $propiedades['id']; ?></td>
                    <td><?php echo $propiedades['titulo']; ?></td>
                    <td><img src="/bienes-raices-php/imagenes/<?php echo $propiedades['imagen']; ?>" class="imagen-tabla"></td>
                    <td>$<?php echo $propiedades['precio']; ?></td>
                    <td>
                        <a href="/bienes-raices-php/admin/propiedades/actualizar.php?id=<?php echo $propiedades['id']; ?>" class="boton-amarillo-block">Actualizar</a>

                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedades['id']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</main>

<?php

// Cerrar la conexión
mysqli_close($db);

incluirTemplate('footer');

?>