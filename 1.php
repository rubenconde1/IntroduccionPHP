<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <!-- Insertar código php, sin la etiqueta ejecuta el contenido como texto -->
    <?php
        // Ejemplo de fecha y variable
        echo date("l");
        $parrafo = "hola";

        //Ejemplo de un bucle
        echo "<table border=1>";
        $contador=1;
        for ($n1=1; $n1 <=10; $n1++) { 
            echo "<tr>";
            for ($n2=1; $n2 <=10; $n2++) { 
                echo "<td>", $contador, "</td>";
                $contador++;
            }
            echo "</tr>";
        }
        echo "</table>";

        //Ejemplo multiplicación
        $primerValor = $_GET['x'] ?? 2;
        $segundoValor = $_GET['y'] ?? 1;
        echo "El resultado es: " . $primerValor * $segundoValor;
    ?>
    <br>
    <?= $parrafo ?>
</body>
</html>