#include <stdlib.h>
#include <string.h>
#include "struct.h"
#include "abs.h"

void	my_init(t_my_struct *ptr, int x, const char *dest)
{
  ptr-> str = strdup(dest);
  ptr-> id = MY_ABS(x);
}
