#include <stdlib.h>
#include <stdio.h>

int	my_power_it(int a, int b)
{
  int	res;

  res = a;
  if (b == 0)
    {
      return(1);
    }
  else if (b < 0)
    {
      return(0);
    }
  while (b > 1)
    {
      res = res * a;
      b = b - 1;
    }
  return(res);
}
