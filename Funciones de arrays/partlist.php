<!-- Partlist -->

<?php
$array = ['Hola', 'mundo', 'bienvenido', 'a', 'tu', 'primer', 'partlist'];
    function partlist($array){
        for ($i=0; $i < count($array); $i++) { 
            $separado = array_slice($array, 0, $i);
        }
    }

    print_r(partlist($array));
?>