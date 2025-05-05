<?php
include ("Connection.php");

if($_GET['submit'])
{
    //'studentnumber', 'studentname', and 'coursename' are placeholders remove them and put the proper names
$fID = $_GET['FigureID'];
$fName = $_GET['FigureName'];
$fSeries = $_GET['Series'];
$fManufacturerName = $_GET['ManufacturerName'];
$fSellerName = $_GET['SellerName'];
$fUserName
$fDateGotten
$fDateRelease
$fPrice
$fCountryOfOrigin
$fCountryOfUser


  if($sNumber != "" &&  $sName != "" &&  $cName != "")
   {
   // To write a query in php environment
     $query = "INSERT INTO student VALUES ('$sNumber', '$sName', '$cName')";

   // To run a query in PHP environment
     $data = mysqli_query($conn, $query);
   }
}
?>