// rest parameter = merepresentasikan argumen pada function dengan jumlah yang tida terbatas menjadi sebuah array
function myFunc(a, b, ...myArgs) {
  //rest parameter harus berada di akhir parameter
  return myArgs;
}
console.log(myFunc(1, 2, 3, 4, 5, 6, 7));

// argumen setiap parameter yang di beri, terdapat argumen di dalamnya,
function myArgs() {
  // return arguments;

  // argument itu bukan array, ini jika ingin membuat arguments menjadi array
  // return Array.from(arguments);
  return [...arguments];
}
console.log(myArgs(1, 2, 3, 4, 5));

function jumlahkan(...angka) {
  // cara 1 untuk menjumlahkan
  // let total = 0;
  // for (const a of angka) {
  //   total += a;
  // }
  // return total;

  // cara ke 2 untuk menjumlahkan
  return angka.reduce((a, b) => a + b);
}
console.log(jumlahkan(1, 2, 3, 4, 5));

// array destructuring
const kelompok1 = ["miftah", "sandra", "pathoni", "indira", "dedy"];
const [ketua, wakil, ...anggota] = kelompok1;
console.log(ketua);
