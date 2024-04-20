#include <iostream>
#include <fstream>
#include <string>
using namespace std;
int main()
{
    ifstream fileku;
    string output;

    // ios::in
    // ios::ate = mulai dari akhir file
    // ios::binary = menaruh hexadecimal

    fileku.open("data.txt", ios::in);

    if(!fileku.fail()){
        cout<<"isi dari file -> ";
        while(!fileku.eof()){
            fileku.get(output);
            cout<<output;
        }
        fileku.close();
    }else{
        cout"dile tidak ditemukan"<<endl;
    }

    cin.get();
    return 0;
}
