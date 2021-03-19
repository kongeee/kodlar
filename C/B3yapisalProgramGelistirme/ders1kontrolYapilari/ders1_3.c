// TODO : girilen a b c lerin sayılarını (frekanslarını) bulan program

#include <stdio.h>

int main(){

    int not;

    int countA = 0;
    int countB = 0;
    int countC = 0;

    puts("Harf notlarini giriniz :");
    while ( (not = getchar()) != EOF ){ //girilen karakter Eof (ctrl + z) olmadığı sürece not için input al

        switch(not){

            case 'A':
            case 'a':
                countA++;
                break;
            case 'B':
            case 'b':
                countB++;
                break;
            case 'C':
            case 'c':
                countC++;
                break;
            
        }

    }

    printf("A: %d\nB: %d\nC: %d", countA, countB, countC);

    return 0;
}