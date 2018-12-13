#include<stdio.h>
#include<stdlib.h>
#include<time.h>
int main()
{
	int a,i=1;
	srand(time(NULL));
	while(i<10)
	{
		a=rand();
		printf("%d \n",a);
		i++;
	}
}

