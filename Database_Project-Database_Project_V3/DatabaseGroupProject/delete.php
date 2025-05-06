<?php
include("connection.php");
$FigureID=$_GET['FigureID'];
$query = "Delete from figure where FigureID='$FigureID'";

$data = mysqli_query($conn, $query);

if($data)
{
// echo "<font color = 'green'> One Record Deleted From Table";
echo "<script> alert('Record Deleted')</script>";
?>

   <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost:8080/aviCode/editDelete.php">

<?php

}
else
{
echo "<font color = 'red'> Delete Opeartion Failed!";
}
?>