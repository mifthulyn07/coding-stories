#include <iostream>
#include <fstream>
#include <string>
using namespace std;
int main()
{
    ifstream fileku;
    string output, buffer;
    bool isdata = false;
    int no;
    string nama;

    // ios::in
    // ios::ate = mulai dari akhir file
    // ios::binary = menaruh hexadecimal

    fileku.open("data.txt", ios::in);

    while(!isdata){
        getline(fileku, buffer);
        output.append("\n" + buffer);
        if(buffer == "data"){
            isdata = true;
        }
    }
    cout<<output<<endl;

    getline(fileku, buffer);
    cout<<buffer<<endl;
    int jumlah_data = 0;
    while(!fileku.eof()){

        fileku>>no;
        fileku>>nama;

        cout<<no<<"\t"<<nama<<endl;
        jumlah_data++;
        getline(fileku, buffer);
    }
    cout<<"jumlah data: "<<jumlah_data<<endl;
    cin.get();
    return 0;
}
