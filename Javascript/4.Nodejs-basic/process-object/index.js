// ===JALANKAN CMD: SET NODE_ENV=development && node ./process-object/index.js Miftah
const initialMemoryUsage = process.memoryUsage().heapUsed;
const yourName = process.argv[2];
const environtment = process.env.NODE_ENV;

for(let i=0; i<=10; i++){
     console.log('looping ke-' + i);
}

const currentMemoryUsage = process.memoryUsage().heapUsed;

console.log(`hai, ${yourName}`);
console.log(`mode environtment: ${environtment}`);
console.log(`penggunaan memori dari ${initialMemoryUsage} naik ke ${currentMemoryUsage}`);
// ===END 
