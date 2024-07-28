<?php
session_start();

include('../php/connect.php');

$login = $_POST['login'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];


$logincheck = mysqli_query($connect, "SELECT `id` FROM `accounts` WHERE `login`= '$login'");
$logincheck = mysqli_fetch_assoc($logincheck);

$mailcheck = mysqli_query($connect, "SELECT `id` FROM `accounts` WHERE `mail`= '$mail'");
$mailcheck = mysqli_fetch_assoc($mailcheck);

$_SESSION['login'] = $login;
$_SESSION['mail'] = $mail;





if($logincheck > 0) {
    $_SESSION['alert'] = 'Логин занят';
    header('Location: /php/registration.php');
    exit();
}


if($mailcheck > 0) {
    $_SESSION['alert'] = 'E-mail занят';
    header('Location: /php/registration.php');
    exit();
}


if($password != $repassword) {
    $_SESSION['alert'] = 'Пароли не совпадают';
    header('Location: /php/registration.php');
    exit();
}


if (mb_strlen($login) < 3 || mb_strlen($login) > 21) {
    $_SESSION['alert'] = 'Недопустимый логин';
    header('Location: /php/registration.php');
    exit();
}


if (mb_strlen($password) < 6 || mb_strlen($password) > 99) {
    $_SESSION['alert'] = 'Недопустимый пароль';
    header('Location: /php/registration.php');
    exit();
}

if (mb_strlen($mail) < 4 || mb_strlen($mail) > 99) {
    $_SESSION['alert'] = 'Недопустимый E-mail';
    header('Location: /php/registration.php');
    exit();
}

$password = md5($password . 'hfgj4t3b5un5v3vqn');

$connect->query("INSERT INTO `accounts` (`id`, `login`, `mail`, `password`, `name`, `avatar`, `balance`, `hash`, `role`) VALUES (NULL, '$login', '$mail', '$password', '', '/image/avatar.png', '0', '', '0');");
$_SESSION['goodalert'] = 'Аккаунт зарегестрирован';
header('Location: /php/auth.php');

?>