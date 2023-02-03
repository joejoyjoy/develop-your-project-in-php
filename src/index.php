<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {
    header("Location: ./includes/login.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <link rel="shortcut icon" href="./assets/img/vpn.png" type="image/x-icon">
    <script src="./assets/js/bootstrap.bundle.min.js" defer></script>
    <title>Registro | VPN Server</title>
</head>

<body>
    <form action="./includes/validar.php" method="POST">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <br>
                        <br>
                        <h3 class="text-center">Registro de nuevo usuario</h3>
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Correo:</label><br>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="form-label">Telefono *</label>
                            <input type="tel" id="telefono" name="telefono" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="rol" class="form-label">Rol de usuario *</label>
                            <input type="number" id="rol" name="rol" class="form-control" placeholder="Escribe el rol, 1 admin, 2 lector..">
                        </div>

                        <br>

                        <div class="mb-3">
                            <input type="submit" value="Guardar" class="btn btn-success" name="registrar">
                            <a href="./views/user.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>