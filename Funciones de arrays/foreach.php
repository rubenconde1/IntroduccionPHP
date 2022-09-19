<!-- Recorrer array -->

<?php
// Ejercicio 1
$colores = array('negro', 'blaco', 'amarillo', 'rojo', 'verde', 'azul');
$listado = '';

$listado .= '<ul>';
foreach ($colores as $r) {
    $listado .= '<li>' . $r . '</li>';
}
$listado .= '</ul>';

echo $listado;
?>