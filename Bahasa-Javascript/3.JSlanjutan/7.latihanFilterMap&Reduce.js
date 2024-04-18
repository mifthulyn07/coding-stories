// ambil semua elemen vidio
const vidios = Array.from(document.querySelectorAll("[data-duration]"));

const filterVid = vidios
  // pilih hanya 'javascript lanjutan'
  .filter((vidio) => vidio.textContent.includes("JAVASCRIPT LANJUTAN"))
  // ambil durasi masing masing vidio
  .map((item) => item.dataset.duration)
  // ubah durasi menjadi Int, ubah menit menjadi detik
  .map((waktu) => {
    const parts = waktu.split(":").map((part) => parseInt(part));
    return parts[0] * 60 + parts[1];
  })
  // jumlahkan semua ke detik
  .reduce((total, detik) => total + detik);

// ubah formatnya jadi jam menit detik
const jam = Math.floor(filterVid / 3600);
const menit = Math.floor((filterVid % 3600) / 60);
const detik = (filterVid % 3600) % 60;
// console.log(`${jam}.${menit}.${detik}`);

// simpan dom
const pDurasi = document.querySelector(".total-durasi");
pDurasi.textContent = `${jam}.${menit}.${detik}`;

const jmlVidio = vidios.filter((vidio) =>
  vidio.textContent.includes("JAVASCRIPT LANJUTAN")
).length;
const pJmlVidio = document.querySelector(".jumlah-video");
pJmlVidio.textContent = jmlVidio;
