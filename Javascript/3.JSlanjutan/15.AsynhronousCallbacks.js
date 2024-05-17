// ALERT!! BUKA LEWAT LOCALHOST SERVER

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
  }
  console.log(m.name);
});
// menampilkan selesai setelah looping selesai
console.log("selesai");

// asynchronous js: cancelIdleCallback, promise, ajax, async & await
// callback (pernyataan 1) = function yang dikirimkan sebagai parameter pada function yang lain
// callback (pernyataan 2) = function yang dieksekusi setelah fungsi lain selesai di jalankan

// asyncronous callback
// =====using vanilla javasript
// function getDataMahasiswa(url, success, error) {
//   let xhr = new XMLHttpRequest();
//   // console.log(xhr);

//   xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4) {
//       if (xhr.status === 200) {
//         success(xhr.response);
//       } else if (xhr.status === 404) {
//         error();
//       }
//     }
//   };

//   xhr.open("get", url);
//   xhr.send();
// }

// console.log("mulai");
// getDataMahasiswa(
//   "15.AsynhronousCallbacks.json",
//   (results) => {
//     console.log(JSON.parse(results));
//   },
//   (results) => {
//     console.log(results);
//   }
// );
// console.log("selesai"); //ini di eksekusi luan

// ===using mifajquery
console.log("mulai");
$.ajax({
  url: "15.AsynhronousCallbacks.json",
  success: (results) => {
    results.forEach((m) => console.log(m.name));
  },
  error: (e) => {
    console.log(e.responseText);
  },
});
console.log("selesai");
