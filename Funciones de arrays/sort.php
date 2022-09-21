<!-- Ordenar un array -->

<?php
// Ordenar por nombre, ascendente
    $edades = array("Juan" => 31, "María" => 41,"Andrés" => 39,"Berta" => 40);

    ksort($edades);
    foreach ($edades as $key => $value) {
        echo "$key <br>";
    }

// Ordenar por edad, ascendente
    echo "<br>";
    asort($edades);
    foreach ($edades as $key => $value) {
        echo "$value = $key <br>";
    }

// Ordenar por nombre, descendente
    echo "<br>";
    krsort($edades);
    foreach ($edades as $key => $value) {
        echo "$key <br>";
    }

// Ordenar por edad, descendente
    echo "<br>";
    arsort($edades);
    foreach ($edades as $key => $value) {
        echo "$value = $key <br>";
    }
?>