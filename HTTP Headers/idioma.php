<?php
    $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0, 2);
    
    if ($language == 'en') {
        $text = 'This is a text in English';
    } else {
        $text = 'Este texto está en castellano';
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
    <p><?= $text ?></p>
</body>
</html>