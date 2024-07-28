<?php
session_start();

include('../php/connect.php');
$hash = $_COOKIE['loged'];
$userinfo = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `hash`= '$hash'");
$user = mysqli_fetch_all($userinfo);
$useravatar = $user[0][5];

$name = $_POST['name'];
$mail = $_POST['mail'];

$path = 'uploads/' . time() . $_FILES['avatar']['name'];
move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);
$path = '../' . $path;

if($_FILES['avatar']['size'] == '0') {
    $path = $useravatar;
};

$update = mysqli_query($connect, "UPDATE `accounts` SET `mail` = '$mail', `password` = '$password', `avatar` = '$path', `name` = '$name' WHERE `accounts`.`hash` = '$hash';");

header('Location: /php/profile.php');
