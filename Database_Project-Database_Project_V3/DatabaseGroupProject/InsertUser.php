<?php
include ("Connection.php");

if($_GET['submit'])
{
    //'studentnumber', 'studentname', and 'coursename' are placeholders remove them and put the proper names
$uID = $_GET['UserID'];
$uName = $_GET['UserName'];
$uValue = $_GET['ValueOfFigures'];
$uCountry = $_GET['CountryOfUser'];
$uBroughtFrom = $_GET['BroughtFrom'];

//Only $uID is checked since the rest of the values are set to Null by default
  if($uID != "")
   {
   // To write a query in php environment
     $query = "INSERT INTO figures VALUES ('$uID', '$uName', '$uValue', '$uCountry', '$uBroghtFrom')";

   // To run a query in PHP environment
     $data = mysqli_query($conn, $query);
     
     //debugging purposes
     if($data)
       {
         echo "Query Ok! One record appended into your database";
       }
     else{
         echo "Enter data values are not entered, Check textfield values!";
         }
   }
   else
    {
       echo "Enter Values of required fields!";
    }
}
?>