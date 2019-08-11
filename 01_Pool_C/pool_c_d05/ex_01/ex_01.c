#include <stdio.h>

int		array_sum(int *tab, int size)
{
  int		sum;
  int		a;
  
  sum = 0;
  a = 0;
  while (a < size)
    {
      sum = (sum + tab[a]);
      a++;
    }
  return(sum);
}

/* int		main() */
/* { */
/*   int		tab[3] = {6, 10, 2}; */
/*   printf("%d\n", array_sum(tab, 3)); */
/*   return(0); */
/* } */
