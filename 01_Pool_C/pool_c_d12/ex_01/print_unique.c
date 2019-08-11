#include <unistd.h>
#include <stdio.h>

int	check(int *tab, int size)
{
  int	i;
  int	j;
  int	count;
  int	check1;
  
  check1 = 0;
  for (i = 0; i < size; i++)
    {
      count = 0;
      for (j = 0; j < size; j++)
	{
	  if (tab[i] == tab[j] && i != j)
	    {
	      count++;
	    }
	}
      if (count == 0)
	{
	  check1++;
	}
    }
  return(check1);  
}

void	print_unique(int *tab, int size)
{
  int	i;
  int	j;
  int	count;
  int	printed;
  int	display = 0;
  int   bool = 0;
  
  printed = 0;
  for (i = 0; i < size; i++)
    {
      display = 1;
      for (j = 0; j < size; j++)
	{
	 
	  if (tab[i] == tab[j] && j != i)
	    {
	      display = 0;
	    }
	}
      if (display == 1)
	{
	  if (bool == 1)
	    {
	      printf(",%d", tab[i]);
	    }
	  else
	    {
	    printf("%d", tab[i]);
	    bool = 1;
	    }	  
	}
      
    }
  printf("\n");
}

/* int	main() */
/* { */
/*   int	tab[] = {0, 0, 2, 3, 4, 3, 6, 1, 0}; */
/*   print_unique(tab, 9); */
/*   return(0); */
/* } */
