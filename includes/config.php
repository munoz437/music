<?php

//require_once realpath(__DIR__ . '/../vendor/autoload.php');
ob_start();
session_start();

$timezone = date_default_timezone_set("Europe/London");

$server = 'localhost';
$username = 'root';
$password = 'homeland';
$db = 'db_music';
$port = 3306;

$con = new mysqli($server, $username, $password, $db, $port);

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}

?>
