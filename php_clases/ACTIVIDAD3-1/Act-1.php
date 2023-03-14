<?php
// ACTIVIDAD 1 / COMPLETA :3
$option = $_POST['option'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

/*     if ($option == 0) {
    print("Operacion invalidad, selecciona un metodo a operar");
    }
    elseif ($option == 1) {
        echo($n1 + $n2);
    }
    elseif ($option == 2) {
        echo($n1 - $n2);
    }
    elseif ($option == 3) {
        echo($n1 * $n2);
    }
    elseif ($option == 4) {
        echo($n1 / $n2);
    }
 */

    switch ($option) {
        case 1: echo($n1 + $n2);
            break;
        case 2: echo($n1 - $n2);
            break;
        case 3: echo($n1 * $n2);
            break;
        case 4: echo($n1 / $n2);
            break;
        default: echo("Elige un operador carechimba");
            break;
    }
?>