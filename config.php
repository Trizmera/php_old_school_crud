<?php
$host = 'localhost';
$username = 'localhost';
$password = 'senha';
$database = 'crud_new';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed! " . mysqli_connect_error());
}