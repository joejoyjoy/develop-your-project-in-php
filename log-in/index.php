<?php

    session_start();

    if (isset($_SESSION['logged_in'])){
        header:('Location: panel.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>insert name</title>
</head>

<body>

</body>
<form action="validate.php" method="post" enctype="multipart/form-data" class="box">
    <label>Email<br><br> <input class="email-pswd" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></label><br><br>
    <label>Password<br><br> <input class="email-pswd" type="password" name="pswd" minlength="8" maxlength="21" required></label><br><br>
    <button class="log-in" type="submit" style="cursor: pointer;">Log in</button>
</form>

</html>
