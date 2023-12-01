<?php
include 'back_calculadora.php';
    $result = $n1 = $n2 = $tipo = 0;
    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $tipo = $_POST['tipo'];

        // Condición del ejercicio
        switch ($tipo) {
            case '1':
                $result = $n1 + $n2;
             break;
            case '2':
                $result = $n1 - $n2;
             break;
            case '3':
                $result = $n1 * $n2;
             break;
            case '4':
                $result = $n1 / $n2;
             break;
    }
    echo '<div class= "resultado"> <h3> Tu resultado es: ' . $result . ' </h3></div>';
}
?>