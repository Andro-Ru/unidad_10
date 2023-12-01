<?php
include 'metodo_post.html';

$edad=0;

if (isset($_POST['operar'])) {
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $cedula = $_POST ['cedula'];

    echo "<div ID=resultado><h6>Nombre: ".$nombre."</h6>";
    echo "<h6>Apellido: ".$apellido."</h6>";
    echo "<h6>Cédula: ".$cedula."</h6><div>";
}
?>