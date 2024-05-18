// buka di server localhost!!

// dari pada pakai vanila js untuk menggambil json lebih baik menggunakan fetch, namun harus ada promise
fetch("http://www.omdbapi.com/?apikey=dca61bcc&s=avengers")
  .then((response) => response.json())
  .then((response) => console.log(response));

// promise = object yang merepresentasikan keberhasilan/kegagalan sebuah event yang asychronous di masa yang akan datang
// janji (terpenuhi/ingkar)
// states (fullfilled=terpenuhi, rejected=diingkari, pending=waktu tunggunya)
// callback (resolve=terpenuhi, reject=diingkari, finally=waktu tunggu selesai)
// aksi (then = terpenuhi, catch=tidak terpenuhi);

// ======contoh 1 = cara membuat promise yang paling sederhana
let ditepati1 = true;
const janji1 = new Promise((resolve, reject) => {
  if (ditepati1) {
    resolve("janji telah ditepati!");
  } else {
    reject("ingkar janji");
  }
});
janji1
  .then((response) => console.log("OK! Contoh 1:" + response))
  .catch((response) => console.log("NOT OK! Contoh 1:" + response));

// =====contoh 2
let ditepati2 = true;
const janji2 = new Promise((resolve, reject) => {
  if (ditepati2) {
    setTimeout(() => {
      resolve("Ditepati setelah beberapa waktu!");
    }, 2000);
  } else {
    setTimeout(() => {
      reject("Tidak ditepati setelah beberapa waktu!");
    }, 2000);
  }
});
console.log("mulai");
janji2
  .finally(() => console.log("selesai menunggu!")) //dijalankan saat selesai menunggu
  .then((response) => console.log("OK! Contoh 2:" + response))
  .catch((response) => console.log("NOT OK! Contoh 2:" + response));
console.log("selesai");

// promise.all() = jika ingin mengkonek menggnkan 2 api yang berbeda

const film = new Promise((resolve) => {
  setTimeout(() => {
    resolve([
      {
        judul: "Avengers",
        sutradara: "Miftahul Ulyana H",
        pemeran: "Putri Ramadhani",
      },
    ]);
  }, 1000);
});

const cuaca = new Promise((resolve) => {
  setTimeout(() => {
    resolve([
      {
        kota: "Medan",
        temp: 30,
        kondisi: "Cerah Berawan",
      },
    ]);
  }, 500);
});

Promise.all([film, cuaca]).then((response) => {
  const [film, cuaca] = response;
  console.log(film);
  console.log(cuaca);
});
