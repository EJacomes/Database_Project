<?php
include ("Connection.php");

if($_GET['submit'])
{
    //'studentnumber', 'studentname', and 'coursename' are placeholders remove them and put the proper names
$sID = $_GET['SellerID'];
$sName = $_GET[''];
$sLocation = $_GET[''];
$sPrice = $_GET[''];
$sSite = $_GET[''];
$sManufacturerName = $_GET[''];


//Only $fID is checked since the rest of the values are set to Null by default
  if($fID != "")
   {
   // To write a query in php environment
     $query = "INSERT INTO figures VALUES ('$fID', '$fName', '$fSeries', '$fManufacturerName', '$fSellerName', '$fUserName', '$fDateGotten', '$fDateRelease', '$fPrice', '$fCountryOfOrigin', '$fCountryOfUser')";

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