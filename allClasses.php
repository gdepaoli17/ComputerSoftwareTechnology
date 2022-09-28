<?php
session_start();
include 'includes/functions.php';
include 'includes/database.php';
include 'includes/login.php';


getAvailableCourses($con);

if(isset($_SESSION['sessionID'])){
    if(isset($_POST['addcourse'])){

        

        $coursesName = $_POST['coursesName'];
        
        $year = $_POST['year'];
        
        $semester = $_POST['semester'];
        
        $studentID = $_SESSION['sessionID'];
        
        getOfferingID($con,$coursesName,$year,$semester);
        
        $offeringID = $_SESSION['classSelected'];
        

        
        
            $addCourseSQL = 
            "INSERT INTO courseenrollment (offeringID,studentID)
            VALUES ($offeringID,$studentID)";
            mysqli_query($con,$addCourseSQL);
        

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Courses</title>
</head>
<body>

    <form action="allClasses.php" method="POST">
        <label for="">Copy the Courses Name: </label> <input type="text" name="coursesName" required><br>
        <label for="">Year: </label> <input type="text" name="year" required><br>
        <label for="">Semester: </label> <input type="text" name="semester" required><br>
        <button type="submit" name="addcourse">Add Course</button>
    </form>

    <nav>
        <h5><li><a href="currentCourses.php">View current courses</li></h5>
        <h5><li><a href="logout.php">Logout</a></li></h5>
    </nav>
</body>
</html>



