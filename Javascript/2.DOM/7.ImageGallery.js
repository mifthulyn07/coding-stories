let right = document.querySelector('.right');
right.addEventListener('click', function(e){
	if (e.target.parentElement.className == 'slide'){
		let viewImg = document.querySelector('.view img');
		viewImg.src = e.target.src;//mengambil atribute src di slide
		viewImg.classList.add('fade');//membuat class fade
		// untuk membuat class fade tidak menempel terus di element selama 1 detik
		setTimeout(function(){
			viewImg.classList.remove('fade');
		},1000);//1 detik
		let slide = document.querySelectorAll('.slide img');
		slide.forEach(function(image){//menghapus semua class yang berisi active, baru menjalankan class active
			console.log(image);
			image.className = '';
		});
		e.target.classList.add('active');
	}
});
