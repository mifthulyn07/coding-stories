//memasukkan fungsi didalam fungsi
console.log("\n===CONTOH FUNCTION");
function tambah(a,b){//bentuk function  description
	return a + b;
}
function kali(c,d){
	return c * d;
}
var hasil = kali(tambah(2,2), tambah(2,2));
console.log("hasil fungsi didalam fungsi: " + hasil);

//arguments akan di tampung array
console.log("\n===ARGUMENTS");
function example1(){
	return arguments;
}
var coba1 = example1(5, 10.5, false, "hi");//nilai akan diabaikan oleh function
console.log("hasil menampilkan arguments: ");
console.log(coba1);  
//latihan arguments pertambahan digit
var hasil = 0;
function example2(){
	for(var i=0; i<arguments.length; i++){
		hasil += arguments[i];//0=0+1 --> 1=1+1 --> dst
	}
	return hasil;
}
var coba2 = example2(1,2,3,4);
console.log("hasil pertambahan digit dengan arguments: " + coba2);

//scope: lingkup variable 1.function scope, 2.block scope, 3.Global scope
//block scope: javascript tidak menganut block scope
console.log("\n===SCOPE");
var z=1, y=8;
function example3(){
	var y=2;
	var x=3;
	o = 4;//ini akan menjadi global variable karna tidak di dekralasi
	console.log("menampilkan y(fuction scope): " + y);//bisa diakses karna di dalam scope
	console.log("menampilkan y(global scope memakai window): " + window.y);//mengakses variable global
}
example3();
//console.log(x);//tidak bisa di akses karna function scope
console.log("menampilkan z(global scope): " + z);//bisa diakses karna global scope
console.log("menampilkan o(function scope): " + o);//bisa di akses di function scope karna tidak memuat decralasi(var)


//rekursif: sebuah fungsi yang memanggil dirinya sendiri
console.log("\n===REKURSIF");
console.log("looping menggunakan rekursif: ");
//looping menggunakan rekursif
function tampilAngka(n){
	if(n == 0) return;//berhentikan fungsi (base case)
	console.log(n);
	tampilAngka(n-1);
}
tampilAngka(3);
//faktorial menggunakan rekursif
function faktorial(n){
	if(n == 0) return 1;
	return (n * faktorial(n-1));
// 5*(factorial 4)
// 5*(4*(faktorial(3))
// 5*(4*(3*(faktorial(2)))
// 5*(4*(3*(2*(faktorial(1))))
// 5*(4*(3*(2*(1*(faktorial(0))))) --> faktorial(0)=1
// 5*(4*(3*(2*(1*(1) = 120
}
hasil = faktorial(5);
console.log("faktorial menggunakan rekursif: " + hasil);

//Declaration & Ekspression
console.log("\n===DECLARATION VS EXPRESSION");
// 1.fuction Declaration
// function harusAdaNama(parameterOpt){}
// function declaration sudah kitabuat di contoh di atas

// 2.function expression
// function namaOptional(parameterOpt){}
// function expression selalu disimpan ke dalam variable
// harus selalu dibuat fungsi dulu baru dipanggil
var tampilPesan = function(nama){
	console.log("halo " + nama)
}
tampilPesan("miftah");//dipanggil setelah membuat function


