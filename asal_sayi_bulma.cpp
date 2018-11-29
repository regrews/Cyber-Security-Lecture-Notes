#include<stdio.h>
#include<math.h>
int main(){
	int sayi,kalan,i;
	scanf("%d",&sayi);
	int kok=sqrt(sayi)+1;//Sayinin kok ile olan ust siniri bulundu.
	for( i=1;i<kok-1;){
	if(i==1) kalan=sayi%2;//sayi 2'ye bolunebiliyorsa sayinin 2ile kalani bulunuyor
	else kalan=sayi%i;
	if(kalan==0){//kalan kontrol ediliyor.
		printf("%d asal degildir.",sayi);
		break;
	}
	i=i+2;
	}
	if(i>=kok-1){
		printf("%d asaldir\n",sayi);
	}
	getchar();
}
