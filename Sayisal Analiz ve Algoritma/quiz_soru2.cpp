#include<stdio.h>
#include<stdlib.h>
#include<time.h>
int main(){
	srand(time(NULL));
	int yazi=0,tura=0;
	for(int i=0;i<1000;i++){
		int para=rand()%2;
			if(para==0)
			{
				yazi++;
			}
			else
			{
				tura++;
			}
		}
		printf("%d defa yazi geldi.\n",yazi);
		printf("%d defa tura geldi.\n",tura);	
		getchar();
}
