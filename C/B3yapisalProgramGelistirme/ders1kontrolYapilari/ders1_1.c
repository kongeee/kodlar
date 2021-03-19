#include <stdio.h>

int main(){

    int number=0;
    printf("Bir sayi giriniz :"); scanf("%d", &number);

    //TODO : if else bloğu sayının ngatif mi pozitif mi olduğuna bakar
    if(number == 0){
        printf("Sayi sifirdir");
    }
    else if(number > 0){
        printf("Sayi pozitiftir");
    }
    else{
        printf("Sayi negatiftir");
    }

    return 0;
}