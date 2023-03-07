<main class="contenedor seccion">
    <h1>Administrador Bienes Raices</h1>

    <?php 
        if($resultado){
            $mensaje = mostrarNotificacion(intval($resultado));
            if($mensaje) { ?>
                <p class="alerta exito"><?php echo s($mensaje); ?> </p>
        <?php }
        } 
    ?>
        
    <a href="/bienesRaices/public/propiedades/crear" class="boton boton-verde">Nueva Propiedad</a>
    <a href="/bienesRaices/public/vendedores/crear" class="boton boton-amarillo">Nuevo Vendedor</a>
    <a href="/bienesRaices/public/usuarios/crear" class="boton boton-gris">Nuevo Usuario</a>
        
    <h2>Propiedades</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <!-- <th class="th">ID</th> -->
                <th class="th">Título</th>
                <th class="th">Imagen</th>
                <th class="th">Precio</th>
                <th class="th">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $propiedades as $propiedad ): ?>
            <tr>
                <!-- <td class="td"><?php echo $propiedad->id; ?></td> -->
                
                <td class="td"><?php echo $propiedad->titulo; ?></td>
                <td class="td"><img src="/bienesRaices/public/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"></td>
                <td class="td">$ <?php echo $propiedad->precio; ?></td>
                <td class="td">
                    <form method="POST" class="w-100" action="/bienesRaices/public/propiedades/eliminar">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="/bienesRaices/public/propiedades/actualizar?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Vendedores</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <!-- <th class="th">ID</th> -->
                <th class="th">Nombre</th>
                <th class="th">Teléfono</th>
                <th class="th">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $vendedores as $vendedor ): ?>
            <tr>
                <!-- <td class="td"><?php echo $vendedor->id; ?></td> -->
                <td class="td"><?php echo $vendedor->nombre ." ". $vendedor->apellido; ?></td>
                <td class="td"><?php echo $vendedor->telefono; ?></td>
                <td class="td">
                    <form method="POST" class="w-100" action="/bienesRaices/public/vendedores/eliminar">
                        <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                        <input type="hidden" name="tipo" value="vendedor">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="/bienesRaices/public/vendedores/actualizar?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Usuarios</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <!-- <th class="th">ID</th> -->
                <th class="th">Nombre</th>
                <th class="th">Email</th>
                <th class="th">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $usuarios as $usuario ): ?>
            <tr>
                <!-- <td class="td"><?php echo $vendedor->id; ?></td> -->
                <td class="td"><?php echo $usuario->nombre ." ". $usuario->apellido; ?></td>
                <td class="td"><?php echo $usuario->email; ?></td>
                <td class="td">
                    <form method="POST" class="w-100" action="/bienesRaices/public/usuarios/eliminar">
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="vendedor">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="/bienesRaices/public/usuarios/actualizar?id=<?php echo $usuario->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</main>