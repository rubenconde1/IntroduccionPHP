<!-- Funciones de cadena -->

<!-- Ejercicio 1 -->
<?php
    $nombre = $_GET['nombre'] ?? 'Rubén';
    $trimmed = trim($nombre, "/");
    echo $trimmed
?>

<br>

<!-- Ejercicio 2 -->
<?php
    echo strlen($nombre);
?>

<br>

<!-- Ejercicio 3 -->
<?php
    echo strtoupper($nombre);
?>

<br>

<!-- Ejercicio 4 -->
<?php
    echo strtolower($nombre);
?>

<br>

<!-- Ejercicio 5 -->
<?php
    $prefijo = $_GET['prefijo'] ?? '';
    echo $prefijo & $nombre
?>

<br>

<!-- Ejercicio 6 -->
<?php
    echo substr_count(strtolower($nombre),'a');
?>

<br>

<!-- Ejercicio 7 -->
<?php
    
    if (str_contains(strtolower($nombre), 'a')) {
        echo stripos(strtolower($nombre),'a');
    } else echo $nombre . " no contiene una a";
?>

<br>

<!-- Ejercicio 8 -->
<?php
    echo str_ireplace('o',0,strtolower($nombre));
?>