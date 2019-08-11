#include <stdio.h>
void		my_swap(int *ptr1, int *ptr2)
{
  int	ptr3;

  ptr3 = *ptr1;
  *ptr1 = *ptr2;
  *ptr2 = ptr3;
}
/* int		main() */
/* { */
/*   int		nb1; */
/*   int		nb2; */

/*   nb1 = 42; */
/*   nb2 = 21; */
/*   printf("%d - %d\n", nb1, nb2); */
/*   my_swap(&nb1,&nb2); */
/*   printf("%d - %d\n", nb1, nb2); */
/*   return(0); */
/* } */
