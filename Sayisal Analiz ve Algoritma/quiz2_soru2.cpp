#include<stdio.h>
#include<stdlib.h>
#include<time.h>
char *password_create(char dizi[16],char dizi2[8]){
	
	srand(time(NULL));	
	for(int i=0;i<8;i++){
		int a=rand()%16;
		dizi2[i]=dizi[a];
	}
	return dizi2;
}
int main(){
		
	char karakter[16]={'a','b','c','d','e','f','1','2','3','4','5','6','7','8','9'};
	char *ptr;
	char pass[8];
	ptr=password_create(karakter,pass);
	for(int i=0;i<8;i++){
		printf("%c",ptr[i]);
	}
}
