<?php
require 'connection.php';
session_start();
if (isset($_POST['login'])) 
{
    $con=Connect();
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM register WHERE u_email = '" . $email. "' and pass = '" . $password . "'");

    if ($row = mysqli_fetch_array($result)) 
    {
        $_SESSION['u_email'] = $row['email'];
        $_SESSION['pass'] = $row['password'];
        header("Location: home.php");
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
        <title>Login</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <script type="text/javascript">
        
    </script>
    <body>
        <style>
            body{background-image: url(loginbg.jpg);
                
            }
        </style>
        <form action="" method="post">
            <div id="nav_wrapper">
                    <ul>
                        <li><a href="http://localhost/DBMS/home.html">Home</a></li>
                    </ul>
            </div>
            <div class="loginbox">
                <img src="User_Avatar-512.png" class="user">
                <h2>Log In Here</h2>
                <form>
                    <p>Email</p>
                    <input type="text" name="email" placeholder="abc@gmail.com" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="*********" required>
                    <input type="submit" name="login" value="LogIn">
                </form>
            </div>
        </form>
    </body>
</html>
