<?php
    $dejame_entrar = $_GET["acceso"] ?? 0;

    if ($dejame_entrar == 1) {
        echo "Bienvenido";
    } else {
        header('Location: ./login.php');
    }
?>