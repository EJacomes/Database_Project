function GoToFiguresPHP()
{
    window.location.href = "DisplayFigureTablePHP.php";
}

const button5 = document.getElementById("submitFigureData");

if (button5)
{
    button5.addEventListener('click', GoToFiguresPHP);
}
