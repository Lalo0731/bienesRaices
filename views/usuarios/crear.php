<main class="contenedor seccion">
    <h1>Registrar Usuario</h1>
    <a href="/bienesRaices/public/admin" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/bienesRaices/public/usuarios/crear" enctype="multipart/form-data">

        <?php include 'formulario.php'; ?>

        <input type="submit" value="Registrar Usuario" class="boton boton-verde">
    </form>
</main>