<?php
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (str_contains($user_agent, 'Firefox')) {
        echo "<a href='index.html'>Enlace</a>";
    } else {
        echo "El navegador utilizado no es Firefox.";
    }
?>