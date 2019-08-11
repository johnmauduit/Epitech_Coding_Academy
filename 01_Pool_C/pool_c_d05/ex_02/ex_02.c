#include <unistd.h>
#include <stdio.h>

char		*my_revstr(char *str)
{
  int		count;
  int		end;
  int		temp;
  /*calcul de la chaine de caracteres "count"*/  
  count = 0;
  while (str[count] != '\0')
    {
      count++;/*cherche la fin de la chaine*/
    }
  count--;/*positionne le curseur a la fin "end"*/
  end = 0;
    while (end < count)
      {/* et la on permute les caracteres avec un swap*/
	temp = str[count];
	str[count] = str[end];
	str[end] = temp;
	count--;
	end++;
      }
    return(str);
}

/* int		main() */
/* { */
/*   char		str[6] = "hello"; */

/*   printf("%s\n", my_revstr(str)); */
/* } */
