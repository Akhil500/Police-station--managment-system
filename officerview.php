<html>
<?php


$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"policestation");

$val=mysqli_query($con,"select * from officer ");
echo "</br></br>";
echo "<center>";

echo "<tr><td><font size=30\" color=\"black\"><b> LIST OF OFFICER</b></font>"."</td></tr>";


echo "<table border=5 bgcolor=\"#98FB98\" cellpadding=\"3\" cellspacing=\"10\">";
echo "<font color=\"white\">";
echo "<tr><td>"."OFFICER_ID"."</td><td>"."NAME"."</td><td>"."AGE"."</td><td>"."GENDER"."</td><td>"."CONTACT_NO"."</td><td>"."EMAIL_ID"."</td><td>"."ADHAR_NO"."</td><td>"."ADDRESS"."</td><td>"."QUALIFICATION"."</td><td>"."D_O_J"."</td><td>"."NATIONALITY"."</td><td>";


while($row=mysqli_fetch_array($val))
{
echo "<tr><td>".$row['officer_id']."</td><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['gender']."</td><td>".$row['contact_no']."</td><td>".$row['email_id']."</td><td>".$row['adhar_no']."</td><td>".$row['address']."</td><td>".$row['qualification']."</td><td>".$row['d_o_j']."</td><td>".$row['nationality']."</td><td>";
?>
<td><a href="editofficer.php?edit=<?php echo $row['officer_id'];?>"alt="edit"><b>EDIT</b></a></td>
<td><a href="deleteofficer.php?delete=<?php echo $row['officer_id'];?>"alt="delete"><b>DELETE</b></a></td>
</tr>
<?php
}


echo "</font>";
echo "</table>";
echo "<form action=\"http://localhost/DBMS/home.html\">";
echo "<input type=\"submit\" name=\"button\" value=\"back\" style=\"height: 40px; width: 100px\">";
echo "</form>";
echo "</center>";
echo "</br></br>";

?>
</html>