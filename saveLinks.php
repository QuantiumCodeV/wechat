<?php
include 'config.php';

$apple = $_POST['apple'];
$macapple = $_POST['macapple'];
$google = $_POST['google'];
$microsoft = $_POST['microsoft'];
$weixin = $_POST['weixin'];

$sql = "UPDATE links SET apple = '$apple', macapple = '$macapple', google = '$google', microsoft = '$microsoft', weixin = '$weixin'";
$mysql->query($sql);

header('Location: admin.php');

?>