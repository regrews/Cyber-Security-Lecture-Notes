#include<stdio.h>
int main(){
	int nn;
	printf("Bir not deđeri giriniz: ");
	scanf("%d",&nn);
	if(100>=nn && nn>=0)
		{
			switch(nn/10)
			{
			case 10: printf("notunuz A+");
			break;
			case 9: printf("notunuz A+");
			break;
			case 8: printf("notunuz A");
			break;
			case 7: printf("notunuz B");
			break;
			case 6: printf("notunuz C");
			break;
			case 5: printf("notunuz d");
			break;
			default:printf("notunuz f");
			break;
			}//switch kapanisi
		}//else kapanisi
		getchar();
}
