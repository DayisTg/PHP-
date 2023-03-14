<!-- ACTIVIDAD 2 -->
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
    <div class="content-form">
        <form method="post" class="form">
        <h1>Registrese carechimba xD</h1>
            <input class="input" type="text" name="name" placeholder="Escriba Su nombre" required>
            <input class="input" type="email" name="email" placeholder="Escriba Su email" required>
            <input class="input" type="password" name="pass" placeholder="Escriba Su contraseña" required>
            <input class="input" type="text" name="user" placeholder="Escriba Su Usuario" required>
            <input class="input" type="text" name="adress" placeholder="Escriba Su direccion" required>
            <input class="input" type="number" name="age" placeholder="Escriba Su Edad" required>
            <button class="input submit">Enviar</button>
        </form>
    </div>
    <?php
    include('form.php');
    ?>
</body>
</html>