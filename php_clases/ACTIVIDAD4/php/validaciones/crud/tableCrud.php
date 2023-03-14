<?php

include('conexCrud.php');
$stm = $conex_crud->prepare("SELECT * FROM ejercicio1");
$stm->execute();
$contact = $stm->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/11d65e2e30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/main.css">
    <link rel="stylesheet" href="../../../css/Crud.css">
</head>
<body>
    <div class="container-main">
        <div class="container-btns">
            <button><a href="../../../index.php">Volver a la pag principal</a></button> 
        </div>
        <div class="container-table">
                <div class="container-Crud-btns">
                    <button class="btn-op">CREAR</button>
                </div>
            <table class="table">
                <thead class="table__head">
                    <tr class="table__head__row">
                        <th  class="table__head__col">Nombre</th>
                        <th  class="table__head__col">Apellido</th>
                        <th  class="table__head__col">Correo</th>
                        <th  class="table__head__col">Usuario</th>
                        <th  class="table__head__col">Fecha de nacimiento</th>
                        <th  class="table__head__col">Pais</th>
                        <th  class="table__head__col">Cuidad</th>
                        <th  class="table__head__col">Direccion</th>
                        <th  class="table__head__col">Telefono</th>
                        <th  class="table__head__col">ID</th>
                        <th  class="table__head__col">ACCION</th>
                    </tr>
                </thead>
                <tbody class="table__body">
                <?php foreach ($contact as $contacto) { ?>
                    <tr class="table__body__row">
                        <td class="table__body__col"> <?php echo($contacto['nombres']); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["apellidos"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["email"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["user"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["fec_nacimiento"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["pais"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["cuidad"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["direccion"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["telefono"]); ?> </td>
                        <td class="table__body__col"> <?php echo($contacto["id"]); ?> </td>
                        <td class="table__body__col">ELIMINAR | EDITAR</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="container-alert-create">
            <form class="form">
                <button class="form__btn-exit"><i class="fab fa-xbox"></i></button>
                <h1>CREAR NUEVO USUARIO</h1>
                <input class="form__input-alrt" type="text" name="name-alert" placeholder="nombre">
                <input class="form__input-alrt" type="text" name="surn-alert" placeholder="apellido">
                <input class="form__input-alrt" type="email" name="email-alert" placeholder="correo electronico">
                <input class="form__input-alrt" type="text"  name="user-alert" placeholder="nombre de usuario">
                <input class="form__input-alrt" type="date" name="dateBirth-alert" placeholder="fecha de nacimiento">
                <input class="form__input-alrt" type="text" name="pais-alert" placeholder="pais">
                <input class="form__input-alrt" type="text" name="city-alert" placeholder="cuidad">
                <input class="form__input-alrt" type="text" name="addrs-alert" placeholder="direccion">
                <input class="form__input-alrt" type="number" name="tel-alert" placeholder="telefono">
                <input class="form__input form__bmt-alrt" type="submit" name="submit-alert">
            </form>
        </div>
    </div>
    <script src="../../../js/crud.js"></script>
</body>
</html>