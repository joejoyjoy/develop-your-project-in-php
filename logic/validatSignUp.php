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
            && strlen($_POST['password']) >= 1 && strlen($_POST['rule']) >= 1
        ) {
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $userRule = trim($_POST['rule']);

            $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);

            $dbAdd = "INSERT INTO users (user_name, user_surname, user_email, user_phone, user_pass, user_rule)
            VALUES ('$name', '$surname', '$email', '$phone', '$password', '$userRule')";


            mysqli_query($connection, $dbAdd);
            mysqli_close($connection);

            header('Location: ./login.php?message=success');
        }
    } else {
        header('Location: ./createUser.php?err=error');
    }
}
