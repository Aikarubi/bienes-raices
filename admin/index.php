<?php

$mensaje = $_GET['mensaje'] ?? null; //Si no existe la variable se le da el valor de null
require '../includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if( intval($mensaje) === 1): ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php endif; ?> 

    <a href="../admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
    
</main>

<?php

incluirTemplate('footer');

?>