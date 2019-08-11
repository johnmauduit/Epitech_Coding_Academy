var i;
var text = "$";

function drawTriangle(height)
{
    for(i = 1; i <= height; i++)
    {
        console.log(text);
        text += "$";
    }
}
drawTriangle(8);