<?php

// ================== ACTIVIDAD #1 ======================
// METODO FACIL--
echo("ACTIVIDAD #1 <br> 1. calcular e imprimir la suma de todos los elementos de un array. <br>");
$numeros = [45,67,567,7,5,6,867,63,567,45];
$num = array_sum($numeros);
echo("TOTAL DE LA SUMA FACIL XD: $num <br>");

//METODO DIFICIL-- xD, profe gracias x hacerme quemar neuronas, le agradezco :) att: DayisTg 
// X cierto siganmen en twitch (TWITCH = dayistg01) que subo gta5 y fortnite xD
$total = 0;
foreach ($numeros as $key => $value) {
    echo("$value + $total = ");
    $total = $value + $total;
    echo($total);
    echo("<br>");
}


/* //ACTIVIDAD 1 / ERROR #1
for ($i=0; $i < 10; $i++) { 
    $numeros = [45,67,567,7,5,6,867,63,567,456,456];
    $total = $numeros + $total;

    echo($total);
     echo($num[0] + $num[1] + $num[2] + $num[3] + $num[4] + $num[5] + $num[6] + $num[7] + $num[8] + $num[9] + $num[10]);
    echo("<br>"); 
} */
echo("____________________________________________________");

// ================== ACTIVIDAD #2 ======================
echo("<br><br> ACTIVIDAD #2 <br> 1. calcular e imprimir el promedio de todos los elementos de un array. <br>");

$prom = [85,37,34,21];
$t = 0;
foreach ($prom as $key => $value) {
    echo("+ $value ");
    $t = $t + $value;
    $div = $key + 1;
}
    echo("= $t <br>");
    $total = $t / $div;
    echo("$t ÷ 4 = $total");


    echo("<br> ____________________________________________________");
// ============= ACTIVIDAD #3 Y #5 ====================
echo("<br><br><br> ACTIVIDAD #3 Y #5 <br> 1. buscar e imprimir el numero mayor y el menor de un array. <br> 2. investigar las funciones de php, que me organizan de menor a mayor un arreglo y sus respectivos ejemplos. <br>");
$num = [45,35,63,434,634,67];
foreach ($num as $key => $value) {
    sort($num, SORT_NUMERIC);
    print_r(" $value / ");
}
echo("<br> EL VALOR MAYOR ES: $num[5] <br>");
echo("EL VALOR MENOR ES: $num[0]");
echo("<br> ____________________________________________________");


// ================== ACTIVIDAD #4 ======================
echo("<br><br><br> ACTIVIDAD #4 <br> 1. Investigar como eliminar un elemento de un array y hacer un ejemplo. <br>");
$nums = [45,35,23,434,634,67,86,75];
foreach ($nums as $key => $value) {
    unset($nums[4]);
    print(" - $value");
}
echo(" - <br>");
print_r($nums);
echo("<br> ____________________________________________________");

// ================== ACTIVIDAD #6 ======================
echo("<br><br><br> ACTIVIDAD #6 <br> 1. Crear una matriz de n x n y llenar de forma automatica con numeros aleatorios. <br>");

for ($i=0; $i < 7; $i++) {
    $aleatorio = rand(1,100);
    $aleatorio++;
    $matrizxD = [
        ['num1'=>$aleatorio, 'num2'=>$aleatorio, 'num3'=>$aleatorio],
        ['num1'=>$aleatorio, 'num2'=>$aleatorio, 'num3'=>$aleatorio],
        ['num1'=>$aleatorio, 'num2'=>$aleatorio, 'num3'=>$aleatorio]
    ];
}
print_r($matrizxD);




/* $matrizxD = [['num1'=>78, 'num2'=>57, 'num3'=>24],
        ['num1'=>23, 'num2'=>84, 'num3'=>56],
        ['num1'=>64, 'num2'=>43, 'num3'=>52]];
foreach ($matrizxD as $fila) {
    echo($fila['num3']);
    echo("<br>");
}
 */

echo("<br> ____________________________________________________");
?>