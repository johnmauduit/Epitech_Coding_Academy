#include <string.h>
#include <stdlib.h>
#include <stdio.h>

void	my_reset_ptr(char **ptr)
{
  *ptr = NULL;
  free(*ptr);
}

/*int	main()
{
  char	*str;

  str = strdup("Plaese . let me free !");
  my_reset_ptr(&str);
  return(0);
}*/
