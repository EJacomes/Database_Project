function GoToPageFigure()
{
    window.location.href = "DisplayFigureTable.html";
}

function GoToPageSeller()
{
    window.location.href = "DisplaySellerTable.html"
}

function GoToPageManu()
{
    window.location.href = "DisplayManuTable.html"
}

function GoToPageUser()
{
    window.location.href = "DisplatUserTable.html"
}

function GetDropDownValue()
{
    let DropDown = document.querySelector('#ViewTable');
    let DropDownValue = DropDown.value;
    console.log(DropDownValue);
    if (DropDownValue == "Figures")
        {
           GoToPageFigure();
        }
    else if (DropDownValue == "Manufacturer")
        {
            GoToPageManu();
        }
    else if (DropDownValue == "Seller")
        {
            GoToPageSeller();
        }
    else if (DropDownValue == "User")
        {
            GoToPageUser();
        }
}
//use two vars to get the values of the dropbox and the button
//The button should have a if-else or switch case statement to see which function to call
//Each function relates to which page it has to go to
const button4 = document.getElementById("ViewTableButton");

if (button4)
{
    button4.addEventListener('click', GetDropDownVal);
}