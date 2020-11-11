//insert function
<?php
require 'connection.php';
$conn    = Connect();
$case_id    = $conn->real_escape_string($_POST['case_id']);
$case_details    = $conn->real_escape_string($_POST['case_details']);
$location   = $conn->real_escape_string($_POST['location']);
$d_o_i    = $conn->real_escape_string($_POST['d_o_i']);
$case_type = $conn->real_escape_string($_POST['case_type']);
$officer_id = $conn->real_escape_string($_POST['officer_id']);
$complainant_id = $conn->real_escape_string($_POST['complainant_id']);
$section_id = $conn->real_escape_string($_POST['section_id']);

$query   = "INSERT into cases (case_id,case_details,location,d_o_i,case_type,officer_id,complainant_id,section_id) VALUES('" . $case_id . "','" . $case_details . "','" . $location . "','" . $d_o_i . "','" . $case_type . "','" .$officer_id ."','" .$complainant_id ."','" .$section_id. "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
header("Location:case1.html");
$conn->close();
?>
