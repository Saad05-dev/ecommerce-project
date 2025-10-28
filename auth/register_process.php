<?php

//handling errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Getting the values of necessary fields from the register form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$countryCode = $_POST['country-code'];
$phone_number = $_POST['phone'];
$phone = $countryCode . $phone_number; 

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

//Checking if user already exists
$check = $conn->prepare("SELECT customer_id,first_name from customers where email = ?");
$check->bind_param("s",$email);
$check->execute();
$check_result = $check->get_result();
if($check_result->num_rows > 0)
{
    echo "<script>alert('account already exists!');window.location.href = 'register.php';</script>";
    exit();
}
//Adding new user

$stmt = $conn->prepare("INSERT INTO customers (email, password, first_name, last_name, phone) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss",$email,$password,$first_name,$last_name,$phone);

//Excecution
if($stmt->execute())
{
    header("Location: login.php");
    exit;
}
else
{
    echo "Error:" . $stmt->error;
}
$stmt->close();
$conn->close();

?>