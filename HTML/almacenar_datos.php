<?php
    include  '../DB/conexion.php';

        if (iseet($_POST['act'])) {
        $name = $_POST['nombre_act'];
        $last_name = $_POST ['apellido_act'];
        $cc = $_POST ['cc'];

        mysqli_query($conexion,"UPDATE usuarios SET nombre = '$name', apellido = '$last_name', WHERE cédula = '$cc'");
    }
    header ('location: ..datos.php')
?>