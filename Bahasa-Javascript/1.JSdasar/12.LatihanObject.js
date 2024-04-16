//aplikasi untuk juragan angkot
function Angkot(supir, trayek, penumpang, kas){//konstuktor
	this.supir = supir;//this.supir akan diganti menjadi supir
	this.trayek = trayek;
	this.penumpang = penumpang;
	this.kas = kas;

	this.penumpangNaik = (namaPenumpang) => {
		if(penumpang.length == 0){
			penumpang.push(namaPenumpang);
			return penumpang;
		}else{
			for(var i=0; i<penumpang.length; i++){
				if (penumpang[i] == namaPenumpang){
					console.log("Nama penumpang " + namaPenumpang + " sudah ada!!!");
					return penumpang;
				}else if(penumpang[i] == undefined){
					penumpang[i] = namaPenumpang;
					return penumpang;
				}else if(i == (penumpang.length-1)){
					penumpang.push(namaPenumpang);
					return penumpang;
				}
			}
		}
	}
	this.penumpangTurun = (namaPenumpang, bayar) => {
		if(penumpang.length == 0){//works
			console.log("Di dalam angkot tidak ada penumpang");
			return penumpang;
		}else{
			for(var i=0; i<penumpang.length; i++){
				if(penumpang[i] == namaPenumpang){
					penumpang[i] = undefined;//works
					this.kas += bayar;//?
					return penumpang;
				}else if( i == penumpang.length-1){
					console.log("Tidak ada nama penumpang " + namaPenumpang);
					return penumpang;
				}
			}
		}
	}
}	
var angkot1 = new Angkot("Miftah", ["Martubung", "Medan"], [], 0);
console.log("===penumpang naik: ");
angkot1.penumpangNaik("lala");
angkot1.penumpangNaik("baba");
angkot1.penumpangNaik("cici");
angkot1.penumpangNaik("cuci");
console.log(angkot1.penumpang);
// 
console.log("===penumpang turun: ");
angkot1.penumpangTurun("cici", 2000);
console.log(angkot1.penumpang);
console.log("uang kas: " + angkot1.kas);
