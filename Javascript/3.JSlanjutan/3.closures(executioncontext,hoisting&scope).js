// jika ingin tahu tahapan visualisasi js ada di link ini "https://pythontutor.com/render.html#mode=display"

// window =  global object
// this = window
function satu() {
  var nama = "sandhika";
  console.log(nama);
}

function dua() {
  console.log("terkena isi di global => " + nama);
  console.log(arguments);
}

// nama var = undefined
console.log("TIDAK ADA ISI => " + nama);
var nama = "erik";
satu();
dua("doddy", "indira"); //disimpan di arguments
console.log("ini sudah jelas terisi global => " + nama);

// closures merupakan kombinasi antara function dan lingkungan leksikal di dalam function tersebut
// clusures adalah sebuah funcin ketika memiliki akses ke parent scopenya, meskipun parent scopeya sudah selesai dieksekusi

// lexical scope
function init() {
  let nama = "baby"; //local variable
  function tampilNama() {
    //inner function (closure*)
    return nama; //akses ke parent variable
  }
  console.dir(tampilNama); //menampilkan isi dari objek
  console.log(tampilNama());
}

init();

//contoh penggunaan
function ucapkanSalam(waktu) {
  return function (nama) {
    console.log(`halo ${nama}, selamat ${waktu}, semoga harimu menyenangkan`);
  };
}

let selamatPagi = ucapkanSalam("pagi");
ucapkanSalam("siang")("miftah");
let selamatMalam = ucapkanSalam("malam");

// Bisa juga dipanggil langsung ucapkanSalam('Pagi')('Sandhika'); tanpa dimasukan ke variabel dulu
selamatPagi("sandhika");
selamatMalam("erik");

// contoh penggunaan
let add = (function () {
  let counter = 0;
  return function () {
    return ++counter;
  };
})(); //()() = function di dalam function, kurung terakhir untuk menjalankan function

console.log(add());
console.log(add());
console.log(add());
