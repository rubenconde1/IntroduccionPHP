<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formpost.php" method="POST" enctype="multipart/form-data">
        Nombre:
        <input type="text" name="nombre" maxlength="50"><br>
        Correo:
        <input type="email" name="correo"><br>
        Contraseña:
        <input type="password" name="password"><br>
        Estudios:
        <select name="educacion">
            <option value="sin-estudios">Sin estudios</option>
            <option value="educacion-obligatoria"
            selected="selected">Educación obligatoria</option>
            <option value="formacion-profesional">Formación profesional</option>
            <option value="universidad">Universidad</option>
        </select><br>
        Avatar:
        <input type="file" name="imagen">
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>