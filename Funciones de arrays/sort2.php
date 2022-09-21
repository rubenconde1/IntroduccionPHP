<!-- Más orden -->

<?php
    $temperaturas = array(35, 37, 37, 33, 31, 39, 34, 31, 30, 30, 31, 33, 36, 35, 32, 29, 27, 28, 31);

    $media = array_sum($temperaturas)/count($temperaturas);
    print_r("La media es " . number_format($media, 2));

    echo "<br>El valor mínimo es ";
    $minimo = $temperaturas;
    sort($minimo);
    $minimo = array_slice($minimo, 0, 5);
    print_r($minimo);

    echo "<br>El valor máximo es: ";
    $maximo = $temperaturas;
    rsort($maximo);
    $maximo = array_slice($maximo, 0, 5);
    print_r($maximo);
?>