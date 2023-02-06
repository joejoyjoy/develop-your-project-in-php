<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['pswd'];

$emailCorrecto = "hopper@gmail.com";
$pswdCorrecta = password_hash('12345678', PASSWORD_BCRYPT);


echo "<p>The user email is: $email</p>";
echo "<p>The user password is: $password</p>";

if ($email === $emailCorrecto && password_verify($password, $pswdCorrecta)) {
    session_start();
    $_SESSION['email'] = $_REQUEST["email"];
    header("Location: index.php");
} else {
    header("Location: login.php?err=error");
}
?>