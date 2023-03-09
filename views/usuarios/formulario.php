<fieldset>
    <legend>Información General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="usuario[nombre]" placeholder="Nombre Usuario" value="<?php echo s( $usuario->nombre ); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="usuario[apellido]" placeholder="Apellido Usuario" value="<?php echo s( $usuario->apellido ); ?>">
</fieldset>

<fieldset>
    <legend>Información De Acceso</legend>

    <label for="email">Email:</label>
    <input type="email" id="email" name="usuario[email]" placeholder="Email Usuario" value="<?php echo s( $usuario->email ); ?>">

    <label for="password">Password:</label>
    <input type="password" id="password" name="usuario[password]" placeholder="Password Usuario">
    <!-- <input type="password" id="password" name="usuario[password]" placeholder="Password Usuario" value="<?php echo s( $usuario->password ); ?>"> -->
</fieldset>