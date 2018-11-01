#include<stdio.h>
int main(){
int sayi1,sayi2;
float sonuc;
char islem;
printf("1. sayi, islem ve 2.sayi giriniz : ");
scanf("%d %c %d",&sayi1, &islem,&sayi2);
switch(islem)
	{	
	case '+':sonuc=(float)sayi1+sayi2;
	break;
	case '-':sonuc=(float)sayi1-sayi2;
	break;
	case '*':sonuc=(float)sayi1*sayi2;
	break;
	case '/':sonuc=(float)sayi1/sayi2;
	break;
	case '%':sonuc=sayi1%sayi2;
	break;
	default:printf("Yanlis islem girdiniz!");
	break;
	}
	printf("Sonuc : %d %c %d = %f",sayi1,islem,sayi2,sonuc);
	getchar();
}

