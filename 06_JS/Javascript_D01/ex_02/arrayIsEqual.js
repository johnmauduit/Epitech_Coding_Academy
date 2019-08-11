var a = [1,2];
var b = [3,4];

function arrayIsEqual(a,b)
{
    //return JSON.stringify(a) === JSON.stringify(b); 
    if(JSON.stringify(a) === JSON.stringify(b))
    {
        console.log("True");
    }
    else
    {
        console.log("False");
    }
}
return arrayIsEqual(a,b);
// if(arrayIsEqual(a,b))
//         console.log("True");
// else
//         console.log("False");