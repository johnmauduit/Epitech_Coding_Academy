#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "rubiks.h"
#define EMPTY 0
#define BLOCKED 1

int	*look_for_space(int **table, int *lines, int *columns, int value)
{
  int	x;// index lines
  int	y;// index columns
  int	*tab;// déclaration du tableau de retour

  x = 0;
  y = 0;
  tab = malloc (sizeof(int) * 2);// allocation d'espace pour le tableau de retour
  while (y < 4)
    {
      while(x < 4)
 	{
 	  if (table[x][y] != value && lines[x] == EMPTY && columns[y] == EMPTY)
 	    {
 	      tab[0] = x;
 	      tab[1] = y;
 	      return(tab);
 	    }
 	  x = x + 1;
 	}
      y = y + 1;
    }
  return(NULL);
}

void	verif_return(int *ret)
{
  if (ret != NULL)
    printf("Line :\t%d\nColumn :\t%d\n", ret[0], ret[1]);
  else
    printf("Nothing found in the giving range.\n");
}

void	print_tab(int **table)
{
  int	i;

  i = 0;
  printf("-----------------\n");//17 tirets, impression de la premiere ligne
  while (i < 4)//boucle d'impression du reste du tableau
    {
      printf("| %d | %d | %d | %d |\n", table[i][0], table[i][1], table[i][2], table[i][3]);
      printf("-----------------\n");
      i++;
    }
}

//##################################################################################

int	main()
{
  int	x;
  int	**table = malloc(sizeof(int *) * 4);

  x = 0;
  while (x < 4)
    {
      table[x] = malloc(sizeof(int) * 4);
      x++;
    }//tableau plus court fait avec habib pour eviter des longueurs de ligne de code
  memcpy(table[0], (int [4]){2,1,3,0}, 4 * sizeof(int));
  memcpy(table[1], (int [4]){0,0,1,1}, 4 * sizeof(int));
  memcpy(table[2], (int [4]){2,2,3,0}, 4 * sizeof(int));
  memcpy(table[3], (int [4]){2,2,1,3}, 4 * sizeof(int));
  
  /* algo_square_reverse (table, 0); */
  /* algo_column_reverse (table, 0); */
  /* algo_line_reverse (table, 0); */
  
  
  print_tab (table);
//Impression pour determiner si les valeurs citées sont dans le tableau
  /* printf("%d - %d\n", is_in_line(table, 0, 3), is_in_col(table, 2, 3));  */
  /* printf("%d - %d\n", is_in_line(table, 3, 1), is_in_col(table, 2, 0)); */

  int	lines[4];
  int	columns[4];

  lines[0] = BLOCKED;
  lines[1] = BLOCKED;
  lines[2] = EMPTY;
  lines[3] = BLOCKED;
  columns[0] = EMPTY;
  columns[1] = EMPTY;
  columns[2] = BLOCKED;
  columns[3] = BLOCKED;

  verif_return(look_for_space(table, lines, columns, 1));
  verif_return(look_for_space(table, lines, columns, 2));

  x = 0;     
  while (x > 4)// libere l'espace des lignes
    {
      free(table[x]);
      x--;
    }
  free(table);// libere l'espace du tableau
  return(0);
}
