<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/reg.css">
    <script src="https://kit.fontawesome.com/11d65e2e30.js" crossorigin="anonymous"></script>
</head>
<body>
    <button class="op-navbar"><i class="fas fa-arrow-right"></i></button>
    <header class="header">
        <nav class="nav">
            <div class="tittle-nav">
                <h2 class="tittle-nav__h2">Menu Opciones</h2>
            </div>
            <ul class="nav__ul">
                <li class="nav__li"><a href="../index.php">home</a></li>
                <li class="nav__li"><a href="../php/login.php">iniciar sesion</a></li>
                <li class="nav__li"><a href="../php/reg.php">registro</a></li>
                <li class="nav__li"><a href="../php/support.php">ayuda y soporte</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-form">
        <form class="form" method="POST">
            <div class="form__section form__section-input">
                <div class="form__input-group">
                    <label for="name">Nombre: </label>
                    <input class="form__input" type="text" id="name" name="name" placeholder="ingrese su nombre" required>
                </div>
                <div class="form__input-group">
                    <label for="surn">Apellido: </label>
                    <input class="form__input" type="text" id="surn" name="surn" placeholder="ingrese su apellido" required>
                </div>
                <div class="form__input-group">
                    <label for="email">Correo: </label>
                    <input class="form__input" type="email" id="email" name="email" placeholder="ingrese su correo electronico" required>
                </div>
                <div class="form__input-group">
                    <label for="user">Usuario: </label>
                    <input class="form__input" type="text" id="user" name="user" placeholder="ingrese su nombre de usuario" required>
                </div>
                <div class="form__input-group">
                    <label for="dateBirth">Fecha de nacimiento: </label>
                    <input class="form__input" type="date" id="dateBirth" name="dateBirth" placeholder="ingrese su fecha de nacimiento" required>
                </div>
                <div class="form__input-group">
                    <label for="pais">Pais: </label>
                    <input class="form__input" type="text" id="pais" name="pais" placeholder="ingrese su pais" required>
                </div>
                <div class="form__input-group">
                    <label for="city">Cuidad: </label>
                    <input class="form__input" type="text" id="city" name="city" placeholder="ingrese su cuidad" required>
                </div>
                <div class="form__input-group">
                    <label for="addrs">Direccion: </label>
                    <input class="form__input" type="text" id="addrs" name="addrs" placeholder="ingrese su direccion" required>
                </div>
                <div class="form__input-group">
                    <label for="tel">Telefono: </label>
                    <input class="form__input" type="number" id="tel" name="tel" placeholder="ingrese su telefono" required>
                </div>
            </div>
            <div class="form__section form__section-sbmt">
                <input class="form__input form__input-sbmt" type="submit" name="submit">
            </div>
            <div class="form__section form__section-btns">
                <button class="form__input form__section__btn"><a href="../php/login.php">Ya tienes cuenta?</a></button>
                <button class="form__input form__section__btn"><a href="#">Olvidaste contraseña?</a></button>
            </div>
            <?php 
                include_once('validaciones/val.php');
            ?>
        </form>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>