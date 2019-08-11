#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "rubiks.h"
#define PRINT_SQUARE_DEBUG__ 1

void	my_swap(int *ptr1, int *ptr2)
{
  int	temp;

  temp= *ptr1;
  *ptr1 = *ptr2;
  *ptr2 = temp;
}


void	algo_line_reverse(int **table, int line)//fonction de rotation gauche -> droite ligne
{
  int	x;

  x = 3;
  if (PRINT_SQUARE_DEBUG__ == 1)
    printf("Rotate Right line %d\n", line);
  while (x > 0)
    {
      my_swap(&table[line][x], &table[line][x - 1]);
      x = x - 1;
    }
  print_tab (table);
}

void	algo_column_reverse(int **table, int column)//fonction de rotation haut -> bas colonne
{
  int	y;

  y = 3;
  if (PRINT_SQUARE_DEBUG__ == 1)
    printf("Rotate Down column %d\n", column);
  while (y > 0)
    {
      my_swap(&table[y][column], &table[y - 1][column]);
      y = y - 1;
    }
  print_tab (table);
}

void	algo_square_reverse(int **table, int square)//fonction de rotation d'un carre de 2X2 inversé
{
  int	x;
  int	y;
  
  x = 0;
  y = 0;
  if (PRINT_SQUARE_DEBUG__ == 1)
    {
      printf("Rotate Counter Clockwise square %d\n", square);
      /* my_swap(&table[square][square], &table[square][square + 1]); */
      /* my_swap(&table[square + 1][square], &table[square + 1][square + 1]); */
      /* my_swap(&table[square][square], &table[square + 1][square + 1]); */
      my_swap(&table[square][square], &table[square + 1][square]);
      my_swap(&table[square][square + 1], &table[square + 1][square + 1]);

    }
  print_tab (table);
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
    }//tableau plus court fait avec habib pour eviter des longueurs de ligne de code
  memcpy(table[0], (int [4]){2,0,1,0}, 4 * sizeof(int));
  memcpy(table[1], (int [4]){0,1,1,1}, 4 * sizeof(int));
  memcpy(table[2], (int [4]){2,2,3,3}, 4 * sizeof(int));
  memcpy(table[3], (int [4]){0,2,3,3}, 4 * sizeof(int));

  print_tab (table);
  
  algo_square_reverse (table, 0);// rappel des fonctions pour chaques tableaux,  mais en sens inverse
  algo_column_reverse (table, 0);
  algo_line_reverse (table, 0);
  
  
  
  while (x < 4)// libere l'espace des lignes
    {
      free(table[x]);
    }
  free(table);// libere l'espace du tableau
  return(0);
}
