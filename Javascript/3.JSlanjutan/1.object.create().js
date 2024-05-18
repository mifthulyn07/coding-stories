// ini merupakan turunan dari object declaration tapi di better kan dengan object.create()
const MethodMahasiswa = {
  //objek
  makan: function (porsi) {
    //method
    this.energi += porsi;
    console.log(`halo ${this.nama}, Selamat makan!`);
  },

  main: function (jam) {
    //method
    this.energi -= jam;
    console.log(`halo ${this.nama}, Selamat main!`);
  },

  tidur: function (jam) {
    //method
    this.energi += jam * 2;
    console.log(`halo ${this.nama}, Selamat tidur!`);
  },
};
function Mahasiswa(nama, energi) {
  // === !!dari pada harus gini!!
  // let mahasiswa = {};
  // mahasiswa.makan = MethodMahasiswa.makan;
  // mahasiswa.main = MethodMahasiswa.main;
  // mahasiswa.tidur = MethodMahasiswa.tidur;

  // === !!lebih baik daftarin saja di object.create()!!
  // jika di dalam OOP ini sama dengan inheritence(pewarisan)
  let mahasiswa = Object.create(MethodMahasiswa);
  mahasiswa.nama = nama; //property
  mahasiswa.energi = energi; //property

  return mahasiswa;
}

let sandhika = Mahasiswa("Sandika", 10);
let miftah = Mahasiswa("Miftah", 20);
