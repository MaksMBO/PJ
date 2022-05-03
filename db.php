<?php
$dbhost = "localhost";
$dbname = "PJ";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_singles_all()
{
    global $db;
    return $db->query("SELECT * FROM turntables");
}

function get_db()
{
    global $db;
    return $db;
}
