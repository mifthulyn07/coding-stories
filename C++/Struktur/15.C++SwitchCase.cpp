1. fungsi break untuk mengakhiri pengeluaran true
#include <iostream>

using namespace std;

int main(){
       int hari;

     cout<<"Masukkan nomor hari (1 -> 7) : ";
     cin>>hari;

     switch(hari){
          case 1:
               cout<<"Hari ke-"<<hari<<" adalah SENIN"<<endl;
               cout<<"Meskipun SENIN Tetap Semangat Ya";
               break;
          case 2:
               cout<<"Hari ke-"<<hari<<" adalah SELASA"<<endl;
               cout<<"Semangat Untuk Hari SELASA";
               break;
          case 3:
               cout<<"Hari ke-"<<hari<<" adalah RABU"<<endl;
               cout<<"Udah Hari RABU, Tetep Produktif Ya";
               break;
          case 4:
               cout<<"Hari ke-"<<hari<<" adalah KAMIS"<<endl;
               cout<<"Orang Manis Terlahir Dihari KAMIS";
               break;
          case 5:
               cout<<"Hari ke-"<<hari<<" adalah JUMAT"<<endl;
               cout<<"Udah Hari JUMAT, Siap Mudik ?";
               break;
          case 6:
               cout<<"Hari ke-"<<hari<<" adalah SAPTU"<<endl;
               cout<<"Hari SAPTU Mau Liburan Kemana ?";
               break;
          case 7:
               cout<<"Hari ke-"<<hari<<" adalah MINGGU"<<endl;
               cout<<"Mari Tidur Seharian di Hari MINGGU";
               break;
          default:
               cout<<"Tidak terdapat nama hari ke-"<<hari<<endl;
               cout<<"Mungkin Kamu Kurang Piknik";
     }

     return 0;
}

