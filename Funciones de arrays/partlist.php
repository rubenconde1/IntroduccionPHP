<!-- Partlist -->

<?php
$array = ['Hola', 'mundo', 'bienvenido', 'a', 'tu', 'primer', 'partlist'];
    function partlist($array){
        $cadena =[];
        for ($i=1; $i <= count($array); $i++) { 
            print_r($cadena = array_slice($array, 0, $i));
            echo "<br>";
            print_r($cadena2 = array_slice($array, $i));
            echo "<br>";
        }
    }

    partlist($array);
?>