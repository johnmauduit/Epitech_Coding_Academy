#include <stddef.h>		
#include <unistd.h>
#include <stdio.h>
/* void	my_putchar(char c) */
/* { */
/*   write(1, &c, 1); */
/* } */

/* void	my_putstr(char *str) */
/* { */
/*   int	i; */

/*   i = 0; */
/*   while(str[i] !='0') */
/*     { */
/*       my_putchar(str[i++]); */
/*     } */
/* } */

int	main(int argc, char ** argv)
{
  int	j;

  j = 1;
  if (argc == 1)
    {
    printf("\n");
    }
  else
    {
      while(argv[j] != NULL)
	{
	  printf("%s\n", argv[j]);
	  j++;
	}
    }
  return(0);
}
