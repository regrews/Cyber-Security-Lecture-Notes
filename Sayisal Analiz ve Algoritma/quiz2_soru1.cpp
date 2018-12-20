#include<stdio.h>
int main(){
	int eleman=2,a=1,b=1,c;
	int dizi1[25];
	dizi1[0]=a;
	dizi1[1]=b;
	while(eleman<25){
		c=a+b;
		dizi1[eleman]=c;
		a=b;
		b=c;
		eleman++;
	}
	for(int i=0;i<25;i++){
		printf("%d. eleman = %d\n",i+1,dizi1[i]);
	}
}
