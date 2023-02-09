<?php
$connection = mysqli_connect("localhost", "root", "", "php_vpn");

if (isset($_POST['signup'])) {
    $email = trim($_POST['email']);

    mailCheck($email);
}

function mailCheck($email)
{

    $connection = mysqli_connect('localhost', 'root', "", 'php_vpn');

    $query = "SELECT * FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection, $query);
    $rows = mysqli_fetch_array($result);

    if (empty($rows['user_email'])) {
        if (

            strlen($_POST['name']) >= 1 && strlen($_POST['surname']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['phone']) >= 1
            && strlen($_POST['password']) >= 1 && strlen($_POST['rol']) >= 1
        ) {
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $userRole = trim($_POST['rol']);

            $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);

            $dbAdd = "INSERT INTO users (user_name, user_surname, user_email, user_phone, user_pass, user_rol)
            VALUES ('$name', '$surname', '$email', '$phone', '$password', '$userRole')";


            mysqli_query($connection, $dbAdd);
            mysqli_close($connection);

            header('Location: login.php?message=success');
        }
    } else {
        header('Location: ../view/createUser.php?err=error');
    }
}
