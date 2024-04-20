// contoh array
console.log("===CONTOH ARRAY");
var hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"];
console.log("tipe array: " + typeof(hari));
console.log("banyaknya indeks: " + (hari.length));
console.log("menampilkan array: " + hari);
var myFunc = function(){//function expression
	console.log("hai");
}
//array bisa dimasuki function & bisa menyimpan array di dalam array
var array1 = [myFunc, [1, "dia", false]];
console.log("fungsi di dalam array: " + array1[0]);
console.log("array di dalam array: " + array1[1][1]);



//manipulasi array
console.log("\n===MANIPULASI ARRAY");
var array2 = [];
array2[0] = "Miftahul";
array2[1] = "Ulyana";
array2[2] = "Hutabarat";
array2[1] = undefined;//menghapus isi namun tidak indeks
console.log("manampilkan array: ");
console.log(array2);
for (var i=0; i<array2.length; i++){//menampilkan isi array
	console.log("mahasiswa ke-" + (i+1) + ": " + array2[i]);
}



//method array
console.log("\n===METHOD ARRAY");
// 1.length = mengetahui jumlah isi array
// 2.join = menggabungkan seluruh isi array dan mengubah seluruhnya menjadi string
var array3 = ["miftahul", "ulyana"];
console.log("1.join(): menggabungkan seluruh isi array dan mengubah seluruhnya menjadi string");
console.log(array3.join('-'));//mengganti koma)
// 3.push = menambah elemen baru di indeks terakhir
array3.push("hutabarat", "kiyowo");
console.log("2.push(): menambah elemen baru di indeks terakhir");
console.log(array3);
// 4.pop = menghilangkan elemen terakhir di indeks terakhir
array3.pop();
console.log("3.pop(): menghilangkan elemen terakhir di indeks terakhir");
console.log(array3);
// 5. unshift = menambahkan elemen baru di indeks pertama
array3.unshift("perkenalkan");
console.log("4.unshift(): menambahkan elemen baru di indeks pertama");
console.log(array3);
// 5. shift = menghilangkan elemen pertama di indeks pertama
array3.shift();
console.log("5.shift(): menghilangkan elemen pertama di indeks pertama");
console.log(array3);
// 6.slice = mengambil beberapa bagian pada array untuk mengubah ke yang baru
// syntax: array3.slice(indeksAwalYgDiambil, indeksAkhirYgdiCut)
array4 = array3.slice(1, 2);
console.log("6.slice(): mengambil beberapa bagian pada array");
console.log(array4);
// 7.splice = menyambung, menyisipkan elemen array di tengah tengah
// syntax: array3.splice(pilihIndex, mauDiHapusBerapa, elemenBaru)
array3.splice(1, 2, "kiyowo", "cantikbgt");
console.log("7.splice(): menyambung, menyisipkan elemen");
console.log(array3);
// 8.forEach = sama ketika melakukan looping(lihat menampilkan isi array)
var array5 = ["nunun", "miftah", "putri"];
console.log("8.forEach(): sama seperti looping");
// var cetak = function(e){
// 	console.log(e);
// }
// array5.forEach(cetak);//basic
array5.forEach(function(e /*isi*/, i/*indeks*/){//function expression
	console.log("anak mamak ke-" + (i+1) + " adalah " + e);
});
// 9.map = sama seperti forEach namun lebih baik karna mengembalikan array
var array6=[1,2,3];
console.log("9.map(): sama seperti forEach namun lebih baik karna mengembalikan array");
var cetak = array6.map(function(e){//function expression
	return e*2;//jika menggunakan forEach hasilnya akan undefined
});
console.log(cetak);
// 10.sort = untuk mengurutkan isi array
var array7=[6,5,10,8,6,2,20];
console.log("10.sort(): untuk mengurutkan isi array");
array7.sort();
console.log("sudah terurut namun tidak berlaku di angka puluhan: " + array7);
array7.sort(function(a,b){
	return a-b;
});
console.log("mengurutkan kembali menggunakan fungsi: " + array7);
// 11.reverse = untuk membalikkan urutan dari elemen array
console.log("11.reserve(): untuk membalikkan urutan dari elemen array");
array7.reverse();
console.log(array7);
// 12.concat = untuk ”penyambungan” array.
console.log("12.concat(): untuk ”penyambungan” array");
array7 = array7.concat("a","g",3,6,4);
console.log(array7);
// 13.filter = untuk mencari elemen pada array. filter bisa mengembalikan banyak nilai
console.log("13.filter(): mencari angka yang lebih besar dari 5, untuk mencari elemen pada array, filter bisa mengembalikan banyak nilai");
array7 = array7.filter(function(e){
	return e >= 5;//mencari angka yang lebih besar dari 5
});
console.log(array7);
// 14.find = untuk mencari elemen pada array. hanya mencari 1 nilai
console.log("14.find(): untuk mencari elemen pada array. hanya mencari 1 nilai");
array7 = array7.find(function(e){
	return e > 5;//mencari angka yang lebih besar dari 5
});
console.log(array7);//dicari mulai dari indeks awal yang dapat e > 5