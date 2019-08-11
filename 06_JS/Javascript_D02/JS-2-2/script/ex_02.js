
var button = document.getElementsByTagName("div")[2];
var count = 0;

button.onclick = function click()
{
    count += 1;
    button.innerHTML = "Clicks " + count;
}
