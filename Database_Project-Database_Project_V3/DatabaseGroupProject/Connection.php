<?php
$serverName = "localhost"
$userName = "";
$password = "";  // root :avi ;
$dbName = "FigureDatabase";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//debugging propose
if($conn){
    echo "You are connected with your database";
    }
    else
    {
    // you only want to display message
    echo "Your are NOT connected (Failed) to your database";
    
    // you want to display error as well, use error function of mysql.
    die("Your connection is FAILED because".mysqli_connect_error());
    }
?>