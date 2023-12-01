<?php
    include 'autenticacion.html';
    $edad = 0;
        if (isset($_POST['operar'])) {
        $edad = $_POST ['edad'];
        if ($edad >= 18) {
            echo "<h6 class=edad>Es Mayor de Edad</h6>";
        }
        else if (18 > $edad && 0 < $edad) {
            echo "<h6 class=edad>Es menor de edad</h6>";
        }
        else {
            echo"<h6 vlass=edad>No Valido</h6>";
        }
    }
?>
