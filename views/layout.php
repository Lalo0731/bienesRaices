<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)){
        $inicio = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienesRaices/public/build/css/app.css">
    <!-- <link rel="stylesheet" href="../../build/css/app.css"> -->
   
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesRaices/public/">
                    <img src="/bienesRaices/public/build/img/logo.svg" alt="Logo">
                </a>
                <div class="mobile-menu">
                    <img src="/bienesRaices/public/build/img/barras.svg" alt="icono">
                </div>
                <div class="derecha">
                    <img src="/bienesRaices/public/build/img/dark-mode.svg" alt="Boton dark" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="/bienesRaices/public/nosotros">Nosotros</a>
                        <a href="/bienesRaices/public/propiedades">Anuncios</a>
                        <a href="/bienesRaices/public/blog">Blog</a>
                        <a href="/bienesRaices/public/contacto">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/bienesRaices/public/cerrar-sesion">Cerrar Sesión</a>
                        <?php endif ?>
                    </nav>
                </div>
            </div>
            <?php echo $inicio ? "<h1>Venta de Casas y Departamentos Exclusivos de Lujos</h1>" : ''; ?>
        </div>
    </header>

    <?php echo $contenido; ?>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
    </footer>
    
    <script src="/bienesRaices/public/build/js/bundle.min.js"></script>
</body>
</html>