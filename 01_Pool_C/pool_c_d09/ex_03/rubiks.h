#ifndef RUBIKS_H_
#define RUBIKS_H_

struct s_print_tab// structure de la fonction
{
  int	**tab;
};

typedef struct s_print_tab t_print_tab; //edition du raccourci de la structure

void	print_tab(int **table);// fonction
#endif
