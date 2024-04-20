// // 1.cara manual dengan element dan class yang sama, dan hanya berlaku di element petama ketika di klik
// // document.querySelector('.container .card .close').addEventListener('click', function(){//untuk menghapus card
// // 	1.manipulasi element
// // 	let parentCard = document.querySelector('.container');
// // 	parentCard.removeChild(parentCard.querySelector('.card'));

// // 	2.manipulasi style
// // 	document.querySelector('.container .card').style.display = "none";
// // });


// // 2.DOM Traversal
// let close = document.querySelectorAll('.container .card .close');
// // for (let i=0; i<close.length; i++){
// 	// close[i].addEventListener('click', function(){//untuk menghapus card
// 		// mengecek apakah tombo jalan
// 		// alert('tombol ke-' + i);
		
// 		// 1.manipulasi element(tidak menggunakan dom traversal)
// 		// let parentCard = document.querySelector('.container');
// 		// parentCard.removeChild(parentCard.querySelectorAll('.card')[i]);

// 		// 2.manipulasi style(tidak menggunakan dom traversal)
// 		// document.querySelectorAll('.container .card')[i].style.display = "none";

// 		// 3.DOM Traversal
// 		// -DOM traversal menggunakan parentElement
// 		// close[i].parentElement.style.display = 'none';//langsung menseleksi parent elementnya langsung tanpa harus membuat indeks array
// 	// });
// 	// -DOM traversal menggunakan function(e){}
// // 	close[i].addEventListener('click', function(e){
// // 		//ketika di klik, e berisi informasi apa saja yang baru terjadi. seperti koordinat, target dengan nama di console toElement(siapa yang di klik), dll 
// // 		console.log(e);//menampilkan informasi
// // 		console.log(e.target);//menampilkan informasi target/mengambil element yang di kliknya dalam bentuk syntax html
// // 		e.target.parentElement.style.display = 'none';
// // 	});
// // }

// nama = document.querySelector('.nama');
// console.log(nama.parentElement);//parent = .card
// console.log(nama.parentNode);//parent = .card
// console.log(nama.parentElement.parentElement);//kakenya = .container
// console.log(nama.nextSibling);// saudarakandung = #text = enter(karna yang di ambil node)
// console.log(nama.nextElementSibling);// saudarakandung = .telp 


// // DOMTraversalMethod

// // -parentElement = mengembalikan node
// // -parentNode = mengembalikan element
// // -nextSibling = mengembalikan node
// // -nextElementSibling = mengembalikan element
// // -previousSibling = mengembalikan node
// // -previousElementSibling = mengembalikan element




// //prevent Default
// //prevent default =  sebuah methode, cara untuk memberhentikan aksi default yang dilakukan oleh element web
// //dengn mengubah .card span menjadi .card a di HTMl maka terdapat aksi default yang dilakukan element, maka diperlukan prevent default
// //ketika atribute href kosong maka halamannya kembali ke halaman semula, otomatis merefresh halaman

// // nb caracepat dengan memakai forEach karna adaa indeks array
// close.forEach(function(element){//menegluarkan semua element dengan menggunakan looping, ama seperti for
// 	element.addEventListener('click', function(e){
// 		e.target.parentElement.style.display = 'none';
// 		e.preventDefault();//jika ini tidak ada maka a dengan href = '' akan otomatis mereload ulang halaman
// 		e.stopPropagation();//memberhentikan event bubbling(menjalankan beberapa event selain event close), card alert event nya tidak jalan
// 	});
// });


// //event bubbling
// let cards = document.querySelectorAll('.card');
// cards.forEach(function(card){
// 	card.addEventListener('click', function(e){
// 		alert('ok');
// 	});
// });//ketika di klik tanda closenya maka cardnya maka akan menjalankan fungsi alert, kemudian menghapus card
// // event bubbling yaitu event yang menjalankan semua event ketika terdapat event yang bersamaan, misalnya event close & event card alert

// cara efektif untuk memanfaatkan event bubbling agar ketika file html di edit di console eventnya masuk ke semua card
let container = document.querySelector('.container');
container.addEventListener('click', function(e){
	console.log(e.target);//ketika isi container di klik maka komputer memberi info target apa yang di klik
	if(e.target.className == 'close'){//jika pada saat di klik e target yang mempunyai nama kelas close
		e.target.parentElement.style.display = 'none';//parentElement = card
		e.preventDefault();//jika ini tidak ada maka a dengan href = '' akan otomatis mereload ulang halaman
		// tidak perlu memakai e.stopPropagation() karna dia hanya menjalankan 1 event saja
	}else if(e.target.className == 'card'){
		alert('ok');
	}
});//jika di edit file html di console maka event kliknya masi nempel di dalam container