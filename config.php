<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$config = [
    "MYSQL_HOST" => "localhost",
    "MYSQL_USER" => "admin",
    "MYSQL_PASSWORD" => "72Merasardtfy_",
    "MYSQL_DATABASE" => "wechat",
];


$mysql = new mysqli($config["MYSQL_HOST"], $config["MYSQL_USER"], $config["MYSQL_PASSWORD"]);

// Проверка подключения
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

// Создание базы данных, если она не существует
if ($mysql->query("CREATE DATABASE IF NOT EXISTS " . $config["MYSQL_DATABASE"]) === TRUE) {
    echo "Database created successfully or already exists.";
} else {
    echo "Error creating database: " . $mysql->error;
}

// Подключение к базе данных
$mysql->select_db($config["MYSQL_DATABASE"]);
