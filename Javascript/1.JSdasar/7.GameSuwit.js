var i, j, p, comp, x, y=0, score, a, b=0;

var j=parseInt(prompt("Ingin suwit berapa kali?"));
alert("MULAI!!!");

for (i=0; i<j; i++){
	p = parseInt(prompt('Pilih dengan memasukkan angka: 1.Gunting, 2.Batu, 3.Kertas'));
	comp =  Math.round(Math.random() * 100 + 1) //memanggil library js yaitu bilangan random yang dibulatkan dari 1-100

	if(comp <= 33){//nilai comp = 1-100
	comp = "Gunting";
	}else if (comp > 33 && comp <= 66){
		comp = "Batu";
	}else{
		comp = "Kertas"
	}

	if(comp == "Gunting"){
		if(p == 1){
			p = "Gunting";//konvert nilai int ke char
			alert("IMBANG!!");
			x=0;
			a=0;
		}else if(p == 2){
			p = "Batu";//konvert nilai int ke char
			alert("KAMU MENANG!!");
			x=1;
			a=0;
		}else if(p == 3){
			p = "Kertas";//konvert nilai int ke char
			alert("KAMU KALAH");
			x=0;
			a=1;
		}
	}else if(comp == "Batu"){
		if(p == 1){
			p = "Gunting";//konvert nilai int ke char
			alert("KAMU KALAH");
			x=0;
			a=1;
		}else if(p == 2){
			p = "Batu";//konvert nilai int ke char
			alert("IMBANG!!");
			x=0;
			a=0;
		}else if(p == 3){
			p = "Kertas";//konvert nilai int ke char
			alert("KAMU MENANG!!");
			x=1;
			a=0;
		}
	}else if(comp == "Kertas"){
		if(p == 1){
			p = "Gunting";//konvert nilai int ke char
			alert("KAMU MENANG!!");
			x=1;
			a=0;
		}else if(p == 2){
			p = "Batu";//konvert nilai int ke char
			alert("KAMU KALAH");
			x=0;
			a=1;
		}else if(p == 3){
			p = "Kertas";//konvert nilai int ke char
			alert("IMBANG");
			x=0;
			a=0;
		}
	}else{
		alert("Tidak ada yang kamu masukkan!!");
	}


	console.log("Computer: " + comp);
	console.log("Kamu: " + p);
	console.log("Score: " + x);

	x = y + x;//1=0+1, 1=1+1
	y = x;//y=1, y=2

	a = b + a;
	b = a;
}
console.log("Total score anda: " + y);
console.log("Total score computer: " + b);

if(x>b){
	alert("SELAMAT KAMU MENANG!!! :D DENGAN SKOR " + y);
}else if(x<b){
	alert("MAAF KAMU KALAH :(");
}else{
	alert("SEIMBANG")
}


// nb: 
// var x = Math.floor(Math.random() * 10);//bilangan random 1-10
// Math.floor() merupakan jenis pembulatan kebawah misal 14,5=14
//console.log(x);

// var x = Math.floor(Math.random() * 11);//bilangan random 0-9
// console.log(x);
// var x = Math.floor(Math.random() * 10 + 5 );//bilangan random 5-14
// console.log(x);

// function rand(min, max){
//     return Math.floor(Math.random() * (max - min + 1) + min);
//   }     