#include<stdio.h>
int faktoriyel(int sayi){
	int sonuc=1;
	for(int i=1;i<=sayi;i++){
            sonuc *= i;
        }
    return sonuc;
}
int main(){
	int sayi;
	scanf("%d",&sayi);
	int fakt=faktoriyel(sayi);
	printf("%d sayiyisinin faktoriyeli = %d",sayi,fakt);
}
