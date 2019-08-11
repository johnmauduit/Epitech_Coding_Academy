var str = "GreGoireGGGGGLLOKK";
var upperCount;

function countGs(str)
{
        upperCount = (str.match(/[A-Z]/g) || []).length;
        console.log(upperCount);
}
return countGs(str);
//sujet non respecté ce n'était que les G