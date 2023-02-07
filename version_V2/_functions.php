<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "php_vpn";

$connection = mysqli_connect($host, $user, $password, $database);
if (!$connection) {
    echo "No connection found with the database, error:" .
        mysqli_connect_error();
}

$name = $_POST['name'];
$password = $_POST['password'];
session_start();
$_SESSION['name'] = $name;

$connection = mysqli_connect("localhost", "root", "", "php_vpn");
$consult = "SELECT * FROM users WHERE user_email='$name' AND users_pswd='$password'";
$result = mysqli_query($connection, $consult);
$rows = mysqli_fetch_array($result);

if ($rows['users_rule'] == 1) { // Admin
    header('Location: user.php');
} else if ($rows['users_rule'] == 2) { // Client
    header('Location: reader.php');
} else {
    header('Location: login.php?err=error');
    session_destroy();
}
