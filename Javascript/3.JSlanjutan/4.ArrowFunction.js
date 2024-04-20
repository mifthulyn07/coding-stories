// function Deklaration
function tampilNama(nama) {
  return console.log(`halo ${nama}`);
}
tampilNama("Miftah");

// function Expression
let tampilPesan = function (pesan) {
  return console.log(pesan);
};
tampilPesan("Halo");

// arrow function => meringkas penulisan function
let namaBinatang = (binatang) => {
  return console.log(binatang);
};
namaBinatang("ular");
// versi lebih singkat lagi
//jika langsung menggunakan return maka tidak perlu menampilkan return, bahkan tidak perlu ada tanda kurung({})
let tampilWaktu = (waktu) => console.log(`selamat ${waktu}`);
tampilWaktu("Siang");

// arrow function yang menggunakan function seperti map()
let mahasiswa = [
  "miftahul ulyana hutabarat",
  "azkiya azahra",
  "putri ramadhani",
];
let jumlahHuruf = mahasiswa.map((nama) => nama.length);
console.log(jumlahHuruf); // return sebagai array

let jumblahHuruf = mahasiswa.map((nama) => ({ nama: nama.length }));
console.log(jumblahHuruf); // return sebagai objek
console.table(jumblahHuruf); // return sebagai objek tapi bentuk table (lebih rapih)

// constructor function
//constructor tidak bisa diubah menjadi arrow function
const Mahasiswa = function () {
  this.nama = "Miftahul Ulyana Hutabarat"; //property
  this.umur = 23; //property
  // method bisa di arrow function kan
  this.sayHello = () =>
    console.log(`halo, saya ${this.nama}, dan saya ${this.umur} tahun`);

  setInterval(() => console.log(this.umur++), 10000);
};
let miftah = new Mahasiswa();
