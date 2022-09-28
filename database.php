<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "schoolportal";

$con = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

if(!$con){
    die("Connection has failed: ". mysqli_connect_error());
}



 



