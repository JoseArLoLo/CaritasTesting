<?php
require '../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1 class="titulo-center-rojo">Iniciar Sesión</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="POST" class="formulario">
        <fieldset>
            <legend>Email y password</legend>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu email" id="email">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Tu Password" id="password">
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton-verde">
    </form>
</main>
<?php incluirTemplate('footer'); ?>