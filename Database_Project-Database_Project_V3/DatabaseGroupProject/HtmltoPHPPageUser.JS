function GoToFiguresPHP()
{
    window.location.href = "DisplayUserTablePHP.php";
}

const button8 = document.getElementById("submitUserData");

if (button8)
{
    button8.addEventListener('click', GoToFiguresPHP);
}