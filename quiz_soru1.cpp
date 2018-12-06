#include<stdio.h>
int main(){
	int sayi,ortalama,toplam=0,sayac=0;
	while(true)
	{
		printf("Sayi giriniz :\n");
		scanf("%d",&sayi);
		if(sayi>-1)
		{
			toplam=toplam+sayi;
		}
		else
		{
			ortalama=toplam/sayac;
			break;
		}
		sayac++;
	}
	printf("ORTALAMA =%d",ortalama);
	getchar();
}

