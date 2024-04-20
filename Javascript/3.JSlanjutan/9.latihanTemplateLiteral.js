const mhs = {
  nama: "Miftahul Ulyana Hutabarat",
  umur: 21,
  nim: "0702192031",
  email: "mifthulyn07@gmail.com",
};

const el = `
<div class='mhs'>
<h2>${mhs.nama}</h2>
<span>${mhs.nim}</span>
</div>`;

document.body.innerHTML = el;

// contoh ke 2 looping=======================
const mhs2 = [
  {
    nama: "Miftahul Ulyana Hutabarat",
    email: "mifthulyn07@gmail.com",
  },
  {
    nama: "Azkiya Azzahra",
    email: "azkiya@gmail.com",
  },
  {
    nama: "putri",
    email: "putri@gmail.com",
  },
];

const el2 = `
<div class="mhs">
${mhs2
  .map(
    (m) =>
      `<ul> 
<li> ${m.nama} </li>
<li> ${m.email} </li>
</ul>`
  )
  .join("")}
</div>`;

document.body.innerHTML = el2;
