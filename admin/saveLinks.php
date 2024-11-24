<?php
include '../config.php';

$apple = $_POST['apple'];
$windows = $_POST['windows'];
$sql = "UPDATE links SET apple = '$apple', windows = '$windows' WHERE id = 1";
$mysql->query($sql);

header('Location: admin.php');

?>