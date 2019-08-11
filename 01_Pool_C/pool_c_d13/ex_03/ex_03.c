#include <unistd.h>
#include <stdio.h>

void	my_putchar(char c)
{
  write (1, &c, 1);
}

int	my_putstr(char *str)
{
  int	i;//compteur
  int	j;// fin des caracteres
  
  i = 0;
  j = 0;
  while (str[i] !='\0')
    {
      my_putchar(str[i]);
      usleep(500000);
      i = i + 1;
    }
  while (j < i)
    {
      write(1, "\b \b", 3);
      usleep(500000);
      j = j + 1;
    }
}

int	main(int argc, char **argv)
{
  if (argc < 2)
    {
      write(2, "Error.\n", 11);
    }
  else
    {
      my_putstr(argv[1]);
    }
  return(0);
}
/* int	main() */
/* { */
/*   my_putstr("Hello"); */
/*   return(0); */
/* } */
