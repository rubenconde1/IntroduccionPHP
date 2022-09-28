<?php

use JetBrains\PhpStorm\Language;

    $language = $_GET["setLanguage"] ?? $_COOKIE["language"] ?? "es";
    setcookie("language", $language, time() + 30 * 24 * 60 * 60);

    

    if ($language == 'en') {
        $content = 'This page is in English';
        $title = 'Change the language of the page';
    } else {
        $content = 'Esta página está en castellano (Idioma por defecto)';
        $title = 'Cambiar el idioma de la página';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <ul><?= $title ?>
        <li><a href='idioma.php?setLanguage=es'>Español</a></li>
        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>
    </ul>

    <?= $content ?>
</body>
</html>