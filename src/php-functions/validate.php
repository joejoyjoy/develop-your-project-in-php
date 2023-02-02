<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['pswd'];

$emailCorrecto = "squadhopper@gmail.com";
$pswdCorrecta = "12345678";

if ($email === $emailCorrecto && $password === $pswdCorrecta) {
    session_start();
    $_SESSION['email'] = $_REQUEST["email"];
    header("Location: dashboard.php");
} else {
    header("Location: ../index.php?err=error");
}
?>