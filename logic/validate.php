<?php
    
$email = $_REQUEST['email'];
$password = $_REQUEST['pswd'];

$_SESSION['email'] = $email;

$connection = mysqli_connect('localhost', 'root', "", 'vpn');

$query = "SELECT * FROM user WHERE user_email = '$email'";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_array($result);

if ($rows['user_email'] == $email && password_verify($password, $rows['user_pass'])) {
    session_start();
    $_SESSION['email'] = $_REQUEST["email"];
    header("Location: index.php");
} else {
    header("Location: login.php?err=error");
    session_destroy();
}

?>