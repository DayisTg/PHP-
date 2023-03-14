<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        include("form.php");
    ?>
    <div class="container-form">
        <form class="form" method="post">
            <h1>CALCULADORAR BASICA XD</h1>
            <div class="div-form">
                <label class="input label1" for="N1">Numero1</label>
                <input class="input input1" type="number" name="n1" id="N1" placeholder="Dijite el primer numero">
            </div>
            <div class="div-form">
                <label class="input label2" for="N2">Numero2</label>
                <input class="input input2" type="number" name="n2" id="N2" placeholder="Dijite el segundo numero">
            </div>
            <div class="div-form">
                <select class="input select" name="operation">
                    <option value="0">Ingrese su operador</option>
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Mult</option>
                    <option value="4">Division</option>
                </select>
            </div>
            <div class="div-form">
                <input class="input submit" type="submit">
            </div>
        </form>
    </div>
</body>
</html>


