<?php

include_once('conex.php');
class Users {
    private $name;
    private $surname;
    private $email;
    private $us;
    private $datebirth;
    private $pais;
    private $city;
    private $addr;
    private $tel;
}

if (isset($_POST['submit'])){
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $surname = trim($_POST['surn']);
        $email = trim($_POST['email']);
        $us = trim($_POST['user']);
        $datebirth = trim($_POST['dateBirth']);
        $pais = trim($_POST['pais']);
        $city = trim($_POST['city']);
        $addr = trim($_POST['addrs']);
        $tel = trim($_POST['tel']);
        $guardaDates = "INSERT INTO ejercicio1(nombres, apellidos, email, user, fec_nacimiento, pais, cuidad, direccion, telefono) VALUES ('$name', '$surname', '$email', '$us', '$datebirth', '$pais', '$city', '$addr', '$tel')";
        $total = mysqli_query($conexion, $guardaDates);
        echo("esta correcto");
        header("location:crud/tableCrud.php");
    }
    else {
        echo('<div>ALGO SALIO MAL :( NO ESTÁ REGISTRADO</div>');
    }
}

?>