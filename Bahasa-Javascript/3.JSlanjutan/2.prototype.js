function Mahasiswa(nama, energi) {
  //objek contructor yang dalam pemanggilannya di panggil new
  // let this = Object.create(Mahasiswa.prototype); <= kejadian di belakang layar dari constructor
  this.nama = nama; //property
  this.status = "Mahasiswa";
  this.energi = energi; //property

  // return this; <= kejadian di belakang layar
}

Mahasiswa.prototype.makan = function (porsi) {
  //masukkan ke dalam method prototype
  this.energi += porsi;
  console.log(`halo ${this.nama}, Selamat makan!`);
};

Mahasiswa.prototype.main = function (jam) {
  //masukkan ke dalam method prototype
  this.energi -= jam;
  console.log(`halo ${this.nama}, Selamat main!`);
};

Mahasiswa.prototype.tidur = function (jam) {
  //masukkan ke dalam method prototype
  this.energi += jam * 2;
  console.log(`halo ${this.nama}, Selamat tidur!`);
};

let sandhika = new Mahasiswa("Sandika", 10);
let miftah = new Mahasiswa("Miftah", 20);

// ==============================VERSI CLASS
class Murid {
  constructor(nama, energi) {
    this.nama = nama;
    this.status = "Murid";
    this.energi = energi;
  }

  makan(porsi) {
    //masukkan ke dalam method prototype
    this.energi += porsi;
    console.log(`halo ${this.nama}, Selamat makan!`);
  }

  main(jam) {
    //masukkan ke dalam method prototype
    this.energi -= jam;
    console.log(`halo ${this.nama}, Selamat main!`);
  }

  tidur(jam) {
    //masukkan ke dalam method prototype
    this.energi += jam * 2;
    console.log(`halo ${this.nama}, Selamat tidur!`);
  }
}

let putri = new Murid("Putri", 10);
let Nida = new Murid("Nida", 20);

// ============================KASUS YANG SAMA
let angka = [1, 2, 3];

// kejadian di belakang layar
// let angka = new Array();
// function Array() {
//   let this = Object.create(Array.prototype);
// }

// dari kejadian di belakang layar kita bisa menyatukannya dengan fungsi yang lain
console.log(angka.reverse());
console.log(angka.sort());
