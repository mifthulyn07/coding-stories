#include <iostream>
using namespace std;
int main()
{
   int n, jlh=0, sisa;
    cout<<"masukkan angka: ";cin>>n;
    while (n!=0){
        sisa = n%10;
        jlh=jlh + sisa;
        n=n/10;
    }
    cout<<"jumlah nilai angka yang dimasukkan= "<<jlh<<endl;
    return 0;
}

for:tidak memakai if
#include <iostream>
using namespace std;
int main()
{
    int n, jlh=0, i;
    cout<<"masukkan angka: ";cin>>n;
    cout<<"0";
        for(i=2; i<=n; i+=2){
            jlh=jlh+i;
            cout<<"+"<<i;
        }
	cout<<endl;
    cout<<"jumlah= "<<jlh;
    return 0;
}

for:memakai if
#include <iostream>
using namespace std;
int main(){
    int n, jlh=0, i;
    cout<<"masukkan angka: ";cin>>n;
        for(i=0; i<=n; i+=2){
            jlh=jlh+i;
            cout<<i;
        if(i<n){
            cout<<"+";
        }
        }
	cout<<endl;
    cout<<"jumlah= "<<jlh;
    return 0;
}

while:
#include <iostream>
using namespace std;
int main()
{
   int n, jlh=0, i=2;
    cout<<"masukkan angka: ";cin>>n;
    cout<<"0";
    while(i<=n){
       cout<<"+"<<i;
       jlh=jlh+i;
       i+=2;
    }
    cout<<endl;
    cout<<"jumlah= "<<jlh<<endl;
    return 0;
}

do-while:
#include <iostream>
using namespace std;
int main(){
   int n, jlh=0, i;
    cout<<"masukkan angka: ";cin>>n;
    cout<<"0";
    i=2;
    do{
	jlh=jlh+i;
        cout<<"+"<<i;
        i+=2;
    }
    while(i<=n);
    cout<<endl;
    cout<<"jumlah= "<<jlh<<endl;
    return 0;
}
