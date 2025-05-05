function GoToDisplayTable()
{
    window.location.href = "DisplayTable.html";
}

const button2 = document.getElementById("ViewTable");

if (button2)
{
    button2.addEventListener('click', GoToDisplayTable);
}