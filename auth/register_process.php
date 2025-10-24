<?php

//loading config
$config = require_once '../config/database.php';

//creating connection
$conn = new mysqli(
    $config['host'],
    $config['username'],
    $config['password'],
    $config['database']
);

//checking connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset($config['charset']);

//Adding new user


?>