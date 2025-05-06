<!DOCTYPE HTML>
<HTML>
<head>
<style>
body 
{
background-color: black;
color:white;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.button 
{
background-color: gray;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
</style>
</head>
<body>
<?php
include ("Connection.php");
//Here this will take the data that was inserted from the DiplayFigureTable and forms it into a query
//The radio buttons will choose the columns to select Ex:user presses on FigureID and FigureName then "Select FigureID, FigureName from Figures"
//If all radio buttons are pressed then it will be a select all
//The textbox asking for attributes will be for the Where clause EX:user puts in JJK for Series and clicks all of the radio buttons then "Select * from Figures where Series = "JJK"
//include soemthing to where if user does"smt, smt" in the textbox that it doesn't allow it, same for the join boxes
//for the text box regarding joining heres an example, Ex:user puts seller and says to join by SellerName then "Select * from Figures join Seller ON Figure.SellerName = Seller.SellerName
//add in Update and delete functions
//have the submit button go to here
//table will appear here
if($_GET['submit'])
{
    //radio buttons
    $suID = $_GET['SelectUserID'];
    $suName = $_GET['SelectUserName'];
    $suValueOfFigures = $_GET['SelectValueOfFigures'];
    $suCountryOfUser = $_GET['SelectCountryOfUser'];
    $suBroughtFrom = $_GET['SelectBroughtFrom'];
    //Text boxes
    $suIDval = $_GET['UserIDValue'];
    $suNameval = $_GET['UserNameValue'];
    $suValueOfFiguresval = $_GET['ValueOfFiguresValue'];
    $suCountryOfUserValueval = $_GET['CountryOfUserValue'];
    $suBroughtFromValueval = $_GET['BroughtFromValue'];
    //joining stuff
    $jTable = $_GET['JoinTable'];
    $jAttribute = $_GET['JoinAttribute'];

    //the arrays that will be filtered in order to see which variables have a value in them to place in the insert statement
    $RadioButtons = [$suID, $suName, $suValueOfFigures, $suCountryOfUser, $suBroughtFrom];
    $TextBoxes = [$suIDval, $suNameval, $suValueOfFiguresval, $suCountryOfUserval, $suBroughtFromval];
    $Join = [$jTable, $jTable];

    $FiltheredRadioButton = filtheredArr($RadioButtons);
    $FiltheredTextBoxes =  filtheredArr($TextBoxes);
    $FlitheredJoin = filtheredArr($Join);

    $query  = FormSelect($FiltheredRadioButton, $FiltheredTextBoxes, $FlitheredJoin);

    // to execute query
    $data = mysqli_query($conn, $query);

    // to count number of records 
    $total = mysqli_num_rows($data);
    // echo $total;

    // to display the query output
    $result = mysqli_fetch_assoc($data);
    


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

    //sets up the select statement by taking the elements that are in the array and passing them through this for loop which will look at the position of the element looked like to determine the structure of the format
    for ($i = 0; $i < count($FilterRB); $i++)
    {
        if (count($FilterRB) == 11)
        {
            $quer = $quer + "* from figures";
            break;
        }
        else if ($i == 0)
        {
            $quer = $quer + $FilterRB[$i];
        }
        else if ($i > 0 && $i < count($FilterRB)) //if $i is greater then 0 but less then count($arr) - 1
        {
            $quer = $quer + ", " + $FilterRB[$i];
        }
        else if ($i == (count($FilterRB) - 1))
        {
            $quer = $quer + " from figures";
        }
    }

    //needs to insert something where if a join is selected then a having statement is used and if not then a where statement is used
    //having statement must also have a group by clause before it
    if (count($FilterJ) != 0)
    {
        $quer = $quer + " join " + $FilterJ[0] + "on figures." + $FilterJ[1] + "=" + $FilterJ[0] + "." + $filterJ[1] + " group by figures";

        for ($x = 0; $x < count($FilterTB); $x++)
        {
            if ($x == 0)
            {
                $quer = $quer + " having figures = " + $FilterTB[$x];
            }
            else if ($x > 0 && $x < count($FilterTB))
            {
                $quer = $quer + " and figures =" + $FilterTB[$x];
            }
            else if ($x == (count($FilterTB) - 1))
            {
                $quer = $quer + " and figures =" + $FilterTB[$x];
            }
        }
    }
    else
    {
        //No having just where
        for ($y = 0; $y < count($FilterTB); $y++)
        {
            if ($y == 0)
            {
                $quer = $quer + " where figures = " + $FilterTB[$x];
            }
            else if ($y > 0 && $x < count($FilterTB))
            {
                $quer = $quer + " and figures =" + $FilterTB[$x];
            }
            else if ($y == (count($FilterTB) - 1))
            {
                $quer = $quer + " and figures =" + $FilterTB[$x];
            }
    }   }
    $quer = $quer + ";";
    
    return $quer;
}
?>
<!--Display Table-->
<table>
  <tr>
       <th> User ID  </th>
       <th> User Name  </th>
       <th> Value Of Figures </th>
       <th> Country Of User </th>
       <th> Brought From </th>
  </tr>
<?php

while($result = mysqli_fetch_assoc($data)) // don't put semi colon here
     {
      echo "<tr>
               <td> ".$result['UserID']."  </td>
               <td> ".$result['UserName']."  </td>
               <td> ".$result['ValueOfFigures']."  </td>
               <td> ".$result['CountryOfUser']."  </td>
               <td> ".$result['BroughtFrom']."  </td>
            </tr> ";    
     }
?>
</body>
</html>