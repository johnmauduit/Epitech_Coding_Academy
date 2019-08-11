#include <unistd.h>
#include <stdio.h>

void	my_putchar(char c)
{
  write (1, &c, 1);
}

void	my_swap(char *a, char *b)
{
  char	temp;

  temp = *a;
  *a = *b;
  *b = temp;
}

void	my_putstr(char *str)
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

char	*my_revstr(char *str)
{
  int	i;//compteur
  int	j;// fin des caracteres
  
  i = 0;
  j = 0;
  while (str[i] !='\0')
    {
      i = i + 1;
    }
  i = i - 1;
  while (j < i)
    {
      my_swap(&str[i], &str[j]);
      //sleep(1);
      //printf("%s\n", str);
      i = i - 1;
      j = j + 1;
    }
  return(str);
}

int	main(int argc, char **argv)
{
  if (argc < 2)
    {
      write(2, "Error.\n", 11);
    }
  else
    {
      my_putstr(my_revstr(argv[1]));
    }
  return(0);
}
/* int		main() */
/* { */
/*   char		str[6] = "hello"; */

/*   printf("%s\n", my_revstr(str)); */

/* int	main() */
/* { */
/*   char	str[12] = "\nWTF Marvin"; */
/*   my_putstr(my_revstr(str)); */
/*   return(0); */
/* } */
