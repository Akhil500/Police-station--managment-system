//insert function
<?php
require 'connection.php';
$conn    = Connect();
$section_id    = $conn->real_escape_string($_POST['section_id']);
$details    = $conn->real_escape_string($_POST['details']);
$chapter   = $conn->real_escape_string($_POST['chapter']);


$query   = "INSERT into section_of_law (section_id ,details,chapter)
VALUES('" . $section_id . "','" . $details . "','" . $chapter . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
header("Location:sectionview.php");
$conn->close();
?>
