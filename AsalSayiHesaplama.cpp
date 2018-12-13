#include<stdio.h>
#include<math.h>
int main(){
	int sayi,kalan,i;
	scanf("%d",&sayi);
	int kok=sqrt(sayi)+1;
	for( i=1;i<kok-1;){
	if(i==1) kalan=sayi%2;
	else kalan=sayi%i;
	if(kalan==0){
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
