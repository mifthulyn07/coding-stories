#include <iostream>
#include<cstdlib>
using namespace std;
int main()
{
    cout<<"\t\t============"<<endl;
    cout<<"\t\tBUBBLE SHORT"<<endl;
    cout<<"\t\t============"<<endl;
    int nilai[5];
    int i, j, y;
    for(i=1; i<=5; i++){
        cout<<"masukkan nilai: ";cin>>nilai[i];
    }
    for(i=1;i<=4;i++){
        for(j=i+1; j<=5; j++){
            if(nilai[i]>nilai[j]){
                y=nilai[i];
                nilai[i]=nilai[j];
                nilai[j]=y;
            }}}
    for(i=0; i<=5; i++){
        cout<<endl<<nilai[i]<<endl;
    }
    cout<<"\t\t==============="<<endl;
    cout<<"\t\tSELECTION SHORT"<<endl;
    cout<<"\t\t==============="<<endl;
    int arr[] = {10,9,8,7,6,5,4,3,2,1};
    int kecil, indexkecil, m, n;
    for(m=0; m<10; m++){
        cout<<arr[m]<<',';
    }
    cout<<endl<<endl;
    for(m=0; m<10; m++){
            kecil = arr[m];
            indexkecil = m ;
            for(n=m; n<10; n++){
                if(arr[n]<kecil){
                    kecil=arr[n];
                    indexkecil=n;
                }
            }
        }



    return 0;
}
