#include<stdio.h>
int main() {
	char isim;
	int saat, ucret, maas;
	printf("Isim, saat ve ucret bilgisi giriniz :");
	scanf("%c %d %d",&isim, &saat, &ucret);
	//Tek tek veri giriþi
/*	printf("Saatlik ucret giriniz :"); 
	scanf("%d",&ucret);
	printf("Kac saat calistiginizi giriniz :");
	scanf("%d",&saat);*/
	maas=saat*ucret;
	printf("%c isimli calisanin maasi :%d",isim,maas);
	getchar();
	
}
