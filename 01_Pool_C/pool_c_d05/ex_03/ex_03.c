#include <unistd.h>
#include <string.h>
#include <stdio.h>

int		my_strcmp(char *str1, char *str2)
{
  int		i;
  int		j;

  i = 0;
  j = 0;
  /* str1[] = "A"; */
  /* str2[] = "Z"; */

  while ((str1[i] == str2[j]) && (str1[i] != '\0') && (str2[j] !='\0'))
    {
      i++;
      j--;
    }
  return (str1[i] - str2[j]);
}

/* int		main() */
/* { */
/*   printf ("%d\n", my_strcmp("str1", "str2")); */
/* } */
/* int		my_strcmp(char *str1, char *str2) */
/* { */
/*   int		i; */

/*   i = 0; */
/*   while ((str1[i] == str2[i]) && (str1[i] !='\0') && (str2[i] !='\0')) */
/*     { */
/*       i++; */
/*     } */
/*   return (str1[i] - str2[i]); */
/* } */
/* int		main() */
/* { */
/* } */
