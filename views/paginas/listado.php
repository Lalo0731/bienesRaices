<div class="contenedor-anuncios">
     <?php foreach($propiedades as $propiedad) { ?>
          <div class="anuncio">
               <picture>
                    <img loading="lazy" src="/bienesRaices/public/imagenes/<?php echo $propiedad->imagen; ?>" alt="anuncio">
               </picture>
               <div class="contenido-anuncio">
                    <h3><?php echo $propiedad->titulo; ?></h3>
                    <p><?php echo $propiedad->descripcion; ?></p>
                    <!-- <p class="precio">$<?php echo $propiedad->precio; ?></p> -->
                    <p class="precio">$<?php echo number_format($propiedad->precio,2); ?></p>
                    <p>Clave: <?php echo $propiedad->clave; ?></p>
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
                    <p>Tipo de Propiedad: <?php echo $propiedad->tipo; ?></p>
                    <a href="/bienesRaices/public/propiedad?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">
                         Ver Propiedad
                    </a>
               </div>
          </div>
     <?php } ?>
</div>