<?php

session_start();
session_destroy();
unset($_SESSION['username']);

unset($_COOKIE['sessionOver']); 
setcookie('sessionOver', null, time()-2480, '/'); 
header('location: login.php');
?>