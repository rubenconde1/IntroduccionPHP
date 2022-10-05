<?php
    function filtrado ($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);

        return $datos;
    }

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

    $username = filtrado($_POST["user_name"]);
    $password = filtrado($_POST["password"]);
    $password2 = filtrado($_POST["2password"]);

    if ($password == $password2) {
        return $password;
    }
    $email = filtrado($_POST["email"]);

    function datosRegisro () {

        if(isset($_POST["submit"])) {
            echo "<h2>Mostrar datos enviados</h2>";
    
            Nombre : <?= $username ?? "" ?> <br>
            Contraseña : <?= $password ?? "" ?> <br>
            Email : <?= $email ?? "" ?> <br>
        }
    }
}
?>