<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$phone   = $conn->real_escape_string($_POST['phone']);
$occation    = $conn->real_escape_string($_POST['occation']);
$date = $conn->real_escape_string($_POST['c_date']);
$message = $conn->real_escape_string($_POST['message']);

$query   = "INSERT into reservation (name,email,phone,occation,c_date,message) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $occation . "','" . $date . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>