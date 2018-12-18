#include<stdio.h>
int main() 
{
	int a,b;
	float cvp;
	printf("a degeri giriniz :");
	scanf("%d %d",&a,&b);
	if(b!=0){
		cvp=float(a/b);
		printf("%f",cvp);
	}
	else{
	printf("b 0 olarak girildi");	}
	getchar();
}
	
