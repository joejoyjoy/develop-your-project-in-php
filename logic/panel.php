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
    <title>VPN server</title>
</head>

<body>
    <div class="nav-bar">
    <nav style="border: 3px solid #130f40; border-radius: 5px; background-color: #30336b; width: 10%; text-align: center;">
        <a style="color: #eccc68; font-size: 200%;">LogUs in!</a>
        <ul style="padding-left: 0;">
            <li style="list-style: none;">
                <a href="close_session.php" class="sign-out" style="font-size: 250%; border: 1px solid #eccc68; border-radius: 5px; background-color: #eccc68;">Sign out</a>
            </li>
        </ul>
    </nav>
    </div>
    <div>
        <h1 style="color: #130f40; font-size: 500%; border: 3px solid #130f40; border-radius: 5px; background-color: #f0932b; width: 30%; text-align: center;">You have successfully logged in!</h1>
    </div>
</body>

</html>