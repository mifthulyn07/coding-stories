//reset
document.querySelector('.control .reset button').addEventListener('click', function(){
	classreset = document.querySelector('.control .reset button img');
	classreset.style.transform = 'rotate(360deg)';
	classreset.style.transition =  '0.8s';
	setTimeout(function(){//menunggu dulu dalam 0.8 detik baru menjalankan fungsi ini
		location.reload();
	},800);
});

let user, computer;
function computerChoice(){
	computer =  Math.round(Math.random() * 100 + 1) //memanggil library js yaitu bilangan random yang dibulatkan dari 1-100
	if(computer <= 33){
		computer = 'scissors';
		document.querySelector('.computerChoice .computer img').setAttribute('src', '../../0.OtherStuff/image/icon/scissors.png');
	}else if(computer > 33 && computer <= 66){
		computer = 'rock';
		document.querySelector('.computerChoice .computer img').setAttribute('src', '../../0.OtherStuff/image/icon/rock.png');
	}else{
		computer = 'paper';
		document.querySelector('.computerChoice .computer img').setAttribute('src', '../../0.OtherStuff/image/icon/paper.png');

	}
}

function result(computer, user){
	let userValue, computerValue;
	if(computer == user){
		user=0;
		computer=0;
		document.querySelector('.info .desc p').innerHTML = "DRAW";
	}else if(computer == "scissors"){
		if(user == "rock"){
			user=1;
			computer=0;
			document.querySelector('.info .desc p').innerHTML = "WIN";
		}else if(user == "paper"){
			user=0;
			computer=1;
			document.querySelector('.info .desc p').innerHTML = "LOSE";
		}
	}else if(computer == "rock"){
		if(user == "scissors"){
			user=0;
			computer=1;
			document.querySelector('.info .desc p').innerHTML = "LOSE";
		}else if(user == "paper"){
			user=1;
			computer=0;
			document.querySelector('.info .desc p').innerHTML = "WIN";
		}
	}else if(computer == "paper"){
		if(user == "scissors"){
			user=1;
			computer=0;
			document.querySelector('.info .desc p').innerHTML = "WIN";
		}else if(user == "rock"){
			user=0;
			computer=1;
			document.querySelector('.info .desc p').innerHTML = "LOSE";
		}
	}

	function colorWinLose(){
		if (user == 1){
			document.querySelector('.info .desc').style.boxShadow = "inset 2px 3px 24px rgb(6, 255, 0,0.6), 5px 5px 12px #355197";
		}else if(computer == 1){
			document.querySelector('.info .desc').style.boxShadow = "inset 2px 3px 24px rgb(255, 23, 0,0.6), 5px 5px 12px #355197";
		}else{
			document.querySelector('.info .desc').style.boxShadow = "inset 2px 3px 24px rgb(251, 255, 0,0.6), 5px 5px 12px #355197";
		}
	}

	score(user, computer);
	colorWinLose();
}

let score1 = 0, score2 = 0;
function score(user,computer){
	score1 = computer + score1;
	computer = score1;
	document.querySelector('.scorecomputer p:nth-child(2)').innerHTML = score1;

	score2 = user + score2;
	user = score2;
	document.querySelector('.scoreuser p:nth-child(2)').innerHTML = score2;
}


let userChoice = document.querySelectorAll('.userChoice button');//menseleksi 3 image sekaligus
userChoice.forEach(function(choice){//menampilkan dengan cara looping 
	//choice berisi 3 image gunting, batu, kertas
	choice.addEventListener('click', function(){//kita kelik maka yang tampil gambar yang kita klik
		user = choice.id;//user = nama id
		colorUserChoice();
		shuffleImg();

		setTimeout(function(){//menunggu dulu dalam 1 detik baru menjalankan gungsi ini
			computerChoice();
			result(computer,user);
		},1000);
	});
});


function colorUserChoice(){
			if (user == 'scissors'){
				document.querySelector('.userChoice .scissors').style.boxShadow = "inset 2px 3px 24px rgb(0, 234, 211,0.6), 5px 5px 12px #f27340";
				document.querySelector('.userChoice .rock').style.boxShadow = "inset 2px 3px 11px rgb(0, 0, 0,0.16), 5px 5px 12px #f27340";
				document.querySelector('.userChoice .paper').style.boxShadow = "inset 2px 3px 11px rgb(0, 0, 0,0.16), 5px 5px 12px #f27340";
			}else if(user == 'rock'){
				document.querySelector('.userChoice .scissors').style.boxShadow = "inset 2px 3px 11px rgb(0, 0, 0,0.16), 5px 5px 12px #f27340";
				document.querySelector('.userChoice .rock').style.boxShadow = "inset 2px 3px 24px rgb(0, 234, 211,0.6), 5px 5px 12px #f27340";
				document.querySelector('.userChoice .paper').style.boxShadow = "inset 2px 3px 11px rgb(0, 0, 0,0.16), 5px 5px 12px #f27340";
			}else if(user =='paper'){
				document.querySelector('.userChoice .scissors').style.boxShadow = "inset 2px 3px 11px rgb(0, 0, 0,0.16), 5px 5px 12px #f27340";
				document.querySelector('.userChoice .rock').style.boxShadow = "inset 2px 3px 11px rgb(0, 0, 0,0.16), 5px 5px 12px #f27340";
				document.querySelector('.userChoice .paper').style.boxShadow = "inset 2px 3px 24px rgb(0, 234, 211,0.6), 5px 5px 12px #f27340";	
			}
		}

function shuffleImg(){
	let imgComputer = document.querySelector('.computerChoice .computer img');
	let img = ['scissors', 'rock', 'paper'];//array
	let i = 0;

	let startTiming = new Date().getTime();
	//fungsi new Date() untuk mendapatkan tanggal dan waktu saat dari komputer kita
	// getTime() mengembalikan angka mulai dari January 1, 1970 dengan satuan milidetik(1 detik = 1000 milidetik)


	setInterval(function(){//fungsi untuk melakukan sesuatu secara berulang ulang selama interval waktu tertentu, interval 100 = 0,1 detik, setiap 0,1 detik gambar berganti
		if(new Date().getTime()-startTiming>1000){//jika jumlah (1/1/1970-waktuSekarang)-jumlah(1/1/1970-waktuDiKlik > 1 detik) maka berputar selama 1 detik kemudian berhenti. (fungsi untuk memberhentikan putaran)
			clearInterval;
			return;//keluar dari function
		}
		imgComputer.setAttribute('src', '../../0.OtherStuff/image/icon/'+img[i++]+'.png');//mengganti gambar sesuai array
		if(i == img.length) i = 0;//jika gambar sudah diganti sebanyak 3x, maka balik ke 0
	}, 100);
}

