#include <iostream>
using namespace std;
int main()
{
    cout<<"===="<<endl;
    cout<<"HALO"<<endl;
    cout<<"===="<<endl;
    string nama,kota;
	int lahir,usia;
    cout<<"hallo! siapa namamu? ";cin>>nama;
    cout<<endl;
    cout<<"dikota apa kamu sekarang? ";cin>>kota;
    cout<<endl;
	cout<<"tahun berapa kamu lahir? ";cin>>lahir;
	usia=2019-lahir;
	cout<<"halo "<<nama<<" anda tinggal di "<<kota<<" usia kamu "<<usia;
	cout<<endl;
    cout<<"senang berteman denganmu!"<<endl;
    cout<<endl;
    cout<<"=================="<<endl;
    cout<<"LUAS BUJUR SANGKAR"<<endl;
    cout<<"=================="<<endl;
    int sisi,luasb;
    cout<<"masukkan panjang sisi: ";cin>>sisi;
    cout<<endl;
    luasb=sisi*sisi;
    cout<<"luas bujur sangkar adalah: "<<luasb<<endl;
    cout<<endl;
    cout<<"============="<<endl;
    cout<<"LUAS SEGITIGA"<<endl;
    cout<<"============="<<endl;
    int alass,tinggis;
	float luass;
    cout<<"masukkan panjang alas: ";cin>>alass;
    cout<<endl;
    cout<<"masukkan panjang tinggi: ";cin>>tinggis;
    cout<<endl;
    luass=alass*tinggis/2;
    cout<<"luas segitiga adalah: "<<luass<<endl;
    cout<<endl;
    cout<<"=============="<<endl;
    cout<<"LUAS TRAPESIUM"<<endl;
    cout<<"=============="<<endl;
    int tinggit,atas,bawah;
	float luast;
    cout<<"masukkan panjang atas: ";cin>>atas;
    cout<<endl;
    cout<<"masukkan panjang bawah: ";cin>>bawah;
    cout<<endl;
    cout<<"masukkan panjang tinggi: ";cin>>tinggit;
    cout<<endl;
    luast=(atas+bawah)*tinggit/2;
    cout<<"luas trapesium adalah: "<<luast<<endl;
    cout<<endl;
    cout<<"=================="<<endl;
    cout<<"CELCIUS-FAHRENHEIT"<<endl;
    cout<<"=================="<<endl;
    float celcius1,fahrenheit1;
    cout<<"masukkan celcius: ";cin>>celcius1;
    cout<<endl;
    fahrenheit1=(9*celcius1/5)+32;
    cout<<"hasil celcius ke fahrenheit adalah: "<<fahrenheit1<<endl;
    cout<<endl;
    cout<<"=================="<<endl;
    cout<<"CELCIUS-FAHRENHEIT"<<endl;
    cout<<"=================="<<endl;
    float celcius2,fahrenheit2;
    cout<<"masukkan fahrenheit: ";cin>>fahrenheit2;
    cout<<endl;
    celcius2=5*(fahrenheit2-32)/9;
    cout<<"hasil fahrenheit ke celcius adalah: "<<celcius2<<endl;
    cout<<endl;
    cout<<"================"<<endl;
    cout<<"MENGHITUNG JARAK"<<endl;
    cout<<"================"<<endl;
    float v, t, s;
    cout<<"masukkan kecepatan dalam km: ";cin>>v;
    cout<<endl;
    cout<<"masukkan waktu dalam jam: ";cin>>t;
    cout<<endl;
    s=v*t;
    cout<<"jaraknya adalah: "<<s<<endl;
    cout<<endl;
    cout<<"================"<<endl;
    cout<<"POTONGAN 5%"<<endl;
    cout<<"================"<<endl;
    int harga, diskon;
    cout<<"masukkan harga: ";cin>>harga;
    cout<<endl;
    diskon=harga-(harga*5/100);
    cout<<"harga setelah diskon: "<<diskon<<endl;
    cout<<endl;
    cout<<"============================"<<endl;
    cout<<"MENGHITUNG SISA UANG DI BANK"<<endl;
    cout<<"============================"<<endl;
    int uang, total;
	cout<<"masukkan jumlah uang: ";cin>>uang;
	total = uang - (uang * 5/100);
	cout<<"jumlah uang di bank selama 1 tahun: "<<total;
	cout<<endl;
    cout<<"==============================================="<<endl;
    cout<<"MENGHITUNG GAJI PNS TUNJANGAN ANAK DAN PASANGAN"<<endl;
    cout<<"==============================================="<<endl;
    int gaji_pokok, tunjangan_anak, tunjangan_pasangan, gaji_bersih, jlh=0, anak, i;
	cout<<"masukkan gaji pokok: ";cin>>gaji_pokok;
	cout<<"masukkan jumlah anak: ";cin>>anak;
	tunjangan_pasangan=gaji_pokok*5/100;
	tunjangan_anak=gaji_pokok*2/100;
	for(i=1; i<=anak; i++){
        jlh=jlh+tunjangan_anak;
	}
	gaji_bersih = gaji_pokok + jlh + tunjangan_pasangan;
	cout<<"jumlah gaji bersih PNS: "<<gaji_bersih;
return 0;
}