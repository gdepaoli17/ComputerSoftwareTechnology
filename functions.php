<?php

function checkUser($con, $firstName, $lastName, $email, $password, $phoneNumber, $SSN, $address, $major, $userName){

    $statement = mysqli_stmt_init($con);
    mysqli_stmt_bind_param($statement, 'sssssisss', $firstName, $lastName, $email, $password, $phoneNumber, $SSN, $address, $major, $userName);
    mysqli_stmt_execute($statement);

    $resultData = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = False;
        return $result;
    }
    mysqli_stmt_close($statement);
}

function createUser($con, $firstName, $lastName, $email, $password, $phoneNumber, $SSN, $address, $major, $userName){

    $sql_insert = "INSERT INTO studenttbl (firstName,lastName,email,password,phoneNumber,SSN,address,major,userName) 
    VALUES (?,?,?,?,?,?,?,?,?);";

    

    $statement = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($statement,$sql_insert)){
        header('location:../register.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($statement, 'sssssisss', $firstName, $lastName, $email, $password, $phoneNumber, $SSN, $address, $major, $userName);
    mysqli_stmt_execute($statement);

    mysqli_stmt_close($statement);

    
    echo "Congrats! You have been registered.";
    header("location: ../login.php?userhasregistered");
}

function getUserData($userName){
    include_once 'database.php';
    if($result = $con -> query("SELECT userName FROM studenttbl WHERE username = $userName"))
        return $result;
}

function getCurrentSchedule($con, $studentID){
    $getScheduleQuery = 
    "SELECT
    courseenrollment.studentID, coursesoffered.offeringID, courses.courseName, coursesoffered.year, coursesoffered.semester
    FROM 
    ((courseenrollment
    INNER JOIN 
    coursesoffered ON courseenrollment.offeringID = coursesoffered.offeringID
    AND courseenrollment.studentID = $studentID)
    INNER JOIN courses ON courses.courseID = coursesoffered.courseID)";

    $result = mysqli_query($con, $getScheduleQuery);

    if (mysqli_num_rows($result) != 0){
        while($row = mysqli_fetch_assoc($result)){
            $offeringId = $row['offeringID'];
            $coursesName = $row['courseName'];
            $coursesYear = $row['year'];
            $coursesSemester = $row['semester'];

            echo $coursesName . " ". $coursesSemester . " " . $coursesYear;
            echo "<form action='currentCourses.php' method='POST'>";
                        echo "<input type='hidden' name='coursedrop' value=".$offeringId.">";
                        echo "<button type='submit' name='dropButton' value=".$offeringId.">Drop Course</button>";
            echo "</form>";
            echo '<br>';

        }
    }
}

function getAvailableCourses($con){
    $possibleCourses = array();

    $getSemesterQuery = 
    "SELECT
    courses.courseID, courses.courseName, coursesoffered.year, coursesoffered.semester
    FROM
    coursesoffered
    LEFT JOIN
    courses
    ON
    courses.courseID = coursesoffered.courseID;";

    $result = mysqli_query($con, $getSemesterQuery);
    

    if((mysqli_num_rows($result) > 0) ){
        $table = '
   <table border=1>
                    <tr>
                         <th> Course ID </th>
                         <th>Course Name</th>
                         <th>Year</th>
                         <th>Semester</th>

                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $table .= '
    <tr>
                        <td>'.$row["courseID"].'</td>
                         <td>'.$row["courseName"].'</td>
                         <td>'.$row["year"].'</td>
                         <td>'.$row["semester"].'</td>
                        


                    </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
    }


    return $possibleCourses;
}

function dropCourse($con, $studentId, $offeringId) {
    
    $dropSQLQuery =  
    "DELETE FROM
    courseenrollment
    WHERE
    studentID = $studentId 
    AND offeringID = $offeringId";
    
    $result1 = mysqli_query($con, $dropSQLQuery);

    $getCourseInfoQuery =  
    "SELECT
    courses.courseName, coursesoffered.semester, coursesoffered.year
    FROM 
    courses
    INNER JOIN 
    coursesoffered
    ON courses.courseID = coursesoffered.courseID
    WHERE coursesoffered.offeringID = $offeringId";

    $result2 = mysqli_query($con, $getCourseInfoQuery);
    
    if (mysqli_num_rows($result2) == 1) { 
        while($row = mysqli_fetch_assoc($result2)) {
            $_SESSION['coursedropped'] = $row['courseName'];
            $_SESSION['semesterdropped'] = $row['semester'];
            $_SESSION['yeardropped'] = $row['year'];
        };
    };
};

function cleanResult($result) {
    $result = trim($result);
    $result = stripslashes($result);
    return $result;
}

function getOfferingID($con){
    $offeringQuery = 
    "SELECT coursesoffered.offeringID, coursesoffered.courseID, coursesoffered.year, coursesoffered.semester, courses.courseID, courses.courseName
    FROM coursesoffered 
    INNER JOIN courses 
    ON coursesoffered.courseID = courses.courseID;";

    $results = mysqli_query($con, $offeringQuery);
    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            $_SESSION['classSelected'] = $row['offeringID'];
            
            
        }
    }

}

