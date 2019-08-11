#include <unistd.h>

int		my_strlen(char *len)
{
  int		a;
    
  a = 0;
  while (len[a] !='\0')
    {
      a++;
    }
  return(a);
}
/* int		main() */
/* { */
/*   return (my_strlen("Marvin\n")); */
/* } */
