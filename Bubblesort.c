#include <stdio.h>
#include <stdlib.h>
#define size 10
#include <stdbool.h>
int main()
{
    
    int arr[size]={1,4,6,3,2,6,7,5,8,10},temp,i=0;
    bool flag;
    do{
        flag=false;
        for(i=0;i<(size-1);i++)
        {
            if(arr[i]>arr[i+1]){
                temp=arr[i];
                arr[i]= arr[i+1];
                arr[i+1]=temp;
            }
            else{
                flag=true;
            }
        }
        

    }while(flag);

    for(i=0;i<(size-1);i++){
        printf("%d\t",arr[i]);
    }
    return 0;
}