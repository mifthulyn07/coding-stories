// pengulangan: while, for, do while
var i=0;
while(i<3){
	console.log(i + ".This is while");
	i++;
}

console.log("\n");
for(i=0; i<3; i++){
	console.log(i + ".This is for loop");
}

console.log("\n");
var i=0;
do{
	console.log(i + ".This is do while");
	i++;	
}
while(i<3);

///latihan
var ulang=true;
while(ulang){
	var x = prompt("Masukkan Nama kamu: ");
	alert("hai " + x);
	ulang = confirm("Mau masukkan nama lagi?");
	if (ulang == false){
		alert("Okey :)");
	}
}