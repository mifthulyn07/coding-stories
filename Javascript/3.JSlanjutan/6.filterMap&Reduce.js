angka = [1, 3, 5, -4, -1, 5, 9, 8, 3, 10];

const filterAngka = angka.filter((a) => a >= 3);
console.log(filterAngka);

const mapAngka = angka.map((a) => a * 2);
console.log(mapAngka);

// studi case: menjumlahkan semua elemen pada array, yang nilai awalnya 5
const reduceAngka = angka.reduce(
  (accumulator, currentValue) => accumulator + currentValue,
  5
);
console.log(reduceAngka);

// method chaining
const hasil = angka
  .filter((a) => a > 5)
  .map((a) => a * 3)
  .reduce((acc, cur) => acc + cur);

console.log(hasil);
