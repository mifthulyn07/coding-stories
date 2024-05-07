// For of = creates a loop iterating over iterable abject
// ex: string, array, arguments/nodelist, typedarray, map, set, user-defined iterables
const arrayName = ["miftah", "sadra", "indira"];
const stringName = "Miftahul";
const nodeListName = document.querySelectorAll(".name");

// for loop
// for (let i = 0; i < arrayName.length; i++) {
//   console.log(arrayName[i]);
// }

// foreach
// arrayName.forEach((m, i) => console.log(`${m} adalah mahasiswa ke-${i + 1}`));

// for of = tidak punya indeks kecuali pakai entries()
for (const [i, m] of arrayName.entries()) {
  console.log(`${m} adalah mahasiswa ke-${i + 1}`);
}
for (const n of stringName) {
  console.log(n);
}
for (n of nodeListName) {
  console.log(n.innerHTML);
}
// menjumlahkan arguments menggunakan for of
function jumlahAngka() {
  let jumlah = 0;
  for (a of arguments) {
    jumlah += a;
  }
  return jumlah;
}
console.log(jumlahAngka(1, 2, 3, 4, 5));

// for in = creates a loop only iterating over enumerable (object property)
const objectMhs = {
  name: "Miftahul Ulyana Hutabarat",
  age: 21,
  email: "mifthulyn07@gmail.com",
};

for (m in objectMhs) {
  console.log(objectMhs[m]);
}
