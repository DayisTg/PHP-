<?php

// EJERCICIO #1
// ==================================================================
$edad = 17;

echo("Ejercicio 1 <br>");
if ($edad >= 0 and $edad < 18) {
    echo("pepe tiene: $edad es un culicadado, es menor d edad xD");
}
else if ($edad >= 18 and $edad <= 100) {
    echo("pepe tiene: $edad . Es mayor d edad xD, puede ir con las cariñosas");
}
else if ($edad >=100 and $edad <= 123) {
    echo("pepe tiene: $edad . Es mayor de edad y está huesudito xD");
}
else {
    echo("Re troll?");
}

echo("<br> <br> ");

// EJERCICIO #2
// ==================================================================
$num = 0;

echo("Ejercicio 2 <br>");
if ($num > 0) {
    echo("Tu numero: $num es positivo");
}
else if ($num < 0) {
    echo("Tu numero: $num es negativo");
}
else {
    echo("Tu numero: $num es neutro");
}
echo("<br> <br> ");
// EJERCICIO #3
// ==================================================================
echo("Ejercicio 3 <br>");

$nota = 5.9;
if ($nota >= 3.0 and $nota <=5.0) {
    echo("carechimba tu nota es: $nota pasaste, felicidades");
}
else if ($nota >= 0 and $nota <= 2.9) {
    echo("Tu nota es: $nota vaya estudie que no pasó JAJAJAAJA");
}
else {
    echo("Sos re troll :)");
}

?>