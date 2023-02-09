<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['pswd'];

$_SESSION['email'] = $email;

$connection = mysqli_connect('localhost', 'root', "", 'php_vpn');

$query = "SELECT * FROM users WHERE user_email = '$email'";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_array($result);

if ($rows['user_email'] == $email && password_verify($password, $rows['user_pass'])) {
    if ($rows['user_rol'] == 1) {
        session_start();
        $_SESSION['email'] = $_REQUEST["email"];
        header("Location: ../view/admin.php");
    } else if ($rows['user_rol'] == 2) {
        session_start();
        $_SESSION['email'] = $_REQUEST["email"];
        header("Location: ../view/client.php");
    } else {
        header('Location: login.php?err=error');
        session_destroy();
    }
    
} else {
    header("Location: login.php?err=error");
    session_destroy();
}

