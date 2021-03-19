#include <stdio.h>

int main(){

    printf("deneme1\ndeneme2\n"); // TODO : \n bir alt satıra geçmeyi sağlar
    printf("deneme1\tdeneme2\n"); //TODO : \t bir tab mesafesi kadar yatayda boşluk bırakır
    printf("deneme1\adeneme2\n"); //TODO : \a ses veya uyarı üretir

    printf("deneme1\\deneme2\n"); //TODO : \\ ters slash yazdırmayı sağlar
    printf("deneme1\"deneme2\n"); //TODO : \" tırnak işareti yazdırmayı sağlar

    return 0;
}