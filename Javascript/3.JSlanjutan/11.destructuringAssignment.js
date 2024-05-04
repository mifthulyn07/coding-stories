// DESTRUCTURING VARIABLES

// 1. DESTRUCTURING ARRAY
const perkenalan = ["halo", "nama", "saya", "miftah"];
// const [salam, satu, dua, nama] = perkenalan;
const [salam, , , nama] = perkenalan; //skipping items
console.log("salam");

// swap items = menukar isi dari variable
let a = 1;
let b = 2;
[a, b] = [b, a];
console.log("a = " + a);

// return value pada function
function coba() {
  return [1, 2];
}
const [c, d] = coba();
console.log("c = " + c);

// rest parameter = values menampung semua value yang tidak di beri parameter
const [e, ...values] = [1, 2, 3, 4, 5, 6];
console.log(values);

// 2. DESTRUCTURING OBJECTS
const mhs1 = {
  rumah: "kebunlada",
  lahir: "medan",
};
const { rumah: r, lahir, namapendek: p = "yeyen" } = mhs1;
// const {rumah, ...values} = mhs;
console.log(p);

// memepersingkat
({ email, umur } = {
  email: "mifthulyn07",
  umur: 22,
});
console.log(email);

// mengambil field pada object, setelah dikirim sebagai parameter untuk function
function getRumahMhs1(mhs) {
  return mhs.rumah;
}
console.log(getRumahMhs1(mhs1));
