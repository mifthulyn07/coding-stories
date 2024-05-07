// spread operator = memecah (expand/unpack) iterables menjadi single element
// iterable object ex: string, array, arguments/nodelist, typedarray, map, set, user-defined iterables

const arrayMhs = ["miftah", "sandra", "indira"];
const arrayLecturer = ["dedi", "ikhsan", "fathoni"];
// console.log(...arrayName[0]);
// console.log(...arrayName);

// menggabungkan 2 array, dan lebih flexsible dengan menambahkan langsung ke dalam array
// hasilnya sama dengan arrayMhs.concat(arrayLecturer);
const orang = [...arrayMhs, "aji", ...arrayLecturer];
console.log(orang);

// meng copy secara langsung
mhs1 = [...arrayMhs];
console.log(mhs1);

const liMhs = document.querySelectorAll("li");
console.log(liMhs[0].textContent);

// mengubah nodelist(mengambil list <li></li> di dalam html) menjadi array
const mhs = [...liMhs].map((m) => m.textContent);
console.log(mhs);

const originName = document.querySelector(".originName");
const huruf = [...originName.textContent]
  .map((h) => `<span>${h}</span>`)
  .join("");
console.log(huruf);
originName.innerHTML = huruf;
