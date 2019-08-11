var i;
var str = [];

function fizzBuzz()
{
        for (i = 1; i <= 20; i++)
        {
                if ((i%3 == 0) && (i%5 == 0))
                {
                        str.push("FizzBuzz");
                }              
                else if (i%3 == 0)
                {
                        str.push("Fizz");
                }
                else if (i%5 == 0)
                {
                        str.push("Buzz");
                }
                else
                {
                        str.push(i);
                }                
        } 
        console.log(str.join(', '));
}
fizzBuzz();
