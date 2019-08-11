#include <unistd.h>
#include <stdio.h>
#include <stdlib.h>

int	*merge_array(int *arr1, int *arr2, int size1, int size2)
{
  int	i;//index 1
  int	j;//index 2
  int	k;// compteur vers arr3 (+ ou - un temp)
  int	*arr3;

  i = 0;
  j = 0;
  arr3 = malloc(sizeof(int) * (size1 + size2));
  while(i < size1)
    {
      arr3[i] = arr1[i];
      i++;
    }
  while(j < size2)
    {
      arr3[i] = arr2[j];
      i++;
      j++;
    }
  return(arr3);      
}
 
/* int	main() */
/* { */
/*   int	arr1[2] = {2, 3,}; */
/*   int	arr2[3] = {6, 8, 1}; */
/*   int	*ret; */
/*   //int	i; */

/*   ret = merge_array(arr1, arr2, 2, 3); */
/*   printf("MERGE\n"); */
/*   for (int i = 0; i < 5; i++) */
/*     printf("%d", ret[i]); */
/*   //merge_array(arr1, arr2, 2, 3); */
/* } */
