<fieldset>
    <legend>Información General</legend>

    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Titulo Propiedad" value="<?php echo s( $propiedad->titulo ); ?>">

    <label for="clave">Clave:</label>
    <input type="text" id="clave" name="propiedad[clave]" placeholder="Clave Propiedad" value="<?php echo  s( $propiedad->clave ); ?>">

    <label for="precio">Precio:</label>
    <input type="text" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad" value="<?php echo  s( $propiedad->precio ); ?>">

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png, image/jpg" name="propiedad[imagen]">

    <?php if($propiedad->imagen) {?>
        <img src="/bienesRaices/public/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-small">
    <?php } ?>

    <label for="tipo">Tipo</label>
    <select name="propiedad[tipo]" id="tipo">

    <?php if($propiedad->tipo != '') {?> 
        <option select value="">-- Seleccione --</option>
        <?php if($propiedad->tipo == 'Venta') {?> 
            <option 
                <?php echo $propiedad->tipo === $propiedad->tipo ? 'selected' : '' ?>
                value="<?php echo s($propiedad->tipo); ?>"><?php echo s($propiedad->tipo); ?>
            </option>
            <option  value="Renta" >Renta</option>
        <?php } elseif($propiedad->tipo == 'Renta') {?>
            <option 
                <?php echo $propiedad->tipo === $propiedad->tipo ? 'selected' : '' ?>
                value="<?php echo s($propiedad->tipo); ?>"><?php echo s($propiedad->tipo); ?>
            </option>
            <option  value="Venta" >Venta</option>
        <?php } ?>
    <?php } else {?>
        <option select value="">-- Seleccione --</option>
        <option  value="Venta" name="Venta">Venta</option>
        <option  value="Renta" name="Renta">Renta</option>
    <?php }?>
    

        <!-- <option 
            <?php if($propiedad->tipo == 'Venta') {?>
                <?php echo $propiedad->tipo === $propiedad->tipo ? 'selected' : '' ?>
                value="<?php echo s($propiedad->tipo); ?>"><?php echo s($propiedad->tipo); ?>
                <option  value="Renta" >Renta</option>
            <?php } elseif($propiedad->tipo == 'Renta') {?>
                <?php echo $propiedad->tipo === $propiedad->tipo ? 'selected' : '' ?>
                value="<?php echo s($propiedad->tipo); ?>"><?php echo s($propiedad->tipo); ?>
                <option  value="Venta" >Venta</option>
            <?php } else {?>
                <option  value="Venta" name="Venta">Venta</option>
                <option  value="Renta" name="Renta">Renta</option>
            <?php }?>
        </option> -->
    </select> 

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="propiedad[descripcion]"><?php echo  s( $propiedad->descripcion ); ?></textarea>

    <label for="cercano">Cercano a:</label>
    <textarea id="cercano" name="propiedad[cercano]"><?php echo  s( $propiedad->cercano ); ?></textarea>

    <label for="ubicacion">Ubicación:</label>
    <textarea id="ubicacion" name="propiedad[ubicacion]"><?php echo  s( $propiedad->ubicacion ); ?></textarea>

    <label for="url mapa">Url Mapa:</label>
    <textarea id="url_mapa" name="propiedad[url_mapa]"><?php echo  s( $propiedad->url_mapa ); ?></textarea>
</fieldset>

<fieldset>
    <legend>Información Propiedad</legend>

    <label for="habitacion">Habitaciones:</label>
    <input type="text" id="habitaciones" name="propiedad[habitaciones]" placeholder="Ej: 3" min="1" max="9" value="<?php echo  s( $propiedad->habitaciones ); ?>">

    <label for="wc">Baños:</label>
    <input type="text" id="wc" name="propiedad[wc]" placeholder="Ej: 3" min="1" max="9" value="<?php echo  s( $propiedad->wc ); ?>">

    <label for="estacionamiento">Estacionamiento:</label>
    <input type="text" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="Ej: 3" min="1" max="9" value="<?php echo  s( $propiedad->estacionamiento ); ?>">
</fieldset>

<fieldset>
    <legend>Vendedor</legend>

    <label for="vendedor">Vendedor</label>
    <select name="propiedad[vendedores_id]" id="vendedor">
        <option select value="">-- Seleccione --</option>
        <?php foreach($vendedores as $vendedor) { ?>
            <option 
                <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : '' ?>
                value="<?php echo s($vendedor->id); ?>"><?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?>
            </option>
        <?php } ?>
    </select> 
</fieldset>