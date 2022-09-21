<!-- Recorrer array -->

<?php

$colores = array('negro', 'blanco', 'amarillo', 'rojo', 'verde', 'azul');
$listado = '';

$listado .= '<ul>';
foreach ($colores as $r) {
    $listado .= '<li>' . $r . '</li>';
}
$listado .= '</ul>';

echo $listado;
?>