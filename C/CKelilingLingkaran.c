#include <stdio.h>
#include <stdlib.h>
int main()
{
    printf("=============================");
    printf("\nmenghitung keliling lingkaran");
    printf("\n=============================");
    float phi = 3.14,keliling;
    int jari2;
    printf("\nmasukkan jari-jari: ");
    scanf("%i",&jari2);
    keliling = 2*phi*jari2;
    printf ("keliling lingkaran: %f",keliling);
    return 0;

}
