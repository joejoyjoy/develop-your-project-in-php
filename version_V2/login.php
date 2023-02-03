<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/main.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../src/assets/img/vpn.png" type="image/x-icon">
    <script src="../src/assets/js/bootstrap.bundle.min.js" defer></script>
    <title>Login | VPN Server</title>
</head>

<body>
    <form action="_functions.php" method="POST">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <br>
                        <h1 class="m-4">Globe Icon:
                            <i class="bi-globe"></i>
                        </h1>
                        <br>
                        <h3 class="text-center">Login</h3>
                        <br>
                        <div class="form-group">
                            <label for="correo">User name:</label><br>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                            <input type="hidden" name="action" value="access">
                        </div>
                        <div class="form-group">
                            <br>
                            <center>
                                <input type="submit" class="btn btn-success" value="Login">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>