<?php
include ("Connection.php");

if($_GET['submit'])
{
    //'studentnumber', 'studentname', and 'coursename' are placeholders remove them and put the proper names
$mID = $_GET['ManufacturerID'];
$mName = $_GET['ManufacturerName'];
$mCountry = $_GET['ManufacturerCountry'];
$mSite = $_GET['ManufacturerSite'];
$mSellerName = $_GET['SellerName'];

//Only $fID is checked since the rest of the values are set to Null by default
  if($mID != "")
   {
   // To write a query in php environment
     $query = "INSERT INTO figures VALUES ('$mID', '$mName', '$mCountry', '$mSite', '$mSellerName')";

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
