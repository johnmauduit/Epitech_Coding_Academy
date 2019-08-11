var obj = {here: {is: "an"}, object: 2}

function objectsDeeplyEqual(a,b)
{
        if(typeof a != "object" || typeof b != "object")
        {
                return false;
        }
    return JSON.stringify(a) === JSON.stringify(b); 
}
console.log(objectsDeeplyEqual(obj,obj));
console.log(objectsDeeplyEqual(obj, {here: 1, object: 2}));
console.log(objectsDeeplyEqual(obj, {here: {is: "an"}, object: 2}));
