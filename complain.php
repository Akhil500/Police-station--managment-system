<!DOCTYPE html>
<html>
    <head>
        <title>Complain</title>
        <link rel="stylesheet" type="text/css" href ="style1.css">
    </head>
    <style>
        body{
            background-image: url(ps.jpg);
          height:300px; width:400px;
        }
    </style>
    <body>
        <form action="comp.php" method="post">
            <form>
            <div class="signupbox">
            <p>Name</p>
            <input type="text" name="name1" placeholder="Enter Name" required>
            <p>Age</p>
            <input type="number" name="age" required>
            <p>Phone number</p>
            <input type="text" name="phone" placeholder="******" required>
            
            <p>Gender</p>
            <input type="radio" name="sex" required>Male
            <input type="radio" name="sex" required>Female<br>
            <p>Date</p>
            <input type="date" name="date" required><br><br>
            <input type="submit" name="submit1" value="Submit">
            </div>
           

           
             
		    <ul>                   
                     <li><a href="http://localhost/DBMS/home.php"><h1><mark>BACK</h1></a></li>
                    </ul>
		
                   
            </form>
        </form>
    </body>
</html>

       
<!--    <!DOCTYPE html>
<html>
    <head>
        <title>Complain</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <form method="post" action="comp.php">
            <div class="abc">
            <p>Name</p>
            <input type="text" name="name1" placeholder="Enter Name" required>
            <p>Age</p>
            <input type="number" name="age" required>
            <p>Phone number</p>
            <input type="text" name="phone" placeholder="******" required>
            
            <p>Gender</p>
            <input type="radio" name="sex" required>Male
            <input type="radio" name="sex" required>Female<br>
            <p>Date</p>
            <input type="date" name="date" required><br><br>
            <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </body>
</html>  --!>
 