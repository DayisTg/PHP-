
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
    include('Act-1.php');
    ?>
    <div class="content-form">
        <form class="form" method="post">
            <input class="form__input input1" type="number" placeholder="Ingrese el primer numero a operar" name="n1">
            <input class="form__input input2" type="number" placeholder="Ingrese el segundo numero a operar" name="n2">
            <select class="form__input opt"  name="option">
                <option value="0"> - - - - </option>
                <option value="1">SUMA</option>
                <option value="2">RESTA</option>
                <option value="3">MULTIPLICACION</option>
                <option value="4">DIVISION</option>
            </select>
            <input class="form__input submit" type="submit" name="submit">
        </form>
    </div>
</body>
</html>