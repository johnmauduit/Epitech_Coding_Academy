#include <unistd.h>

void		revalpha()
{
  int		c;

  c = 90;
  while (c >= 65)
    {  
      write(1, &c, 1);
      c--;
    }  
  write(1, "\n", 1);
}

/*int	main()
{
  revalpha();
  return (0);
}*/
