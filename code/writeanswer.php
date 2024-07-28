<?php
session_start();
include('../php/connect.php');
$hash = $_COOKIE['loged'];

$userid = $_POST['userid'];
$text = $_POST['text'];
$answerid = $_POST['answerid'];



$connect->query("INSERT INTO `forum_answers` (`id`, `text`, `userid`, `answerid`, `date`) VALUES (NULL, '$text', '$userid', '$answerid', NOW())");
$connect->query("UPDATE `forum` SET `answers` = `answers` +1 WHERE `forum`.`id` = $answerid");
header("Location: ".$_SERVER['HTTP_REFERER']);
