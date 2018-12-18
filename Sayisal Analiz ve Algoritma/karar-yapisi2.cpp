#include<stdio.h>
int main() 
{
	int a;
	printf("a degeri giriniz :");
	scanf("%d",&a);
	if(a<=18)	 {
		printf("Cocuk");
	}
	else if(a>18 || a<=65){
		printf("Genc");
	}
	else if(a>65)
	{
		printf("biraz dinlenmen gerek");
	}
	getchar();
}
	
	

