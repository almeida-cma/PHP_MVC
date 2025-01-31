<?php
$host = 'localhost';
$db_name = 'mvc';
$username = 'root';
$password = '';
$port = 7306;
$conn = mysqli_connect($host, $username, $password, $db_name, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>