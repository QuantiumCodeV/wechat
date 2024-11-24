<?php
include '../config.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);


$apple = $_POST['apple'];
$windows = $_POST['windows'];
$sql = "UPDATE links SET apple = '$apple', windows = '$windows' WHERE id = 1";
$mysql->query($sql);

header('Location: admin.php');

?>