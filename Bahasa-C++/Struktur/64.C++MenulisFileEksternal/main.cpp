#include <iostream>
#include <fstream>//stream ke file internal
//ada 3 anak(ofstream = output file ,ifstream = input file,fstream = tampilan dari ofstream & ifstream)
using namespace std;
int main()
{
    ofstream myfile;
    cout<<"apa console";//menampilkan di console

    //ios::out = default, operasi output, default;
    //ios::app = menuliskan pada akhir baris; app = append
    //ios::trunc = default, membuat file jika tidak ada, dan kalau ada akan di hapus & dibuat baru

    myfile.open("data1.txt", ios::out);//membuat isi
    myfile <<"hai aku mifta";//menampilkan di data1
    myfile.close();

    myfile.open("data2.txt", ios::trunc);//membuat isi,tapi akan terhapus nntinya
    myfile <<"plalala";//menampilkan di data2
    myfile.close();

    myfile.open("data3.txt", ios::app);//selalu nambah jika isi di ubah
    myfile <<"biarlah berlalu";//menampilkan di data3
    myfile.close();
    return 0;
}
//untuk melihat hasilnya:
//run --> save project --> cari di explorer
