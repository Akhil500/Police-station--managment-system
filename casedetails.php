<?php
require 'connection.php';
$conn    = Connect();
$case_id   = $conn->real_escape_string($_POST['case_id']);
$case_details   = $conn->real_escape_string($_POST['case_details']);
$location   = $conn->real_escape_string($_POST['location']);
$case_type   = $conn->real_escape_string($_POST['case_type']);

$complainant_id = $conn->query($num);


$num = "SELECT complainant_id FROM  complainant WHERE complainant_id='$complainant_id'";




//$officer_id=mt_rand(1,6000);

//$section_id=mt_rand(1,6000);

$query   = "INSERT into cases (case_id,case_details,location,case_type) VALUES('" . $case_id . "','" . $case_details . "','" . $location . "','" . $case_type . "')";

//$query   = "INSERT into cases (case_id,case_details,location,case_type,officer_id,complainant_id,section_id) VALUES('" . $case_id . "','" . $case_details . "','" . $location . "','" . $case_type . "','" . $officer_id . "','" . $complainant_id . "','" . section_id . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
header("Location:case1.html");
$conn->close();
?>
