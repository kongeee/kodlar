#include <stdio.h>
#include <math.h>

void getValues(int p1[], int p2[]){
	int x1, y1;
	int x2, y2;
	
	printf("Enter point1's coordinates : "); scanf("%d%d", &p1[0], &p1[1]);
	printf("Enter point2's coordinates : "); scanf("%d%d", &p2[0], &p2[1]);
	
}

void printing(float result){
	
	printf("Result is : %.2f\n", result);
	
}

void eucledian(int p1[], int p2[]){
	
	float result = sqrt(pow(p1[0]-p1[1],2) + pow(p2[0]-p2[1],2));
	printing(result);
	
}

int main(){
	
	int point1[2];
	int point2[2];
	
	getValues(point1, point2);
	
	eucledian(point1, point2);
	
	
	
	return 0;
}