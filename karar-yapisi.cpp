#include<stdio.h>
int main() {
	int a, b,c;
	printf("a, b ve c degeri giriniz :");
	scanf("%d %d %d",&a, &b,&c);
	if(a>b && a>c)	 {
		printf("a buyuktur");
	}
	else if(b>a && b>c){
			printf("b buyuktur");
	}
	else{
			printf("c buyuktur");
	}
	getchar();
	
}
