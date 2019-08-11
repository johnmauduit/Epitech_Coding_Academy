
function arrayFilter(array, test)
{
    return array.filter(test);
}

var toFilter = [1, 2, 3, 4, 5, 6, 7, 8, 9];

//fonction anonyme
var passed = arrayFilter(toFilter, function(value)
{
        return value % 3 === 0;
});


console.log(passed);