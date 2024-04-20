//membuat dark/light mode dengan addEventListener()
const tblLightOrDark = document.getElementById('tblLightOrDark');
tblLightOrDark.onclick = function(){
	document.body.classList.toggle('darkmode');//cara cepat menambahkan kelas biru muda 
}




//membuat button memakai javascript tanpa menyentuh html
const tblRandomColor = document.createElement('button');//membuat button baru
const textTblRandomColor = document.createTextNode('Click for change random color mode');//membuat isi text button baru
tblRandomColor.appendChild(textTblRandomColor);//menggabungkan button dengan text
const div = document.querySelector('.randomColorBox');
div.after(tblRandomColor);//menaruh tombol setelah div ke body
div.setAttribute('id', 'tblRandomColor');//menambahan id attribute di tombol random
//membuat random color mode dengan DOM events
tblRandomColor.addEventListener('click', function(){
	const r = Math.round(Math.random() * 254 + 1);//bilangan 1-254, math round untuk bilangan bulat
	const g = Math.round(Math.random() * 254 + 1);//bilangan 1-254
	const b = Math.round(Math.random() * 254 + 1);//bilangan 1-254
	div.style.backgroundColor = 'rgb('+r+','+g+','+b+')';//membuat menjadi string dengan menambhkan +
});




//membuat slider warna
const sMerah = document.getElementById('sMerah');
const sHijau = document.getElementById('sHijau');
const sBiru = document.getElementById('sBiru');
const sliderBox = document.querySelector('.sliderBox');
const warna = function(){ 
	const r = sMerah.value;
	const g = sHijau.value;
	const b = sBiru.value;
	sliderBox.style.backgroundColor = 'rgb('+r+','+g+','+b+')';
}
sMerah.addEventListener('input', warna);//event input supaya slidernya mulus 
sHijau.addEventListener('input', warna);
sBiru.addEventListener('input', warna);




//mengubah warna sesuai dengan koordinat mouse
const colorBox = document.querySelector('.colorBox');
document.body.addEventListener('mousemove', function(event){
	//melacak posisi mouse menggunakan koordinat sesuai dengan document
	// console.log(event.clientX);
	// console.log(event.clientY);
	// ukuran browser
	// console.log(window.innerWidth);//innerwidth untuk mengetahui lebar document(layar putih)
	const xPos = Math.round((event.clientX / window.innerWidth) * 255);//dikali 255 karna mengikuti kadar warna, nilainya dari kiri 0 sampai ke kanan 255
	const yPos = Math.round((event.clientY / window.innerHeight) * 255);//dikali 255 karna mengikuti kadar warna, nilainya dari kiri 0 sampai ke kanan 255
	colorBox.style.backgroundColor = 'rgb('+xPos+','+yPos+', 100)';

});