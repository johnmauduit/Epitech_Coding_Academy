#include <stdlib.h>
#include <stdio.h>

void	*my_up(int i)
{
  int	*tab;
  tab = malloc(sizeof(int)*2);
  tab [0] = i;
  tab [1] = i * 2;
  return (tab);
}

/* int	main() */
/* { */
/*   int	*tab1; */
/*   int	i; */

/*   tab1 = NULL; */
/*   i = 3; */
/*   tab1 = my_up(i); */
/*   printf("%d\n", tab1[0]); */
/*   printf("%d\n", tab1[1]); */
/*   free(tab1); */
/*   return (0); */
/* } */
