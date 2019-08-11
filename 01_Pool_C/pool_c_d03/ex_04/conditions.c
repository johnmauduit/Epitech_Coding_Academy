#include <unistd.h>

void		conditions(int n)
{
  int		a;

  a = '-';
  int		b;

  b = '+';
  int		c;

  c = '0';

  if (n < 0)
    {
      write(1, &a, 1);
    }
  else if (n > 0)
    {
      write(1, &b, 1);
    }
  else
    {
      write(1, &c, 1);
    }
}

/*int		main()
{
  conditions(-564);
  conditions(564);
  conditions(0);
  return (0);
}*/
