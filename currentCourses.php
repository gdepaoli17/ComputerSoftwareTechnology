<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Enrolled Classes</title>
</head>
<body>
    <div>
        <?php 
           session_start();
            include 'includes/database.php';
            include 'includes/functions.php';
            include 'includes/login.php';


            if(isset($_SESSION['sessionID'])){

                echo "<h1></h1>Bellow are your courses " . ucfirst($_SESSION['sessionFirstName'])."!</h1>";
                echo "<hr>";
                echo "<br>";
                 
                getCurrentSchedule($con, $_SESSION['sessionID']);

            }
           
        ?>


    <hr>
    <div>
        <?php 

            if(isset($_POST['dropButton'])){
                echo "<script type='text/javascript'>";
                echo "alert('Testing')";
                echo "</script>";  
                $_SESSION['dropOfferingID'] = cleanResult($_POST['dropButton']);
                
                dropCourse($con,$_SESSION['sessionID'],$_SESSION['dropOfferingID']);
                
            }
        
        ?>
    </div>
    
    <nav>
        <li><a href="profile.php">Back to profile</a></li>
        <li><a href="logout.php">Logout</a></li>
    </nav>


    </div>
</body>
</html>