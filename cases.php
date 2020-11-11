<?php
require 'connection.php';
session_start();
$con=Connect();
$id = mysqli_real_escape_string($con, $_POST['case']);
$query= "CALL c2('$id')";
$records=mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>CASES</title>
    </head>
    <body>
        <style>
            body { background-color :#98FB98;
            }
        </style>
        <form>
             <br><br><br> <br><br><br><br><br><br><br><br><br><center>
            <table width="auto" height="auto" border="2" cellpadding="2" cellspacing="2" top="100px">
                <tr>
                    <th>case_id</th>
                    <th>case_details</th>
                    <th>location</th>
                    <th>case_type</th>
                    <th>officer_id</th>
                    <th>complainant_id</th>
					<th>section_id</th>
                </tr>
                <?php
                while($cases=$records->fetch_assoc())
                {
                   echo "<tr>";
                    echo "<td>" .$cases['case_id']."</td>";
                    echo "<td>" .$cases['case_details']."</td>";
                    echo "<td>" .$cases['location']."</td>";
                    
                    echo "<td>" .$cases['case_type']."</td>";
                    echo "<td>" .$cases['officer_id']."</td>";
                    echo "<td>" .$cases['complainant_id']."</td>";
					echo "<td>" .$cases['section_id']."</td>";
                }
                
                ?>
            </table>
        </form>
<br><br><br><a href="home.php"><button type="button" value="button"><h3>BACk</button></a>
    </body>
</html>