//synchronus callback = dieksekusi sesuai dengan urutan
// function halo(nama) {
//   alert(`halo ${nama}`);
// }
function tampilkanPesan(callback) {
  const name = prompt("Masukkan nama: ");
  callback(name);
}
tampilkanPesan((nama) => alert(`halo ${nama}`));

const mhs = [
  {
    name: "Miftahul Ulyana Hutabarat",
    nim: "0702192031",
    email: "mifthulyn07@gmail.com",
    jurusan: "sistem informasi",
    idDosenWali: 1,
  },
  {
    name: "Nurli Masito Lubis",
    nim: "0702192030",
    email: "nurli@gmail.com",
    jurusan: "Ilmu Komputer",
    idDosenWali: 2,
  },
  {
    name: "Putriyana Hutabarat",
    nim: "0702192078",
    email: "putriyana@gmail.com",
    jurusan: "Kesehatan Masyarakat",
    idDosenWali: 3,
  },
];

console.log("mulai");
mhs.forEach((m) => {
  for (let i = 0; i < 1000; i++) {
    let date = new Date();
    console.log(m.name);
  }
});
console.log("selesai");

// asynchronous js: cancelIdleCallback, promise, ajax, async & await
// callback (pernyataan 1) = function yang dikirimkan sebagai parameter pada function yang lain
// callback (pernyataan 2) = function yang dieksekusi setelah fungsi lain selesai di jalankan
