#include <stdio.h>
#include <stdlib.h>

char	*my_strcpy(char *dest, char *src)
{
  int	i;

  i = 0;
  while (src[i] !='\0')
    {
      dest[i] = src[i];
      i = i+1;
    }
  dest[i] ='\0';
return (dest);
}

/* int	main() */
/* { */
/*   char	str1[6] = "hello"; */
/*   char	str2[6] = "salut"; */
/*   printf ("%s\n", my_strcpy(str1, str2)); */
/* 	    return(0); */
/* } */
