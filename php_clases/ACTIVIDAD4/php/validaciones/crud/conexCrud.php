<?php

$serv = "localhost";
$bd = "proyecto1";
$username_crud = "root";
$password_crud = "";

try {
    $conex_crud=new PDO("mysql:host=$serv;dbname=$bd",$username_crud,$password_crud);
    
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>