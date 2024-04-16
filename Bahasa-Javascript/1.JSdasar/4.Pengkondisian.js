// pengkondisian: ifElse, switch
// ifElse
var angka = prompt("Ini merupakan pengkondisian ifElse, Masukkan angka:");
if (angka % 2 == 0){
	alert("ini adalah angka genap");
}else if(angka % 2 == 1){
	alert("ini adalah angka ganjil");
}else{
	alert(angka + " bukan merupakan angka");
}
// switch
var pilih = parseInt(prompt("Ini merupakan pengkondisian Switch, Masukkan angka:(1,2,&3)"));
switch(pilih){
	case 1: 
		alert("Anda Memasukkan angka " + pilih);
		break;//jika tidak ada break maka dia akan menjalankan semua kondisi
	case 2:
		alert("Anda Memasukkan angka " + pilih);
		break;
	case 3:
		alert("Anda Memasukkan angka " + pilih);
		break;
	default:
		alert("Anda Memasukkan angka diluar 1,2,&3");
		break;
}