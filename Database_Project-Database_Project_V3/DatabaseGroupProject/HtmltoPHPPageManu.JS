function GoToFiguresPHP()
{
    window.location.href = "DisplayManuTablePHP.php";
}

const button6 = document.getElementById("submitManuData");

if (button6)
{
    button6.addEventListener('click', GoToFiguresPHP);
}