var penumpang = ["miftah", undefined, "yeyen"];
function tambahPenumpang(namaPenumpang, penumpang){
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
function hapusPenumpang(namaPenumpang, penumpang){
	if(penumpang.length == 0){
		console.log("Di dalam angkot tidak ada penumpang");
		return penumpang;
	}else{
		for(var i=0; i<penumpang.length; i++){
			if(penumpang[i] == namaPenumpang){
				penumpang[i] = undefined;
				return penumpang;
			}else if(penumpang[i] !== namaPenumpang){
				console.log("Tidak ada nama penumpang");
				return penumpang;
			}
		}
	}
}