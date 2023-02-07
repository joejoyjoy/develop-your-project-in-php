<?php
$connection = mysqli_connect("localhost", "root", "", "php_vpn");

if (isset($_POST['signup'])) {

  if (
    strlen($_POST['email']) >= 1 && strlen($_POST['created_email'])  >= 1 && strlen($_POST['phone'])  >= 1
    && strlen($_POST['password'])  >= 1 && strlen($_POST['rule']) >= 1
  ) {
    $email = trim($_POST['email']);
    $userEmail = trim($_POST['created_email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $userRule = trim($_POST['rule']);

    $dbAdd = "INSERT INTO users (user_email, user_pass, users_rule)
    VALUES ('$email', '$password', '$userRule' )";

    mysqli_query($connection, $dbAdd);
    mysqli_close($connection);

    header('Location: ./login.php?message=success');
  }
}
