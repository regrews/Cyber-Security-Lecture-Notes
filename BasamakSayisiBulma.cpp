#include<stdio.h>
int main(){
	int kacBasamak=7,a=1,b=1,c;
	for(int i=1;i<=kacBasamak;i++){
		c=a+b;
		printf("%d. basamak %d\n",i,c);
		a=b;
		b=c;
	}
	printf("\n %f",(float)b/a);
	getchar();
}
