#include <stdlib.h>
#include <stdio.h>

int	my_power_rec(int a, int b)
{
  if (b > 0)
    {
      return (a*= my_power_rec(a, b - 1));
    }
  return(1);
}

/* int	main() */
/* { */
/*   int	a; */
/*   int	b; */

/*   a = 2; */
/*   b = 3; */
/*   printf("%d\n", my_power_rec(a, b)); */
/*   return(0); */
/* } */
