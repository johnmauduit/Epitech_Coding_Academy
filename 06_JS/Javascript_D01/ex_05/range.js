var arr;

function range(start, end, step)
{
       if(arguments.length == 1)
       {
               end = start;
               start = 0;
       } 
       console.log(end);
        end = end || 0;
        console.log(end);
        step = step || 1;


        for(arr = [];(end - start) * step >= 0; start += step)
        {
                arr.push(start);
        }
       return arr;
}

console.log(range(1, -1, 2));
console.log(range(19, 22));
console.log(range(5, 2, -1));