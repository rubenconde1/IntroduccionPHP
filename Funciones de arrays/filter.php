<!-- Filtros -->

<?php
    $alumnos = [
        ["nombre" => "Pepe", "edad" => 20],
        ["nombre" => "Pedro", "edad" => 21],
        ["nombre" => "Andrés", "edad" => 22],
        ["nombre" => "Ana", "edad" => 23],
        ["nombre" => "Lola", "edad" => 20]
    ];

    $contactos = [
        ["codigo" => 1, "nombre" => "Juan Pérez", "telefono" => "966112233", "email" => "juanp@gmail.com"],
        ["codigo" => 2, "nombre" => "Ana López", "telefono" => "965667788", "email" => "anita@hotmail.com"],
        ["codigo" => 3, "nombre" => "Mario Montero", "telefono" => "965929190", "email" => "mario.mont@gmail.com"],
        ["codigo" => 4, "nombre" => "Laura Martínez", "telefono" => "611223344", "email" => "lm2000@gmail.com"],
        ["codigo" => 5, "nombre" => "Nora Jover", "telefono" => "638765432", "email" => "norajover@hotmail.com"]
    ];
    print_r($contactos);
    echo "<br>";

    $filtrarPor = strtolower($_GET["filtrarPor"] ?? "");
    $filtrados = array_filter($contactos, 
    function($contacto) use ($filtrarPor){
        return strpos(strtolower($contacto["nombre"]), $filtrarPor) !== FALSE;
    });

    print_r($filtrados);
?>