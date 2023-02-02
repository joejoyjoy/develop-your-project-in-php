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
<form action="./php-functions/validate.php" method="post" enctype="multipart/form-data" >
    <label>Email<br><br> <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></label><br><br>
    <label>Password<br><br> <input type="password" name="pswd" minlength="8" maxlength="21" required></label><br><br>
    <?php 
    
    ?>
    <button type="submit" style="cursor: pointer;">Log in</button>
    <div>
        <?php
        if(isset($_GET['err']))
            echo "Incorrect credentials. Please <a href='index.php'>try again</a>";
        ?>
    </div>
</form>
</body>
</html>