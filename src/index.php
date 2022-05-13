<?php
$server = 'mysql:host=127.0.0.1;dbname=posts;port=3306';
$username = 'user';
$password = 'user';

$conn = new PDO($server, $username, $password);
if (!$conn) {
    die('Connection failed');
}

$sql = "INSERT INTO post (content)
VALUES ('Naber')";

$conn->query($sql);
