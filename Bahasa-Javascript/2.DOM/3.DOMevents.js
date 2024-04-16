// cara mendengarkan events

// 1. event handler
// -inline HTML attribute
const bio1 = document.querySelector('.bio1');
function ubahwarnabio1(){//lihat di html
 	bio1.style.backgroundColor = 'lightgreen';
}
// -element method
const bio2 = document.querySelector('.bio2');
bio2.onclick = ubahwarnabio2;//tampa menyentuh inline html
function ubahwarnabio2(){//lihat di html
 	bio2.style.backgroundColor = 'yellow';
}

//nb: event handler akan menimpa aksi 
const bio3 = document.querySelector('.bio3');
bio3.onclick = function(){//event ini tidak bereaksi
	bio3.style.backgroundColor = "lightblue";
}
bio3.onclick = function(){//hanya function ini yang bereaksi
	bio3.style.color = "red";
}



// 2.addEventListener()
//ketika id #b di klik item li baru bertambah
const sectionB = document.querySelector('#b');
sectionB.addEventListener('click', function(){//ketika di clik maka menjalankan function
	const ul = document.querySelector('#b ul');//ambil parent

	const libaru = document.createElement('li');//membuat element baru
	const tekslibaru = document.createTextNode('ini li baru');//membuat teks baru
	libaru.appendChild(tekslibaru);//menggabungkan element varu dengan teks didalamnya

	ul.appendChild(libaru);//menggabungkan element ul dengan libaru
});

// nb: addEventListener() akan menjalankan aksi semuanya
const sectionBh3 = document.querySelector('#b h3');
sectionBh3.addEventListener('click', function(){//ini ber aksi
	sectionBh3.style.backgroundColor = 'pink';
});
sectionBh3.addEventListener('dblclick', function(){//ini beraksi juga ketika di double click
	sectionBh3.style.color = 'red';
});


// daftar event di javasript banyak ini erupakan kategori saja.. di dalam mouse event banyak lagi event
// mouse event
// keyboard event
// resources event
// focus event
// view event
// form event
// css animation & transition event
// drag & drop event
// dll

