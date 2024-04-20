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
  // jika di dalam OOP ini sama dengan inheritence(pewarisan)
  let mahasiswa = Object.create(MethodMahasiswa);
  mahasiswa.nama = nama; //property
  mahasiswa.energi = energi; //property

  return mahasiswa;
}

let sandhika = Mahasiswa("Sandika", 10);
let miftah = Mahasiswa("Miftah", 20);
