#include<stdio.h>
void cati(void){
	printf("   a    \n");
	printf("  a  a   \n");
	printf(" a     a  \n");
	printf("aaaaaaaaa\n");
}
void kat(char harf,char taban){
	printf("%c       %c\n",harf,harf);
	printf("%c       %c\n",harf,harf);
	printf("%c       %c\n",harf,harf);
	printf("%c%c%c%c%c%c%c%c%c\n",harf,taban,taban,taban,taban,taban,taban,taban,harf);
}
int main(){
	cati();
	kat('x','t');
	kat('y','t');
}
