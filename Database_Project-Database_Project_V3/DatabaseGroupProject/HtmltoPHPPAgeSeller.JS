function GoToFiguresPHP()
{
    window.location.href = "DisplaySellerTablePHP.php";
}

const button7 = document.getElementById("submitSellerData");

if (button7)
{
    button7.addEventListener('click', GoToFiguresPHP);
}