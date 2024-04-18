function satu() {
  var nama = "sandhika";
  console.log(nama);
}

function dua() {
  console.log(nama);
  console.log(arguments);
}

console.log(nama);
var nama = "erik";
satu();
dua("doddy", "indira"); //disimpan di arguments
console.log(nama);

// lexical scope
function init() {
  let nama = "baby"; //local variable
  function tampilNama() {
    //inner function (closure*)
    console.log(nama); //akses ke parent variable
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
let selamatSiang = ucapkanSalam("siang");
let selamatMalam = ucapkanSalam("malam");

selamatPagi("sandhika");
selamatSiang("miftah");
selamatMalam("erik");

// contoh penggunaan
let add = (function () {
  let counter = 0;
  return function () {
    return ++counter;
  };
})(); //()() = function di dalam function

console.log(add());
console.log(add());
console.log(add());
