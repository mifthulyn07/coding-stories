// ===JALANKAN CMD: node index.js
const nama = (nama) => {
     console.log(`Halo, nama saya ${nama}`);
}
nama('Miftahul Ulyana Hutabarat');
// ===END 

// Process.env = menyimpan nilai/info mengenai environment selama prosess berlangsung 
// property Process.env: 
// 1. Process.env.PWD = informasi lokasi dimana proses dijalankan 
// 2. Process.env.USER = informasi nama user di komputer

// ===JALANKAN CMD: node index.js Miftahul Ulyana 

// melihat index yang ada di process.argv
const completeLocation = process.argv[0];
const location = process.argv[1];
const firstName = process.argv[2];
const lastName = process.argv[3];
console.log(`Hello ${firstName} ${lastName},`);
console.log(`Node kamu berada di ${completeLocation},`);
console.log(`dan file kamu yang sekarang ada di ${location}`);

// melihat informasi CPU
const cpuInformation = process.memoryUsage();
console.log(cpuInformation);

// console.log(process.env);
console.log(process.env.USERNAME);
// === END 

const moment = require('moment');
const date = moment().format('MMM Do YY');
console.log(date);