<?php
session_start();

require "db.php";
$db = get_db();

$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirm = $_POST["password_confirm"];

if ($password === $password_confirm) {
    $password = md5($password);
    $db->query("INSERT INTO `users` (`login`, `email`, `password`) VALUES ('$login', '$email', '$password')");
    $_SESSION["message"] = 'Регістрація пройшла успішно';
    header("Location: login.php");
} else {
    $_SESSION["message"] = 'Паролі не співпадають';
    header("Location: register.php");
}
