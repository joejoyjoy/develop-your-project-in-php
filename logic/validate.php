<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['pswd'];

$emailCorrecto = "hopper@gmail.com";
$pswdCorrecta = "12345678";

echo "<p>The user email is: $email</p>";
echo "<p>The user password is: $password</p>";

if ($email === $emailCorrecto && $password === $pswdCorrecta) {
    session_start();
    $_SESSION['email'] = $_REQUEST["email"];
    header("Location: panel.php");
} else {
    header("Location: login.php?err=error");
}
?>