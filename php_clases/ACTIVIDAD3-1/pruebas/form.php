<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['operation'];
$sum = $n1 + $n2;
$rest = $n1 - $n2;
$mult = $n1 * $n2;
$div = $n1 / $n2;


if ($op == 1) {
    echo("<script>alert('$n1 + $n2 = $sum')</script>");
}
if ($op == 2) {
    echo("<script>alert('$n1 - $n2 = $rest')</script>");
}
if ($op == 3) {
    echo("<script>alert('$n1 x $n2 = $mult')</script>");
}
if ($op == 4) {
    echo("<script>alert('$n1 / $n2 = $div')</script>");
}
?>