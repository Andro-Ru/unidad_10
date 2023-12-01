<?php
include 'solicitud_de_datos.html';

$edad=0;

if (isset($_GET['operar'])) {
    $nombre = $_GET ['nombre'];
    $apellido = $_GET ['apellido'];
    $cedula = $_GET ['cedula'];

    echo "<div ID=resultado><h6>Nombre: ".$nombre."</h6>";
    echo "<h6>Apellido: ".$apellido."</h6>";
    echo "<h6>Cédula: ".$cedula."</h6><div>";
}
?>