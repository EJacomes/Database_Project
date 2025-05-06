<?php

include("connection.php");
error_reporting(0);
/*
echo $_GET['sn'];
echo $_GET['sname'];
echo $_GET['cname'];
*/
 $_GET['fID'];
 $_GET['fName'];
 $_GET['fSeries'];
 $_GET['fManufacturerName'];
 $_GET['fSellerName'];
 $_GET['fUserName'];
 $_GET['fDateGotten'];
 $_GET['fDateRelease'];
 $_GET['fPrice'];
 $_GET['fCountryOfOrigin'];
 $_GET['fCountryOfUser'];
?>


<!DOCTYPE HTML>
<html>
<Head>  </Head>
<title> </title>
<body>


<form action = " " method = "GET"> 

Figure Number: <input type = "text" name = "FigureID" value="<?php echo $_GET['fID']; ?>"
/><br><br>

Figure Name: <input type = "text" name = "FigureName" value= "<?php echo $_GET['fName']; ?>"/><br><br>

Series: <input type = "text" name = "Series" value= "<?php echo $_GET['fSeries']; ?>"/><br><br>

Manufacturer Name: <input type = "text" name = "ManufacturerName" value = "<?php echo $_GET['fManufacturerName']; ?>"/><br></br> 

Seller Name: <input type = "text" name = "SellerName" value = "<?php echo $_GET['fSellerName']; ?>"/><br></br> 

User Name: <input type = "text" name = "UserName" value = "<?php echo $_GET['fUserName']; ?>"/><br></br> 

Date Gotten: <input type = "text" name = "DateGotten" value = "<?php echo $_GET['fDateGotten']; ?>"/><br></br> 

Date Release: <input type = "text" name = "DateRelease" value = "<?php echo $_GET['fDateRelease']; ?>"/><br></br> 

Price: <input type = "text" name = "Price" value = "<?php echo $_GET['fPrice']; ?>"/><br></br> 

Country of Origin: <input type = "text" name = "CountryOfOrigin" value = "<?php echo $_GET['fCountryOfOrigin']; ?>"/><br></br> 

Country of User: <input type = "text" name = "CountryOfUser" value = "<?php echo $_GET['fCountryOfUser']; ?>"/><br></br> 

<input type= "submit" name="submit" value="Update" />

</form>

<?php

if($_GET['submit'])   // write update setting codes.
{
 //echo "Updated";

   $ufID = $_GET['FigureID'];
   $ufName = $_GET['FigureName'];
   $ufSeries = $_GET['Series'];
   $ufManufacturerName = $_GET['ManufacturerName'];
   $ufSellerName = $_GET['SellerName'];
   $ufUserName = $_GET['UserName'];
   $ufDateGotten = $_GET['DateGotten'];
   $ufDateRelease = $_GET['DateRelease'];
   $ufPrice = $_GET['Price'];
   $ufCountryOfOrigin = $_GET['CountryOfOrigin'];
   $ufCountryOfUser = $_GET['CountryOfUser'];

$query = "UPDATE figures SET FigureName = '$ufName', Series = '$ufSeries', ManufactureName = '$ufManufacturerName', SellerName = '$ufSellerName', UserName = '$ufUserName', DateGotten = '$ufDateGotten', DateRelase = '$ufDateRelease', Price = '$ufPrice', CountryOfOrigin = '$ufCountryOfOrigin', CountryOfUser = '$ufCountryOfUser' where FigureID='$ufID' ";
$data = mysqli_query($conn, $query);

   if($data)
   {
     echo "<font color='green'>One record has been updated. <a href =
   'editDelete.php'>Upadated List Here</a>";
   }
   else
   {
     echo "<font color='red'>Record has not updated!";
   }

}
else
{
echo "<font color='blue'> Please click on Update button to save changes";
}

?>

</body>
</html>
