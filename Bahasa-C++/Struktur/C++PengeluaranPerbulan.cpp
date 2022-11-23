#include <iostream>

using namespace std;

int main()
{
    cout<<"========================"<<endl;
    cout<<"PENGELUARAN UANG BULANAN"<<endl;
    cout<<"========================"<<endl;
    float ub,um,ut,uj;
    ub=1000000;
    cout<<"uang bulanan "<<ub<<" perbulan"<<endl;
    cout<<"maka uang perminggu= "<<endl;
    um=ub/4;
    cout<<"uang bulanan:4 minggu --> Rp.1.000.000:4= "<<um<<endl;
    cout<<"--------------------"<<endl;
    cout<<"PENGELUARAN MINGGUAN"<<endl;
    cout<<"--------------------"<<endl;
    cout<<"uang mingguan "<<um<<endl;
    cout<<"kuliah seminggu 3 kali"<<endl;
    cout<<"tabungan untuk behel -->> Rp.100.000 "<<endl;
    cout<<"tabungan wajib perminggu --> Rp.100.000"<<endl;
    cout<<"uang transportasi pigi-pulang --> Rp.10.000"<<endl;
    int angka;
    cout<<"apakah anda ingin membeli paket minggu ini?"<<endl;
    cout<<"1.ya"<<endl;
    cout<<"2.tidak"<<endl;
    cout<<"masukkan pilihan anda : ";cin>>angka;
    if (angka==1)
    {
        cout<<"kondisi jika membeli paket"<<endl;
        cout<<"uang membeli paket --> Rp.70.000"<<endl;
        cout<<"hanya menabung untuk behel"<<endl;
        cout<<"tabungan untuk behel --> Rp.100.000 "<<endl;
        cout<<"uang transportasi pigi-pulang --> Rp.10.000"<<endl;
        ut=10000*3;
        cout<<"maka uang tranportasi Rp.10.000x3 hari= "<<ut<<endl;
        uj=um-(100000+ut+70000);
        cout<<"maka uang sisa = uang jajan seminggu --> "<<uj<<endl;
    }
    else if (angka==2)
        {
            cout<<"kondisi jika tidak membeli paket"<<endl;
            cout<<"menabung untuk behel & menabung wajib perminggu"<<endl;
            cout<<"tabungan untuk behel -->> Rp.100.000 "<<endl;
            cout<<"tabungan wajib perminggu --> Rp.100.000"<<endl;
            cout<<"uang transportasi pigi-pulang --> Rp.10.000"<<endl;
            ut=10000*3;
            cout<<"maka uang tranportasi Rp.10.000x3 minggu= "<<ut<<endl;
            uj=um-(200000+ut);
            cout<<"maka uang sisa = uang jajan seminggu --> "<<uj<<endl;
        }
    else
    cout<<"pilihan yang anda masukkan salah"<<endl;

    return 0;

}
