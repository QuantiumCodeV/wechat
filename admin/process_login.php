<?php
require "../config.php";

// Проверка на наличие переменных
if (!isset($USERNAME_DEFAULT) || !isset($PASSWORD_DEFAULT)) {
    die("Ошибка: Не заданы значения по умолчанию для имени пользователя или пароля.");
}

$username = $_POST['username'];
$password = $_POST['password'];

// Проверка имени пользователя и пароля
if ($username === $USERNAME_DEFAULT && $password === $PASSWORD_DEFAULT) {
    setcookie("admin", true);
    Header("Location: admin.php");
} else {
    echo "Неверное имя пользователя или пароль.";
}