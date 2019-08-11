 #include <unistd.h>
int		my_aff_comb()
{

  int a;
  int b;
  int c;

  a = 48;
  while (a <= 55)
    {
      b = a + 1;
      while (b <= 56)
	{
	  c = b + 1;
	  while (c <= 57)
	    {
	      write(1, &a, 1);
	      write(1, &b, 1);
	      write(1, &c, 1);
	      if (a < 55)
		{
		  write(1, &",", 1);
		}
	      c++;
	    }
	  b++;
	}
      a++;
    }
}

/* int	main() */
/* { */
/*   my_aff_comb(); */
/*   return (0); */
  
/* } */
