#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "rubiks.h"

void	print_tab(int **table)
{
  int	i;

  i = 0;
  printf("-----------------\n");//17 tirets, impression de la premiere ligne
  while (i < 4) //boucle d'impression du reste du tableau
    {
      printf("| %d | %d | %d | %d |\n", table[i][0], table[i][1], table[i][2], table[i][3]);
      printf("-----------------\n");
      i++;
    }
}

int	main()
{
  int	x;
  int	y;
  int	**table = malloc(sizeof(int *) * 4);

  x = 0;
  y = 0;
  while (x < 4)
    {
      table[x] = malloc(sizeof(int) * 4);
      x++;
    }
  //tableau plus court fait avec habib pour eviter des longueurs de ligne de code
  memcpy(table[0], (int [4]){0,0,1,1}, 4 * sizeof(int));
  memcpy(table[1], (int [4]){0,0,1,1}, 4 * sizeof(int));
  memcpy(table[2], (int [4]){2,2,3,3}, 4 * sizeof(int));
  memcpy(table[3], (int [4]){2,2,3,3}, 4 * sizeof(int));
  
  print_tab (table);
  while (x < 4)// libere l'espace des lignes
    {
      free(table[x]);
    }
  free(table);// libere l'espace du tableau
  return(0);
}
