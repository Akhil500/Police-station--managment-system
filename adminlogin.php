<?php
require 'connection.php';
session_start();
if (isset($_POST['login'])) 
{
    $con=Connect();
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM admin WHERE email = '" . $email. "' and password = '" . $password . "'");

    if ($row = mysqli_fetch_array($result)) 
    {
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header("Location:home.html");
    } 
    else 
    {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN LOGIN</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <script type="text/javascript">
        
    </script>
    <body>
        <style>
            body{background-color: black;
                
            }
        </style>
        <form action="" method="post">
		<div id="img1" class="bodyx">
                <img src="logo.png" height="100px" width="800px">
            </div>
           
            <div class="loginbox">
                <img src="User_Avatar-512.png" class="user">
                <h2>LOGIN AS ADMIN</h2>
                <form>
                    <p>Email</p>
                    <input type="text" name="email" placeholder="abc@gmail.com" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="*********" required>
                    <input type="submit" name="login" value="login">
                </form>
            </div>
        </form>
		  <form>
        <div id="text" class="scroll">
           <h1>DETAILS</h1>
           <br>email-id::<li> spdavangere@gmail.com</li></br>
                         <li>spdvg@ksp.gov.in </li></br>
	   <br>Call us: 08192-253400</br>         
</div>
      </form>    
       <form>
           <div id="img2" class="map">
                <i><h1><mark>davangere map</mark></h1></i>
                <img src="map.gif">
            </div>
        </form>
    </body>
</html>
