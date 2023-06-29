<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono icon_effect" id="icono_mision">
            <a href="/bienesRaices/public/nosotros">
                <img src="build/img/mision.svg" class="img_point img_mision" alt="Icono Seguridad" loading="lazy">
            </a>
            <h3>Misión</h3>
            <p class="text_info">Construir y comercializar viviendas y desarrollos de calidad, con eficiencia y rentabilidad, utilizando tecnología y procesos constructivos innovadores, con la finalidad de satisfacer las expectativas de nuestros clientes, cuidando de su patrimonio, con ética y profesionalismo.</p>
        </div>
        <div class="icono icon_effect" id="icono_vision">
            <a href="/bienesRaices/public/nosotros">
                <img src="build/img/vision.svg" class="img_point img_vision" alt="Icono Precio" loading="lazy">
            </a>
            <h3>Visión</h3>
            <p class="text_info" >Ser una empresa líder en el mercado de bienes raíces a nivel nacional, reconocida por su calidad, confiabilidad y eficiencia, asegurando los mejores resultados para nuestros clientes, colaboradores y accionistas.</p>
        </div>
        <div class="icono icon_effect" id="icono_valores">
            <a href="/bienesRaices/public/nosotros">
                <img src="build/img/valores.svg" class="img_point img_valores" alt="Icono Tiempo" loading="lazy">
            </a>
            <h3>Valores</h3>
            <p class="text_info">Liderazgo, Trabajo en equipo, Responsabilidad, Productividad, Comunicación, Humildad, Integridad, Lealtad</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Propiedades Disponibles</h2>
    
        <?php
            $limite = 3;
            include 'listado.php';
        ?>

    <div class="alinear-derecha">
        <a href="/bienesRaices/public/propiedades" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="/bienesRaices/public/contacto" class="boton-amarillo">Contactános</a>
</section>

<!-- <div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestros Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div> 

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
                        para darle vida a tu espacio.
                    </p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buenq atención y la casa que me
                ofrecieron cumple con todas mis expectativas.
                <p>-- Antonio de la torre</p>
            </blockquote>
        </div>
    </section>
</div> -->

<div class="contenedor seccion">
    <h1 class="texto-trabajamos">Aceptamos Créditos Bancarios</h1>
    <div class="creditoBancario">
        <div>
            <img src="build/img/fovissste.svg" class="w-25" alt="fovissste" >    
        </div>
        <div>
            <img src="build/img/house.svg" class="w-25" alt="house" >
        </div>
        <div>
            <img src="build/img/infonavit.svg" class="w-25" alt="infonavit" >
        </div>
    </div>
</div>