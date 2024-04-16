<?php
require '../includes/funciones.php';
if ( !estaAutenticado() ) {
    header('Location: /login');
}
incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1 class="titulo-center-rojo">Pagina de administrador en proceso de desarrollo</h1>
    </main>
<?php incluirTemplate('footer'); ?>