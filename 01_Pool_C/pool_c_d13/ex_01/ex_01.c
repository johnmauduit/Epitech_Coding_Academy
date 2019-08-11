#include <unistd.h>
#include <stdio.h>

void	my_putchar(char c)
{
  write (1, &c, 1);
}

int	my_putstr(char *str)
{
  int	i;

  i = 0;
  while (str[i] !='\0')
    {
      my_putchar(str[i]);
      usleep(500000);
      i = i + 1;
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
/*   my_putstr("WTF Marvin\n"); */
/*   return(0); */
/* } */
