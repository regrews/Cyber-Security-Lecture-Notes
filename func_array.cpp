#include<stdio.h>
#include<stdlib.h>
#include<time.h>
void yazdir(int array[],int boyut)
{
	for(int i=0;i<boyut;i++)
	{
		printf("%d. eleman = %d\n",i+1,array[i]);
	}
}
int  maxBul(int array[],int boyut){
	int enBuyuk=array[0];

	for(int i=0;i<boyut;i++){
		if(enBuyuk<array[i])
		{
			enBuyuk=array[i];
		}
	}
	//printf("en buyuk eleman =%d\n",enBuyuk);
	return enBuyuk;
	
}
int minBul(int array[],int boyut){
		int enKucuk=array[0];
		for(int i=0;i<boyut;i++)
		{
			if(enKucuk>array[i])
			{
				enKucuk=array[i];
			}
		}
		//printf("en kucuk eleman =%d\n",enKucuk);
		return enKucuk;
}
int ortalama(int array[],int boyut){
	int toplam=0;
	for(int i=0;i<boyut;i++){
		toplam += array[i];
	}
	
	return toplam/boyut;
}
void faktoriyel_aktar(int array1[],int array2[],int boyut)
{
	for(int i=0;i<boyut;i++)
	{
		int sonuc=1;
		for(int j=1;j<=array1[i];j++)
		{
          	  sonuc *= j;
    	}
    	array2[i]=sonuc;
	}
	yazdir(array2,20);
}
int main(){

	//int dizi[5]={1,5,7,9,4};
	
	//diziye rastgele eleman üretmek
	int array[30]={};
	srand(time(NULL));
		
	for(int i=0;i<20;i++){
		array[i]=rand()%100;
	}
	yazdir(array,20);
	int dizi2[20]={};
	printf("en buyuk eleman =%d\n",maxBul(array,20));
	printf("en kucuk eleman =%d\n",minBul(array,20));
	printf("Dizinin ortalamasi =%d\n",ortalama(array,20));
	faktoriyel_aktar(array,dizi2,20);
	
}
