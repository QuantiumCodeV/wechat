<?php
require "../config.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Проверка на наличие переменных
if (!isset($USERNAME_DEFAULT) || !isset($PASSWORD_DEFAULT)) {
    die("Ошибка: Не заданы значения по умолчанию для имени пользователя или пароля.");
}

$username = $_POST['username'];
$password = $_POST['password'];

// Проверка имени пользователя и пароля
if ($username === $USERNAME_DEFAULT && $password === $PASSWORD_DEFAULT) {
    setcookie("admin", true);
    header("Location: admin.php");
} else {
    header("Location: login.php?errors=true");
}