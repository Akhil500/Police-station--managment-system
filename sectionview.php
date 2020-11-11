<html>
<?php


$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"policestation");

$val=mysqli_query($con,"select * from section_of_law ");
echo "</br></br>";
echo "<center>";

echo "<tr><td><font size=30\" color=\"black\"><b> LIST OF SECTION_OF_LAW</b></font>"."</td></tr>";


echo "<table border=10 bgcolor=\"#98FB98\" cellpadding=\"20\" cellspacing=\"10\">";
echo "<font color=\"white\">";
echo "<tr><td>"."SECTION_ID"."</td><td>"."DETAILS"."</td><td>"."CHAPTER"."</td><td>";


while($row=mysqli_fetch_array($val))
{
echo "<tr><td>".$row['section_id']."</td><td>".$row['details']."</td><td>".$row['chapter']."</td><td>";
?>
<td><a href="editsection.php?edit=<?php echo $row['section_id'];?>"alt="edit"><b>EDIT</b></a></td>
<td><a href="deletesection.php?delete=<?php echo $row['section_id'];?>"alt="delete"><b>DELETE</b></a></td>
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