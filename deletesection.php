<html>
<?php


$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"policestation");

if(isset($_GET['delete']))
{
	$del=$_GET['delete'];
	$sql="delete from section_of_law where section_id='$del'";
	$res=mysqli_query($con,$sql)  or die("FAILED".mysqli_error());
	echo "<meta http-equiv='refresh' content='0;url=sectionview.php'>";
}
?>
</html>
