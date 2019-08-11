#include <unistd.h>
void		my_putchar(char a)
{
  write(1, &a, 1);
}
int		my_putstr(char *str)
{
  int		a;
    
  a = 0;
  while (str[a] !='\0')
    {
      my_putchar(str[a]);
      a++;
    }
}
/* int		main() */
/* { */
/*   my_putstr("WTF Marvin\n"); */
/* } */
