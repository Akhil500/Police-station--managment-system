<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"policestation");
if(isset($_GET['edit']))
{
	$sql="select * from officer where officer_id=".$_GET['edit'];
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($_POST['btn_update']))
{
	$m=$_POST['name'];
	$a=$_POST['age'];
	$g=$_POST['gender'];
	$c=$_POST['contact_no'];
	$e=$_POST['email_id'];
	$an=$_POST['adhar_no'];
	$ad=$_POST['address'];
	$q=$_POST['qualification'];
	$d=$_POST['d_o_j'];
	$n=$_POST['nationality'];
	
	$update="UPDATE officer SET name='$m',age='$a',gender='$g',contact_no='$c',email_id='$e',adhar_no='$an',address='$ad',qualification='$q',d_o_j='$d',nationality='$n' WHERE officer_id=".$_GET['edit'];
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:officerview.php");
	}
	
}
?>
<!doctype html>
<html>
<body>
  <style>
            body{background-color: #98FB98;
                 
            }
        </style>
<form method="post"><br><br><br>
<center><h1>EDIT OFFICERS</h1>
name:<input type="text"name="name" value="<?php echo $row['name']; ?>"><br><br>
age:<input type="number"name="age" value="<?php echo $row['age']; ?>"><br><br>
gender:<input type="text"name="gender" value="<?php echo $row['gender']; ?>"><br><br>
contact_no:<input type="text"name="contact_no" value="<?php echo $row['contact_no']; ?>"><br><br>
email_id:<input type="text"name="email_id" value="<?php echo $row['email_id']; ?>"><br><br>
adhar_no:<input type="text"name="adhar_no" value="<?php echo $row['adhar_no']; ?>"><br><br>
address:<input type="text"name="address" value="<?php echo $row['address']; ?>"><br><br>
qualification:<input type="text"name="qualification" value="<?php echo $row['qualification']; ?>"><br><br>
d_o_j:<input type="date"name="d_o_j" value="<?php echo $row['d_o_j']; ?>"><br><br>
nationality:<input type="text"name="nationality" value="<?php echo $row['nationality']; ?>"><br><br>

<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="officerview.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

