function GoToPageFigure()
{
    window.location.href = "InsertInfoFigures.html";
    console.log("working");
}

function GoToPageSeller()
{
    window.location.href = "InsertinfoSeller.html"
}

function GoToPageManu()
{
    window.location.href = "InsertinfoManu.html"
}

function GoToPageUser()
{
    window.location.href = "InsertInforUser.html"
}

//use two vars to get the values of the dropbox and the button
//The button should have a if-else or switch case statement to see which function to call
//Each function relates to which page it has to go to
const button = document.getElementById("InsertTableButton");
let DropDown = document.querySelector('#PickTable');
let DropDownVal = DropDown.value;

if (button)
{
    //button.addEventListener('click', GoToPageFigure);
    console.log(DropDownVal);
    if (DropDownVal == "Figures")
    {
        button.addEventListener('click', GoToPageFigure);
    }
    else if (DropDownVal == "Manufacturer")
    {
        button.addEventListener('click', GoToPageManu);
    }
    else if (DropDownVal == "Seller")
    {
        button.addEventListener('click', GoToPageSeller);
    }
    else if (DropDownVal == "User")
    {
        button.addEventListener('click', GoToPageUser);
    }

}