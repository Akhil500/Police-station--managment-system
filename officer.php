//insert function
<?php
require 'connection.php';
$conn    = Connect();
$officer_id    = $conn->real_escape_string($_POST['officer_id']);
$name    = $conn->real_escape_string($_POST['name']);
$age   = $conn->real_escape_string($_POST['age']);
$gender   = $conn->real_escape_string($_POST['gender']);
$contact_no = $conn->real_escape_string($_POST['contact_no']);
$email_id = $conn->real_escape_string($_POST['email_id']);
$adhar_no= $conn->real_escape_string($_POST['adhar_no']);
$address= $conn->real_escape_string($_POST['address']);
$qualification= $conn->real_escape_string($_POST['qualification']);
$d_o_j= $conn->real_escape_string($_POST['d_o_j']);
$nationality = $conn->real_escape_string($_POST['nationality']);

$query   = "INSERT into officer (officer_id,name,age,gender,contact_no,email_id,adhar_no,address,qualification,d_o_j,nationality)
VALUES('" . $officer_id . "','" . $name . "','" . $age . "','" . $gender . "','" . $contact_no . "','" .$email_id ."','" . $adhar_no . "','" .$address ."','" . $qualification . "','" .$d_o_j ."','" .$nationality ."')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
header("Location:officerview.php");
$conn->close();
?>
