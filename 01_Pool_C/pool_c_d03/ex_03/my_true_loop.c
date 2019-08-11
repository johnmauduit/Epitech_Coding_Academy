#include <unistd.h>

void		my_true_loop(unsigned int n)
{
  int		c;

  c = '+';
  int		count;
  
  count = 0;
  while (count < n)
    {  
      write(1, &c, 1);
      count++;
    }  
  write(1, "\n", 1);
}

/*int		main()
{
  my_true_loop(5);
  return (0);
  }*/
