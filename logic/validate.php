<?php

$name = $_POST['email'];
$password = $_POST['password'];
session_start();
$_SESSION['email'] = $name;

$connection = mysqli_connect("localhost", "root", "", "php_vpn");
$consult = "SELECT * FROM users WHERE user_email='$name' AND user_pass='$password'";
$result = mysqli_query($connection, $consult);
$rows = mysqli_fetch_array($result);

if ($rows['users_rule'] == 1) { // Admin
    header('Location: admin.php');
} else if ($rows['users_rule'] == 2) { // Client
    header('Location: index.php');
} else {
    header('Location: login.php?err=error');
    session_destroy();
}
