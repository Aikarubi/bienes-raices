<?php

//CONECTAR A LA BD
require 'includes/config/database.php';
$db = conectarBD();

//AUTENTICAR USUARIO
$errores = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
     $contrasenya = mysqli_real_escape_string($db, $_POST['contrasenya']);

     if(!$email) { $errores[] = 'El E-mail es obligatorio'; }

     if(!$contrasenya) { $errores[] = 'La Contraseña es obligatoria'; }

     if(empty($errores)) { $errores[] = 'E-mail o Contraseña Incorrectos'; }
}

require 'includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="$_POST" class="formulario">
    <fieldset>
            <legend>Email y Contraseña</legend>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Tu E-mail">

            <label for="contrasenya">Contraseña:</label>
            <input type="password" id="contrasenya" name="contrasenya" placeholder="Tu Contraseña">

        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton boton-azul">
    </form>
</main>

<?php

incluirTemplate('footer');

?>