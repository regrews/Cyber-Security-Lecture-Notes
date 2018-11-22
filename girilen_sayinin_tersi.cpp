#include<stdio.h>
int main(){
	int sayi=0,sonuc=0;;
	
	scanf("%d",&sayi);
	while(sayi>0){
		sonuc=sayi%10;
		sayi=(sayi-sonuc)/10;
		printf("%d",sonuc);
	}
	getchar();
}
