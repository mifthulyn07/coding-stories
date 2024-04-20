console.log("===VAR");
v1 = 10;//otomatis menambahkan var
console.log("v1=10: " + v1);
var v2 = 10;
console.log("var v2=10: "+ v2);
for(var i=0; i<3; i++){
	console.log("var forloop i: " + i);//hasil: 0-2
}
console.log("var i: " + i);//hasil: 3, dibahasa programan lain ini error karna mengandung block scope



console.log("\n===LET");//prilaku let sama seperti bahasa pemrograman lain seperti c++
//jika memakai let, otomatis sudah mengandung block scope
let l1;
console.log("let l1: " + l1);
l1=10;
for(let j=0; j<3; j++){
	console.log("let j: " + j);//hasil: 1-2
}
console.log("let j: EROR");//hasil: error, sama seperti di bahasa pemrograman lain



console.log("\n===CONST");
//jika memakai const, otomatis sudah mengandung block scope
//memakai const ketika nilai variabel tidak akan pernah diubah lagi
// memakai const untuk meminimalisir perubahan state
const c1 = 10;
console.log("const c1=10: " + c1);
// const c1 = 20;
console.log("const c1=20: ERROR");


console.log("\n===FYI");
(function(){
	console.log("(()): Ini function tanpa dipanggil");
}());


console.log('\n\n\n');

let date = new Date();
console.log(date);

