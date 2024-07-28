<pre>
<?php
session_start();
include('../php/connect.php');
$hash = $_COOKIE['loged'];
$userinfo = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `hash`= '$hash'");
$user = mysqli_fetch_all($userinfo);
$userid = $user[0][0];
$userbalance = $user[0][6];


$minus = $_POST['sum'];

if ($userbalance >= $minus) {

    $newbalance = $userbalance - $minus;
    $connect->query("INSERT INTO `library` (userid, itemid) SELECT userid, itemid FROM `basket` WHERE `userid` = $userid");

    $updaterating = $connect->query("UPDATE `programs` SET `rating` = `rating` + 1 WHERE `id` in (SELECT `itemid` FROM `basket` WHERE `userid` = $userid)");
    $connect->query("DELETE FROM `basket` WHERE `userid` = $userid");
    $connect->query("UPDATE `accounts` SET `balance` = '$newbalance' WHERE `hash` = '$hash'");


    header("Location: ../php/basket.php");

}   else {
    $_SESSION['alert'] = 'Не достаточно средств';
    header("Location: ../php/basket.php");
}




?>
    </pre>