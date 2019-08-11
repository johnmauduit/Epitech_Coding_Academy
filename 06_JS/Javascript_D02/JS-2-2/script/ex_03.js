var button = document.querySelector("footer > div");

button.addEventListener("click", function()
{

var person = prompt("What's your name ?", "");

    while(person == null || person == "")
    {
       person = prompt("Please enter your name !", "");
    }
    
    if(person != null || person != "")
    {
        var ok = confirm("Are you sure that "+ person +" is your name ?");
    }
    if(ok)
    {
        alert("Hello " + person + " !");
        button.innerHTML = "Hello " + person + " !";   
    }
    
})//();