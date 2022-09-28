<?php

if(isset($_POST['submit']))
{

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $SSN = $_POST['SSN'];
    $address = $_POST['address'];
    $major = $_POST['major'];
    $userName = $_POST['userName'];

    require_once 'database.php';
    require_once 'functions.php';

    createUser($con, $firstName, $lastName, $email, $password, $phoneNumber, $SSN, $address, $major, $userName);

    

    if(mysqli_query($con, $sql_insert)){
        echo "The information has been added to the database.";
    }
    else{
        echo "Error: ".$sql_insert."".mysqli_error($con);
    }

    mysqli_close($con);

}