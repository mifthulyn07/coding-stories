// asyncronous function = sebuah function yang bekerja secara async (melalui event loop), yang menghasilkan (implisit) promise sebagai return valunya-nya , tapi cara penulisan codenya menggunakan penulisan yang syncronous(standard)
// sebuah async function dapat memiliki keyword await di dalamnya untuk memberhentikan sementara eksekusi fungsinya sambil menunggu promise-nya selesai

const coba = new Promise((resolve, reject) => {
  const waktu = 8000;
  if (waktu < 5000) {
    setTimeout(() => {
      resolve("selesai");
    }, waktu);
  } else {
    reject("kelamaan");
  }
});

// console.log(coba); //pending karena mencoba cara syncronous
//memakai then untuk menjalankan fungsi sebagai asyncronous
// untuk penggunaan error handling ada namanya then and catch
coba.then(() => console.log(coba)).catch(() => console.log(coba));

// =====================================================================================

// tapi bisa juga kok jalan tampa adanya then, ya pakai async await
// error handling untuk async await menggunakan try and catch()
function cobaPromise() {
  return new Promise((resolve, reject) => {
    const waktu = 8000;
    if (waktu < 5000) {
      setTimeout(() => {
        resolve("selesai");
      }, waktu);
    } else {
      reject("kelamaan");
    }
  });
}

async function cobaAsync() {
  try {
    const coba2 = await cobaPromise();
    console.log(coba2);
  } catch (e) {
    console.log(e);
  }
}

cobaAsync();
