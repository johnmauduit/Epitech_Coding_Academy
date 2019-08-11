#ifndef STRUCT_H_
#define STRUCT_H_

struct	s_my_struct
{
  char	*str;
  int	id;
};

typedef	struct s_my_struct t_my_struct;

void	my_init(t_my_struct *ptr, int x, const char *dest);
#endif
