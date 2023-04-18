<style>
    .container_buttons{
        display: flex;
        margin: 2rem;
        justify-content: end;
        gap: 1rem;
    }
    .container_buttons a{
        background: #e08709;
        padding: 0.5rem 1rem;
        border-radius: 8px;
    }
</style>
<main class="contenedor seccion">
    <h2>Casas y Departamentos</h2>
    <div class="container_buttons">
        <a href="/bienesRaices/public/propiedades?type=venta" class="">Filtrar por venta</a>
        <a href="/bienesRaices/public/propiedades?type=renta" class="">Filtrar por renta</a>
    </div>
    <?php
        include 'listado.php';
    ?>
</main>