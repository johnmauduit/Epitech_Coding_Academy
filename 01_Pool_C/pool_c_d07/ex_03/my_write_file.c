#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>
#include <stddef.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>

int	my_strlen(char *str);

int	my_strlen(char *str)
{
  int	i;
  
  i = 0;
  while(*str)
    {
      i++;
      str++;
    }
  return i;
}
/*void	my_putstr(char *);*/

int	main(int argc, char **argv)
{
  if(argc < 3)
    {
       printf("Error.\n");
      return(1);
    }
  int	fd;
  int	size;
  int	i;
  
  i = 2;

  fd = open(argv[1], O_RDWR | O_CREAT | O_TRUNC, 0755);
  if (fd == -1)
    {
      printf("Error.\n");
      return(1);
    }
      while(i < argc)
	{
	  size = my_strlen(argv[i]);
	  write(fd, argv[i], size);
	  write(fd, "\n", 1);
	  i++;
	  //printf("%s\n", argv);
	}
  close(fd);
  return(0);
}
