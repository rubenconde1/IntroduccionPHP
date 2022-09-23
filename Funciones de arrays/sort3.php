<!-- Ordenar según nuestro criterio -->

<?php
    $array = array('Tijeras' => 'Herramienta', 'Pan' => 'Comida', 'Batería' => 'Electrónica', 'Coche' => 'Transporte');

    uasort($array, 
    function ($a, $b){
        if (strlen($a) == strlen($b)){
            return 0;
        } else {
            return (strlen($a) < strlen($b)) ? -1 : 1;
        }
    });

    print_r($array);
?>