<?php

session_start();

if (isset($_SESSION['logged_in'])) {
    header:
    ('Location: ./php-functions/panel.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="shortcut icon" href="./assets/img/vpn.png" type="image/x-icon">
    <script src="./assets/js/bootstrap.bundle.min.js" defer></script>
    <title>VPN Server</title>
</head>

<body>
    <div class="row align-items-center text-center">
        <div class="col-md-auto bg-light">
            <form action="./php-functions/validate.php" method="post" enctype="multipart/form-data" class="box">
                <div class="mb-3">
                    <label for="loginFormEmail" class="form-label">Email address</label>
                    <input type="email" name="email" class="email-pswd form-control" id="loginFormEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="loginFormPassword" class="form-label">Password</label>
                    <input type="password" name="pswd" class="email-pswd form-control" id="loginFormPassword" minlength="8" maxlength="21" required>
                </div>
                <button type="submit" class="log-in btn btn-primary" style="cursor: pointer;">Login</button>
                <?php
                if (isset($_GET['err']))
                    echo "<br>Incorrect credentials. Please <a href='index.php'>try again</a>";
                ?>
            </form>
        </div>
        <div class="col position-relative p-0">
            <img src="./assets/img/background.png" class="img-fluid" alt="VPN Img">
        </div>
    </div>
</body>

</html>