#include <unistd.h>
#include <stdio.h>
#include <stdlib.h>

int	magic_square(int *sqr)
{
  int	r1;
  int	r2;
  int	r3;
  int	c1;
  int	c2;
  int	c3;
  int	d1;
  int	d2;

  r1 = sqr[0] + sqr[1] + sqr[2];
  r2 = sqr[3] + sqr[4] + sqr[5];
  r3 = sqr[6] + sqr[7] + sqr[8];
  c1 = sqr[0] + sqr[3] + sqr[6];
  c2 = sqr[1] + sqr[4] + sqr[7];
  c3 = sqr[2] + sqr[5] + sqr[8];
  d1 = sqr[6] + sqr[4] + sqr[2];
  d2 = sqr[0] + sqr[4] + sqr[8];
  if (r1 == r2 && r2 == r3)
    {
      if (c1 == c2 && c2 == c3)
	{
	  if (d1 == d2)
	    {
	      return(0);
	    }
	  else
	    return(1);
	}
      else
	return(1);
    }
  else
    return(1);
}

/* int	main() */
/* { */
/*   //int tab[] = {1, 2, 3, 4, 5, 6, 7, 8, 9}; */
/*   int tab[] = {8, 1, 6, 3, 5, 7, 4, 9, 2}; */
/*   printf("%d", magic_square(tab)); */
/*   return(0); */
  
/* } */
