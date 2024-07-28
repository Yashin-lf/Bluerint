<?php
session_start();

include('../php/connect.php');
$hash = $_COOKIE['loged'];
$userinfo = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `hash`= '$hash'");

$password = $_POST['password'];
$repassword = $_POST['repassword'];

if (mb_strlen($password) < 6 || mb_strlen($password) > 99) {
    $_SESSION['succ'] = 'Недопустимый пароль';
    header('Location: /php/profile.php');
    exit();
}

if($password == $repassword){
    $update = mysqli_query($connect, "UPDATE `accounts` SET `password` = '$password' WHERE `accounts`.`hash` = '$hash';");
    $_SESSION['succ'] = 'Пароль обновлен';
    header('Location: /php/profile.php');
}   else {
    $_SESSION['succ'] = 'Пароли не совпадают';
    header('Location: /php/profile.php');
}



