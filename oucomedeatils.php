//insert function
<?php
require 'connection.php';
$conn    = Connect();
$outcome_id    = $conn->real_escape_string($_POST['outcome_id']);
$outcome_details    = $conn->real_escape_string($_POST['outcome_details']);
$o_date   = $conn->real_escape_string($_POST['o_date']);
$judge_name   = $conn->real_escape_string($_POST['judge_name']);
$court = $conn->real_escape_string($_POST['court']);
$place = $conn->real_escape_string($_POST['place']);
$case_id = $conn->real_escape_string($_POST['case_id']);
$officer_id = $conn->real_escape_string($_POST['officer_id']);
$section_id = $conn->real_escape_string($_POST['section_id']);
$complainant_id = $conn->real_escape_string($_POST['complainant_id']);

$query   = "INSERT into outcome (outcome_id,outcome_details,o_date,judge_name,court,place,case_id,officer_id,section_id,complainant_id)
VALUES('" . $outcome_id . "','" . $outcome_details . "','" . $o_date . "','" . $judge_name . "','" . $court . "','" .$place ."','" . $case_id . "','" .$officer_id ."','" . $section_id . "','" .$complainant_id ."','" .$section_id. "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
header("Location:out1.html");
$conn->close();
?>
