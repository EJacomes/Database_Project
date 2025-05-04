function back()
{
    window.location.href = "Homepage.html";
}

const backButton = document.getElementById("backbutton");

if(backButton)
{
    backButton.addEventListener('click', back);
}