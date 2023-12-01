<?php
include 'edad_exacta.html';
if (isset($_POST['verificar'])) {
    $fechas = new DateTime ($_POST['fechas']);

    $date2 = new DateTime (date('y-m-d'));

    $diff = $fechas -> diff($date2);

    $edad_actual = $diff -> y;
    $edad_meses = $diff -> m;
    $edad_dias = $diff -> d;

    echo "<div class=resultados>Años: ".$edad_actual." Meses: ".$edad_meses." Dias: ".$edad_dias. "</div>";
}
?>  