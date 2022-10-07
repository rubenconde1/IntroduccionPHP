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
        $email = filtrado($_POST["email"]);
        datosRegisro($username, $password, $email);

    }
    function datosRegisro ($username, $password, $email) {
        echo "Hola $username, estos son tus datos: <br>";
        echo "Nombre de usuari@:  $username <br>";
        echo "Contraseña: $password <br>";
        echo "Correo electrónico: $email <br>";
    }
?>