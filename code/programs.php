<?php
session_start();

include('../php/connect.php');

$name = $_POST['name'];
$price = $_POST['price'];
$genre = $_POST['genre'];
$developer = $_POST['developer'];
$version = $_POST['version'];
$system = $_POST['system'];
$architecture = $_POST['architecture'];
$date = $_POST['date'];
$about = $_POST['about'];
$mincpu = $_POST['mincpu'];
$minram = $_POST['minram'];
$mingpu = $_POST['mingpu'];
$minsize = $_POST['minsize'];
$link = $_POST['link'];
$category = $_POST['category'];


mkdir("../programs/" . $name);


$icon = 'programs/'. $name . '/' . time() . $_FILES['icon']['name'];
move_uploaded_file($_FILES['icon']['tmp_name'], '../' . $icon);
$icon = '../' . $icon;

$download = 'programs/'. $name . '/' . time() . $_FILES['download']['name'];
move_uploaded_file($_FILES['download']['tmp_name'], '../' . $download);
$download = '../' . $download;



$screenone = 'programs/'. $name . '/' . time() . $_FILES['screenone']['name'];
move_uploaded_file($_FILES['screenone']['tmp_name'], '../' . $screenone);
$screenone = '../' . $screenone;

$screentwo = 'programs/'. $name . '/' . time() . $_FILES['screentwo']['name'];
move_uploaded_file($_FILES['screentwo']['tmp_name'], '../' . $screentwo);
$screentwo = '../' . $screentwo;

$screenthree = 'programs/'. $name . '/' . time() . $_FILES['screenthree']['name'];
move_uploaded_file($_FILES['screenthree']['tmp_name'], '../' . $screenthree);
$screenthree = '../' . $screenthree;

$screenfour = 'programs/'. $name . '/' . time() . $_FILES['screenfour']['name'];
move_uploaded_file($_FILES['screenfour']['tmp_name'], '../' . $screenfour);
$screenfour = '../' . $screenfour;


$connect->query("INSERT INTO `programs` 
(`id`, `name`, `price`, `genre`, `developer`, `version`, `system`, `architecture`, `date`, `about`, `minsystem`, `mincpu`, `minram`, `mingpu`, `minsize`, `link`, `icon`, `download`, 
`screenshot1`, `screenshot2`, `screenshot3`, `screenshot4`, `rating`, `category`) VALUES 
(NULL, '$name', '$price', '$genre', '$developer', '$version', '$system', '$architecture', '$date', 
'$about', '$minsystem', '$mincpu', '$minram', '$mingpu', '$minsize', '$link', '$icon', '$download', '$screenone', '$screentwo', '$screenthree', '$screenfour', '0', '$category');");

$_SESSION['alert'] = 'Успешно добавлено';
header('Location: /php/addprogram.php');

