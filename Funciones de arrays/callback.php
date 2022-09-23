<!-- Callbacks -->

<?php
$array = array('hola', 'mundo', 'descripcion', 'meteorito', 'subsanación', 'preocupación');
function longitud($a){
    return $a = strlen($a);
}

    $longitud = array_map('longitud', $array);
    print_r("La cadena más larga tiene " . max($longitud) . " carácteres.");
    echo "<br>";
    print_r("La cadena más corta tiene " . min($longitud) . " carácteres.");
?>