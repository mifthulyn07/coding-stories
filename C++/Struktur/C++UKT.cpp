#include <iostream>
using namespace std;
int main()
{
    int gaji,rumah;
    cout<<"PENGHASILAN PERBULAN"<<endl;
    cout<<"1. <1.500.000"<<endl;
    cout<<"2. 1.501.000-2.500.000"<<endl;
    cout<<"3. 2.500.001-3.500.000"<<endl;
    cout<<"4. 3.500.001-4.500.000"<<endl;
    cout<<"5. >4.500.000"<<endl;
    cout<<"masukkan penghasilan perbulan: ";cin>>gaji;
    cout<<"KEPEMILIKAN RUMAH"<<endl;
    cout<<"1. kontrak"<<endl;
    cout<<"2. pribadi"<<endl;
    cout<<"masukkan kepemilikan rumah: ";cin>>rumah;
    if (gaji==1, rumah==1){
        cout<<"kelompok ukt 1: Rp.400.000;";
    }
    else if(gaji==2 && rumah==1){
        cout<<"kelompok ukt 2: Rp.2.800.000;";
    }
    else if(gaji==3 && rumah==1){
        cout<<"kelompok ukt 3: Rp.3.215.000;";
    }
    else if(gaji==4 && rumah==1){
        cout<<"kelompok ukt 4: Rp.4.018.000;";
    }
    else if(gaji==5 && rumah==1){
        cout<<"kelompok ukt 5: Rp.4.900.000;";
    }
    else if(gaji==1 && rumah==2){
        cout<<"kelompok ukt 1: Rp.400.000;";
    }
    else if(gaji==2 && rumah==2){
        cout<<"kelompok ukt 3: Rp.3.215.000;";
    }
    else if(gaji==3 && rumah==2){
        cout<<"kelompok ukt 6: Rp.5.900.000;";
    }
    else if(gaji==4 && rumah==2){
        cout<<"kelompok ukt 7: Rp.6.700.000;";
    }
    else if(gaji==5 && rumah==2){
        cout<<"kelompok ukt 7: Rp.6.700.000;";
    }
    else {
        cout<<"masukkan anda salah";
    }
    return 0;

}
