<?php
require 'connection.php';
session_start();
$con=Connect();
$id = mysqli_real_escape_string($con, $_POST['out1']);
$query= "SELECT * FROM cases INNER JOIN outcome ON cases.case_id=outcome.case_id where case_id='$case_id'";
$records=mysqli_query($con, $query) or die('error getting data');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>OUTCOME</title>
    </head>
<style>
            body { background-color :#98FB98;
            }
        </style>
    <body>
       <br><br><br><br><br><br><br><br><br><center>
        <form>
            <table width="auto" border="2" cellpadding="2" cellspacing="2" height="auto">
                <tr>
                    <th>case_id</th>
                    <th>case_details</th>
                    <th>location</th>
                    <th>d_o_i</th>
                    <th>case type</th>
                    <th>officer_id</th>
                    <th>complainat_id</th>
                    <th>section_id</th>
                </tr>
                <?php
                while($outcome=$records->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>" .$outcome['case_id']."</td>";
                    echo "<td>" .$outcome['case_details']."</td>";
                    echo "<td>" .$outcome['location']."</td>";
                    echo "<td>" .$outcome['d_o_i']."</td>";
                    echo "<td>" .$outcome['case_type']."</td>";
                    echo "<td>" .$outcome['officer_id']."</td>";
                    echo "<td>" .$outcome['complainant_id']."</td>"; 
                    echo "<td>" .$outcome['section_id']."</td>";
                   
                }
                ?>
            </table>
        </form>
     
    <br><br><br><h2><a href="http://localhost/DBMS/home.php">Back</a></li></center>
                    
    </body>
</html>