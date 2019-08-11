#include <unistd.h>

void		alpha()
{
  int		c;
  
  c = 65;
  while (c <= 90)
    {
      write(1, &c, 1);
      c++;
    }
  write(1, "\n", 1);  
}

/*int	main()
{
  alpha();
  return (0);
}*/
