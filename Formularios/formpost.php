<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formpost</title>
</head>
<body>
    Hola <?php echo $_POST["nombre"]; ?><br>
    Tu email es: <?php echo $_POST["correo"]; ?><br>
    Tu contraseña es: <?php echo $_POST["password"]; ?><br>
    Tu educación es: <?php echo $_POST["educacion"]; ?><br>
    Tu avatar es: <?php echo $_POST["imagen"]; ?>
</body>
</html>