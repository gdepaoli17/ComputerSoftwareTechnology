<?php include('includes/database.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Register Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
    <div>   
        <div>
            <nav>
                <ul>
                    <li><a href="home.php">Home Page</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <!--<li><a href="register.php">Register</a></li>-->
                </ul>
            </nav>
        </div>    
        
        <h1>Register</h1>
        
        <p>Please fill out the form below to create an account.</p>        
        <hr>
                    
            <form action="includes/signup.php" method="POST">
            
                <label>First Name</label> <input type="text" name="firstName"> <br> 
                <label>Last Name</label> <input type="text" name="lastName"> <br>
                <label>Email Address</label> <input type="email" name="email"> <br>
                <label>Password</label> <input type="password" name="password"> <br>
                <label>Phone Number</label> <input type="text" name="phoneNumber"> <br>
                <label>Address</label> <input type="text" name="address"> <br>
                <label>major</label> <input type="text" name="major"><br>
                <label>Social Security</label> <input type="text" name="SSN"> <br>
                <label>User Name</label> <input type="text" name="userName"> <br>
                <hr>
                <button type="submit" name="submit">Register</button>

            </form>
            
        <nav>
            <p>Already have an account? <a href="login.php">Log in.</a></p>
        </nav>
    </div>
    </body>

</html>