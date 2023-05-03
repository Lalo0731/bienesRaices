
<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad->titulo; ?></h1>

    <img loading="lazy" src="/bienesRaices/public/imagenes/<?php echo $propiedad->imagen; ?>" alt="Image de la propiedad">

    <div class="resumen-propiedad">
        <p class="precio">$ <?php echo number_format($propiedad->precio,2); ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad->wc; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad->estacionamiento; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p><?php echo $propiedad->habitaciones; ?></p>
            </li>
        </ul>
        <p><?php echo $propiedad->descripcion; ?></p>
        <p>Cercano a: </br> <?php echo $propiedad->cercano; ?></p>
        <p>Ubicación: </br> <?php echo $propiedad->ubicacion; ?></p>
    </div>
</main>
