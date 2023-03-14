<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$user = $_POST['user'];
$add = $_POST['adress'];
$age = $_POST['age'];

if ($name > 1 && $email > 1 && $pass > 1 && $user > 1 && $add > 1 && $age > 1) {
    $resp = "hola!, su nombre es : $name | Su email es : $email | Su contraseña es : $pass | Su Usuario es : $user | Vives en : $add | Su edad es : $age";

    echo('<script>alert("'.$resp.'");</script>');
}
else {
    echo("error");
}

/* $usuario = [["name" => "Nombre: ".$_POST['name']], ["email" => "Email: ".$_POST['email']], ["pass" => "Contraseña: ".$_POST['pass']], ["user" => "Usuario: ".$_POST['user']], ["add" => "Direccion: ".$_POST['adress']], ["age" => "Edad: ".$_POST['age']]];
foreach ($usuario as $us) {
    foreach ($us as $datos) {
        echo("<script>alert('$datos');</script>");
    }
} */

?>