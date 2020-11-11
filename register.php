//insert function
<?php
require 'connection.php';
$conn    = Connect();
$fname    = $conn->real_escape_string($_POST['fname']);
$lname    = $conn->real_escape_string($_POST['lname']);
$u_email   = $conn->real_escape_string($_POST['u_email']);
$mob    = $conn->real_escape_string($_POST['mob']);
$pass = $conn->real_escape_string($_POST['pass']);
$sex = $conn->real_escape_string($_POST['sex']);
$query   = "INSERT into register (fname,lname,u_email,mob,pass,sex) VALUES('" . $fname . "','" . $lname . "','" . $u_email . "','" . $mob . "','" . $pass . "','" . $sex . " ')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
header("Location:login.php");
$conn->close();
?>
