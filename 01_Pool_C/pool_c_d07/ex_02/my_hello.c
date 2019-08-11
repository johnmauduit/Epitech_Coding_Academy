#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>



int	main(int argc, char ** argv)
{
  int	i;
  
  i = 0;
  if (argc != 2 || atoi(argv[1]) <= 0)
    {
    printf("Error.\n");
    }
  else
    {
      while(i < atoi(argv[1]))
	{
	  printf("%s\n", "Hello");/* printf("%s\n", argv[j]);*/
	  i++;
	}
    }
  return(0);
}
