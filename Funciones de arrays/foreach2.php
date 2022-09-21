<!-- Recorrer array II -->

<?php
$colores = array('blanco' => 'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html', 'negro' => 'negro.html');
$listado = '';

$listado .= '<ul>';
foreach ($colores as $key => $value) {
    $listado .= "<li><a href='" . $value . "'>" . $key . "</a></li>";
}
$listado .= '</ul>';
echo $listado;
?>