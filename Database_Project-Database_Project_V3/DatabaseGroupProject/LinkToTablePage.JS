function GoToPageFigure()
{
    window.location.href = "InsertInfoFigures.html";
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

function GetDropDownVal()
{
    let DropDown = document.querySelector('#PickTable');
    let DropDownVal = DropDown.value;
    console.log(DropDownVal);
    if (DropDownVal == "Figures")
        {
           GoToPageFigure();
        }
    else if (DropDownVal == "Manufacturer")
        {
            GoToPageManu();
        }
    else if (DropDownVal == "Seller")
        {
            GoToPageSeller();
        }
    else if (DropDownVal == "User")
        {
            GoToPageUser();
        }
}
//use two vars to get the values of the dropbox and the button
//The button should have a if-else or switch case statement to see which function to call
//Each function relates to which page it has to go to
const button = document.getElementById("InsertTableButton");

if (button)
{
    button.addEventListener('click', GetDropDownVal);
}