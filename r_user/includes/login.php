<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>login</title>
</head>

<body>
    <form action="_functions.php" method="POST">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <br>
                        <br>
                        <h3 class="text-center">Iniciar Sesión</h3>
                        <br>
                        <div class="form-group">
                            <label for="correo">Usuario:</label><br>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                            <input type="hidden" name="accion" value="acceso_user">
                        </div>
                        <div class="form-group">
                            <br>
                            <center>
                                <input type="submit" class="btn btn-success" value="Ingresar">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>