<!-- Funciones de arrays -->

<?php
    // Ejercicio 1
    $nombres = array(
        'Ruben', 'Alex', 'Adrian', 'Laura','Sol'
    );
    // Ejercicio 2
    echo count($nombres);
    echo '<br><br>';

    // Ejercicio 3
    $cadena = ' ';

    echo implode($cadena, $nombres) . "<br><br>";

    //Ejercicio 4
    asort($nombres);
    foreach ($nombres as $key => $value) {
        echo "$value <br>";
    }

    //Ejercicio 5
    print_r(array_reverse($nombres));
    echo '<br>';

    // Ejercicio 6
    print_r(array_search('Adrian', $nombres));

    // Ejercicio 7
    $alumnos = [
        ["id" => 1, "nombre" => "Ruben", "edad" => 26],
        ["id" => 2, "nombre" => "Alex", "edad" => 22],
        ["id" => 3, "nombre" => "Adrian", "edad" => 29],
        ["id" => 4, "nombre" => "Laura", "edad" => 23],
        ["id" => 5, "nombre" => "Sol", "edad" => 30]
    ];

    // Ejercicio 8
    $tabla = '<table border = "1">';
    foreach ($alumnos as $r) {
        $tabla .= '<tr>';

        foreach ($r as $v) {
            $tabla .= '<td>' . $v . '</td>';
        }
        $tabla .= '</tr>';
    }
    $tabla .= '</table>';

    echo $tabla;

    // Ejercicio 9
    print_r(array_column($alumnos, 'nombre'));

    //Ejercicio 10
    echo '<br>';
    $numeros = array(10, 8, 7, 6, 5, 24, 74, 38, 9, 11);
    print_r(array_sum($numeros));
?>