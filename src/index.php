<?php
$server = 'mysql';
$username = 'root';
$password = 'root';

$conn = new mysqli($server, $username, $password, 'posts');

if ($conn->connect_error) {
    die('Connection failed');
}


$sql = "INSERT INTO post (content)
VALUES ('Naber')";

$conn->query($sql);
