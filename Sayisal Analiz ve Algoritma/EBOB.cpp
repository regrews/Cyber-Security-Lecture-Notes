#include<stdio.h>
int obeb(int x , int y)	
{
	int bolen=2 , buyukortakbolen=1;
		 
	while (x>1 || y>1)
		{
			if(x%bolen==0 && y%bolen==0)
				{
					buyukortakbolen=buyukortakbolen*bolen;
					x=x/bolen;
					y=y/bolen;	
				}
			else if (x%bolen == 0)
				{
					x=x/bolen;
				}
			else if (y%bolen == 0)
				{
					y=y/bolen;
				}
			else
				{
					bolen++;
				}				
		}
	return buyukortakbolen;
}



int main()
{
	
	int a=36 , b=48 , sonuc;
	sonuc=obeb(a,b);
	printf("sonuc : %d\n",sonuc);
	
}
