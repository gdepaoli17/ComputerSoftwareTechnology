
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
</head>
<body>
    <div>
        <?php
            session_start();
            include 'includes/functions.php';
            include 'includes/login.php';


            if(isset($_SESSION['sessionID'])){
                
                echo "Welcome ".ucfirst($_SESSION['sessionFirstName'])."!";
                echo "<hr>";
                echo "Here is your current information:";
                echo "<br>";
                echo "<br>";
                echo "ID: ".$_SESSION['sessionID']."<br>";
                echo "First Name: ".ucfirst($_SESSION['sessionFirstName'])."<br>";
                echo "Last Name: ".ucfirst($_SESSION['sessionLastName'])."<br>";
                echo "Email: ".$_SESSION['sessionEmail']."<br>";
                echo "Password: ".$_SESSION['sessionPassword']."<br>";
                echo "Phone Number: ".$_SESSION['sessionPhoneNumber']."<br>";
                echo "Social Security Number: ".$_SESSION['sessionSSN']."<br>";
                echo "Address: ".$_SESSION['sessionAddress']."<br>";
                echo "Major: ".$_SESSION['sessionmajor']."<br>";
                echo "User Name: ".$_SESSION['sessionUser']."<br>";
            }
        ?>
        <hr>

             
    </div>
    <nav>
        <h5><li><a href="allClasses.php">Want to add a class?</a></li></h5>
        <h5><li><a href="currentCourses.php">View current courses</li></h5>
        <h5><li><a href="logout.php">Logout</a></li></h5>
    </nav>
</body>
</html>