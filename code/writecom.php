<?php
session_start();
include('../php/connect.php');
$hash = $_COOKIE['loged'];

$userid = $_POST['userid'];
$name = $_POST['name'];
$text = $_POST['text'];
$avatar = $_POST['avatar'];
$itemname = $_POST['itemname'];

$date = date("d.m.Y");

$connect->query("INSERT INTO `comments` (`id`, `date`, `name`, `text`, `avatar`, `likes`, `userid`, `itemname`) VALUES (NULL, '$date', '$name', '$text', '$avatar', '0', '$userid', '$itemname')");
header("Location: ".$_SERVER['HTTP_REFERER']);
