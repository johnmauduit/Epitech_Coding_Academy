#ifndef RUBIKS_H_
#define RUBIKS_H_

struct s_print_tab
{
  int	**tab;
};

typedef struct s_print_tab t_print_tab;

void	print_tab(int **table);
#endif
