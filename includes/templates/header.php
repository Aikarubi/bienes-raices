<?php

if (!isset($_SESSION['login'])) {
    session_start();
}

$auth = $_SESSION['login'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienes-raices-php/build/css/app.css">
    <link rel="icon" type="image/jpg" href="/bienes-raices-php/build/img/favicon.ico" />
</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienes-raices-php/index.php">
                    <img src="/bienes-raices-php/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/bienes-raices-php/build/img/barras.svg" alt="Icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienes-raices-php/build/img/dark-mode.svg" alt="Dark Mode">
                    <nav class="navegacion">
                        <a href="/bienes-raices-php/nosotros.php">Nosotros</a>
                        <a href="/bienes-raices-php/anuncios.php">Anuncios</a>
                        <a href="/bienes-raices-php/blog.php">Blog</a>
                        <a href="/bienes-raices-php/contacto.php">Contacto</a>
                        <?php if ($auth): ?>
                            <a href="/bienes-raices-php/cerrar-sesion.php">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div> <!--.barra-->
            <?php if ($inicio) {
                echo '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>';
            } ?>
        </div>
    </header>