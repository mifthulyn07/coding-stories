console.log("syntax object: var objek = {}");
console.log("===MEMBUAT OBJEK");
console.log("1. OBJECT LITERAL: membuat variable objek");
//coba 1
console.log("===coba objek literal-1===");
var mhs1 = {
  nama: "Miftahul Ulyana Hutabarat", //this is property
  tgllahir: function () {
    //method: properti yang didalam ada fungsi
    tanggal = 21;
    bulan = "juli";
    tahun = 2001;
    return tanggal + " " + bulan + " " + tahun;
  },
  alamat: {
    //object is inside object
    provinsi: "Sumatera Utara",
    kota: "Medan",
    jalan: "Martubung",
  }, //mengemblikan object
};
console.log("menampilkan objek mhs1: ");
console.log(mhs1);
console.log("menampilkan nama mhs1: " + mhs1.nama);
console.log("menampilkan tgllahir mhs1(fungsi): " + mhs1.tgllahir());
console.log("menampilkan alamat mhs1(objek): " + mhs1.alamat.jalan);
// coba 2
console.log("===coba objek literal-2===");
var mhs2 = {};
mhs2.nama = "Husnida Putriyana"; //memasukkan property ke objek
mhs2.alamat = "jl.pancing 5";
mhs2.jurusan = "Sistem Informasi";
mhs2.lah = function () {
  //method
  console.log("hai");
};
console.log("menampilkan objek mhs2: ");
console.log(mhs2);

console.log(
  "\n2. FUNCTION DECLATARATION: memasukkan variable objek di dalam fungsi dan mereturn"
);
function functionDeklaration(nama, nim, email, jurusan) {
  var mhs = {}; //this is object
  mhs.nama = nama; //menaruh property ke objek yg berada dalam fungsi
  mhs.nim = nim;
  mhs.email = email;
  mhs.jurusan = jurusan;
  return mhs;
}
console.log(
  functionDeklaration(
    "miftahul",
    "0702192031",
    "mifthulyn07@gmail.com",
    "sistem informasi"
  )
);

console.log("\n3. CONSTRUCTOR FUNCTION: menggunakan keyword new");
//coba1
function constructorFunction(nama, nim, email, jurusan) {
  // var this = {};
  this.nama = nama; //menaruh property objek ke dalam fungsi
  this.nim = nim;
  this.email = email;
  this.jurusan = jurusan;
  this.namaDanNim = () => {
    //ini sama dengan this.namaDanNim = function(){}
    return nama + " & " + nim;
  };
  this.gantiNama = (ganti) => {
    return (nama = ganti);
  };
  // return this;
}
var mahasiswa1 = new constructorFunction(
  "miftahul",
  "0702192031",
  "mifthulyn07@gmail.com",
  "sistem informasi"
);
console.log("menampilkan mahasiswa1: ");
console.log(mahasiswa1);
console.log("memanggil fungsi namaDanNim: " + mahasiswa1.namaDanNim());
console.log("mengganti mahasiswa1: " + mahasiswa1.gantiNama("yeyen"));

console.log("\n\n\n===MEMAHAMI THIS");
console.log(
  "this biasanya dipakai di konstruktor, dimana ada this disitu ada keyword new"
);
console.log("window == this: " + (window == this));
var a = 10;
console.log("window.a: " + window.a);
console.log("this.a: " + this.a);
console.log("didalam function declaration, this itu berisi window: ");
function apalah() {
  console.log(this);
}
apalah(); //berisi window
console.log("didalam function construktor, this itu mengembalikan objek: ");
new apalah(); //mengembalikan objek yang baru dibuat
// 4. object.create();
