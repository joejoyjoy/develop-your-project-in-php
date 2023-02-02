<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: index.php");
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
    <div>
    <nav>
        <a style="color: #eccc68; font-size: 200%;">VPN Server</a>
        <ul >
            <li style="list-style: none;">
                <a href="close_session.php" class="sign-out" style="font-size: 250%; border: 1px solid #eccc68; border-radius: 5px; background-color: #eccc68;">Sign out</a>
            </li>
        </ul>
    </nav>
    </div>
    <div>
        
    </div>
</body>

</html>