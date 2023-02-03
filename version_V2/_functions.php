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

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'access';
            access();
            break;
    }
}

function access()
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['name'] = $name;

    $connection = mysqli_connect("localhost", "root", "", "php_vpn");
    $consult = "SELECT * FROM users WHERE users_name='$name' AND users_pswd='$password'";
    $result = mysqli_query($connection, $consult);
    $rows = mysqli_fetch_array($result);

    if ($rows['users_rule'] == 1) { //admin
        header('Location: user.php');
    } else if ($rows['users_rule'] == 2) { //lector
        header('Location: reader.php');
    } else {
        header('Location: login.php');
        session_destroy();
    }
}
