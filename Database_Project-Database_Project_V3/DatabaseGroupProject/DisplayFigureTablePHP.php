<?php
//Here this will take the data that was inserted from the DiplayFigureTable and forms it into a query
//The radio buttons will choose the columns to select Ex:user presses on FigureID and FigureName then "Select FigureID, FigureName from Figures"
//If all radio buttons are pressed then it will be a select all
//The textbox asking for attributes will be for the Where clause EX:user puts in JJK for Series and clicks all of the radio buttons then "Select * from Figures where Series = "JJK"
//include soemthing to where if user does"smt, smt" in the textbox that it doesn't allow it, same for the join boxes
//for the text box regarding joining heres an example, Ex:user puts seller and says to join by SellerName then "Select * from Figures join Seller ON Figure.SellerName = Seller.SellerName
//add in Update and delete functions
//table will appear here
if($_GET['submit'])
{
    //radio buttons
    $sfID = $_GET['SelectFigureID'];
    $sfName = $_GET['SelectFigureName'];
    $sfSeries = $_GET['SelectSeries'];
    $sfManufacturerName = $_GET['SelectManufacturerName'];
    $sfSellerName = $_GET['SelectSellerName'];
    $sfUserName = $_GET['SelectUserName'];
    $sfDateGotten = $_GET['SelectDateGotten'];
    $sfDateRelease = $_GET['SelectDateRelease'];
    $sfPrice = $_GET['SelectPrice'];
    $sfCountryOfOrigin = $_GET['SelectCountryOfOrigin'];
    $sfCountryOfUser = $_GET['SelectCountryOfUser'];
    //Text boxes
    $sfIDval = $_GET['FigureIDValue'];
    $sfNameval = $_GET['FigureNameValue'];
    $sfSeriesval = $_GET['SeriesValue'];
    $sfManufacturerNameval = $_GET['ManufacturerNameValue'];
    $sfSellerNameval = $_GET['SellerNameValue'];
    $sfUserNameval = $_GET['UserNameValue'];
    $sfDateGottenval = $_GET['DateGottenValue'];
    $sfDateReleaseval = $_GET['DateReleaseValue'];
    $sfPriceval = $_GET['PriceValue'];
    $sfCountryOfOriginval = $_GET['CountryOfOriginValue'];
    $sfCountryOfUserval = $_GET['CountryOfUserValue'];
    //joining stuff
    $jTable = $_GET['JoinTable'];
    $jAttribute = $_GET['JoinAttribute'];

    //the arrays that will be filtered in order to see which variables have a value in them to place in the insert statement
    $RadioButtons = [$sfID, $sfName, $sfSeries, $sfManufacturerName, $sfSellerName, $sfUserName, $sfDateGotten, $sfDateRelease, $sfPrice, $sfCountryOfOrigin, $sfCountryOfUser];
    $TextBoxes = [$sfIDval, $sfNameval, $sfSeriesval, $sfManufacturerNameval, $sfSellerNameval, $sfUserNameval, $sfDateGottenval, $sfDateReleaseval, $sfPriceval, $sfCountryOfOriginval, $sfCountryOfUserval];
    $Join = [$jTable, $jTable];

    $FiltheredRadioButton = filtheredArr($RadioButtons);
    $FiltheredTextBoxes =  filtheredArr($TextBoxes);
    $FlitheredJoin = filtheredArr($Join);


}

function filtheredArr($Array)
{
    $FiltheredArr = [];

    foreach ($Array as $i)
    {
        if (isset($i) && $i != "")
        {
            $FiltheredArr[] = $i;
        }
    }

    return $FiltheredArr;
}

//function to form the select statement
function FormSelect($FilterRB, $FilterTB, $FilterJ)
{
    $quer = "Select ";
}
?>
