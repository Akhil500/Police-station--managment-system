<?php
require 'connection.php';
$con = Connect();

$name = $con->real_escape_string($_POST['name1']);
$ag = $con->real_escape_string(($_POST['age']));
$phone = $con->real_escape_string(($_POST['phone']));
$gen = $con->real_escape_string(($_POST['sex']));
$date = $con->real_escape_string(($_POST['date']));

$complainant_id=mt_rand(1,6000);
$query   = "INSERT into complainant (complainant_id,name,age,gender,contact_no,d_o_fir) VALUES('".$complainant_id."','" . $name . "','" . $ag . "','" . $gen . "','" . $phone . "','" . $date . "')";

$success = $con->query($query);
if (!$success) {
    die("Couldn't enter data: ".$con->error);

}
$con->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href ="style1.css">
    </head>
    <body>
        <style>
            body{
                background-image: url(13jpg.jpg);
            }
        </style>
        <form>
            <div id="img1" class="bodyx">
                <img src="logo.png" height="100px" width="800px">
            </div>

            
                    
              
                   
                   <div id="nav"><br>
                <div id="nav_wrapper">
		    <ul>                   
                     <li><a href="http://localhost/DBMS/home.php"><h1>BACK</h1></a></li>
                    </ul>
		</div>
                   </div>

               <br><br><br><br><br><br><br><br> <h1><mark>Your Complaint has been SUBMITTED!!!</mark></h1><br>
            </div> 
        </form>

    </body>
</html>