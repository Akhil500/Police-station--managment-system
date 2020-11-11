<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"policestation");
if(isset($_GET['edit']))
{
	$sql="select * from section_of_law where section_id=".$_GET['edit'];
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($_POST['btn_update']))
{
	$m=$_POST['details'];
	$y=$_POST['chapter'];
	
	$update="UPDATE section_of_law SET details='$m',chapter='$y' WHERE section_id=".$_GET['edit'];
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:sectionview.php");
	}
	
}
?>
<!doctype html>
<html>
<body>
  <style>
            body{background-color:#98FB98;
                
            }
        </style>
<form method="post">
<br><br><br><br><br><br><center><h1>EDIT SECTION_OF_LAW INFORMATION</h1>
chapter:<input type="text"name="chapter" value="<?php echo $row['chapter']; ?>"><br><br>
details:<input type="text"name="details" value="<?php echo $row['details']; ?>"><br><br>

<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="sectionview.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

