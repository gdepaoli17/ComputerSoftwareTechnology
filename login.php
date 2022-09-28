<?php


if(isset($_POST['submit']))
{
    
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    require_once 'functions.php';
    require 'database.php';
    
    if(empty($userName) || empty($password)){
        header("location: ../login.php?error=emptyfields");
        exit();
    } else{
        $sql = "SELECT * FROM studenttbl WHERE userName = ?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../login.php?error=sqlerrorline24");
            exit();
        } else{
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if($row = mysqli_fetch_assoc($result)){
            
                session_start();
                $_SESSION['sessionID'] = $row['id'];
                $_SESSION['sessionUser'] = $row['userName'];
                $_SESSION['sessionFirstName'] = $row['firstName'];
                $_SESSION['sessionLastName'] = $row['lastName'];
                $_SESSION['sessionEmail'] = $row['email'];
                $_SESSION['sessionPassword'] = $row['password'];
                $_SESSION['sessionPhoneNumber'] = $row['phoneNumber'];
                $_SESSION['sessionSSN'] = $row['SSN'];
                $_SESSION['sessionAddress'] = $row['address'];
                $_SESSION['sessionmajor'] = $row['major'];

                $userInfo = $row['id'];
                header("Location: ../profile.php");
                
            }
        }
    }
}