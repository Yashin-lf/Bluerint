<?php
session_start();
setcookie("loged", "1", time() - 3600, "/");
header('Location: ../index.php');