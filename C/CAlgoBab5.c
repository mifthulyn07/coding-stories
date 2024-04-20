#include <stdio.h>
#include <stdlib.h>
int main()
{
    printf("======");
    printf("\nSAPAAN");
    printf("\n======");
    char nama[30],kota[30];
    int lahir,usia;
    printf("\nhallo! siapa namamu? ");
    gets(nama);
    printf("dikota apa kamu sekarang? ");
    gets(kota);
    printf("tahun berapa anda lahir? ");
    scanf ("%i",&lahir);
    usia=2019-lahir;
    printf("\nhalo %s,anda tinggal di kota %s, usia anda %i tahun",nama,kota,usia);
    printf("\nsenang bertemu denganmu!!");

    printf("\n\n==================");
    printf("\nLUAS BUJUR SANGKAR");
    printf("\n==================");
    int sisi,luasb;
    printf("\nmasukkan panjang sisi: ");
    scanf("%i",&sisi);
    luasb=sisi*sisi;
    printf("luas bujur sangkar adalah: %i",luasb);

    printf("\n\n=============");
    printf("\nLUAS SEGITIGA");
    printf("\n=============");
    int alass,tinggis;
    float luass;
    printf("\nmasukkan panjang alas: ");
    scanf("%i",&alass);
    printf("masukkan panjang tinggi: ");
    scanf("%i",&tinggis);
    luass=alass*tinggis/2;
    printf("luas segitiga adalah: %f",luass);

    printf("\n\n==============");
    printf("\nLUAS TRAPESIUM");
    printf("\n==============");
    int tinggit,atas,bawah;
    float luast;
    printf("\nmasukkan panjang atas: ");
    scanf("%i",&atas);
    printf("masukkan panjang bawah: ");
    scanf("%i",&bawah);
    printf("masukkan panjang tinggi: ");
    scanf("%i",&tinggit);
    luast=(atas+bawah)*tinggit/2;
    printf("luas trapesium adalah: %f",luast);

    printf("\n\n==================");
    printf("\nCELCIUS-FAHRENHEIT");
    printf("\n==================");
    float celcius1,fahrenheit1;
    printf ("\nmasukkan celcius: ");
    scanf("%f",&celcius1);
    fahrenheit1=(9*celcius1/5)+32;
    printf("hasil celcius ke fahrenheit adalah: %f",fahrenheit1);

    printf("\n\n==================");
    printf("\nCELCIUS-FAHRENHEIT");
    printf("\n==================");
    float celcius2,fahrenheit2;
    printf("masukkan fahrenheit: ");
    scanf("%f",&fahrenheit2);
    celcius2=5*(fahrenheit2-32)/9;
    printf("hasil fahrenheit ke celcius adalah: %f",celcius2);

    printf("\n\n================");
    printf("\nMENGHITUNG JARAK");
    printf("\n================");
    float v, t, s;
    printf("\nmasukkan kecepatan dalam km: ");
    scanf("%f",&v);
    printf("masukkan waktu dalam jam: ");
    scanf("%f",&t);
    s=v*t;
    printf("jaraknya adalah: %f",s);

    printf("\n\n===========");
    printf("\nPOTONGAN 5%");
    printf("\n===========");
    int harga, diskon;
    printf("\nmasukkan harga: ");
    scanf("%i",&harga);
    diskon=harga-(harga*5/100);
    printf("harga setelah diskon: %i",diskon);

return 0;
}
