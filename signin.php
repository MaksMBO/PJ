<?php
session_start();

require "db.php";
$db = get_db();

$login = $_POST["login"];
$password = md5($_POST["password"]);

$check_user = $db->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if ($check_user->rowCount() > 0) {
    $user = $check_user->fetchAll();

    $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'login' => $user['login']
    ];
    header("Location: lending.php");

} else {
    $_SESSION["message"] = 'Логін або пароль недійсні!';
    header("Location: login.php");
}