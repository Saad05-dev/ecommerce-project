<?php

//handling errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email = $_POST['email'];
$password = $_POST['password'];

$config = require_once '../config/database.php';

$conn = new mysqli(
    $config['host'],
    $config['username'],
    $config['password'],
    $config['database']
);

if($config->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset($config['charset']);

//email verification
$stmt = $conn->prepare("SELECT customer_id,first_name,password FROM customers WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows === 1)
{
    $customer = $result->fetch_assoc();

    //password verification
    if(password_verify($password,$customer['password']))
    {
        $_SESSION['customer_id'] = $customer['customer_id'];
        $_SESSION['first_name'] = $customer['first_name'];
        header("Location: ../user/dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid password'); window.location.href='login.php';</script>";
    }
}
else
{
    echo "<script>alert('Email not found'); window.location.href='login.php';</script>";
}

$stmt->close();

?>