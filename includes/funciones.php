<?php
require 'app.php';

function incluirTemplate( string $nombre, $donar = false, $eventos = false) {
    include TEMPLATES_URL . "/$nombre.php";
}
function estaAutenticado() {
    session_start();
    if($_SESSION['login']) {
        return true;
    }
    return false;
}
function logueado() {
    session_start();
    if(!$_SESSION['login']) {
        header('Location: /');
    }
}
//Escapa / Sanitizar el HTML
function s($html): string {
    $s = htmlspecialchars($html);
    return $s;
}
function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
?>