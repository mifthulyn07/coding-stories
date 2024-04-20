// 1.manipulasi element
// 1a. element.innerHTML = merubah isi tag yang kita seleksi
const bio = document.getElementById("bio");
bio.innerHTML = "<em>Miftahul Ulyana Hutabarat</em>";
const sectionA = document.querySelector("#a");
sectionA.innerHTML = "Halo Miftahul Ulyana Hutabarat!";
// 1b. element.style.<propertyCSS> = merubah style
sectionA.style.backgroundColor = "salmon";
// 1c. element.setAttribute()
const h1 = document.getElementsByTagName('h1')[0];
h1.setAttribute("class", "bio");//menambahkan atrribut class lihat di console
// 1d. element.getAttribute()
h1.getAttribute("id");//mencari tau isi attribute(tulis di console)
// 1e. element.removeAttribute()
h1.removeAttribute("class");//cocoknya tulis di console
// 1f. element.classList = menambahkan list kelas yang sebelumnya sudah ada class
// - element.classList.add() = menambahkan list kelas
const sm1 = document.querySelector('.sm1');
sm1.classList.add('label');//lihat di console
// - element.classList.remove() = menghapus list kelas
sm1.classList.remove('label');//lihat di console
// - element.classList.toggle() =
sm1.classList.toggle('label');//mengecek sm1 ada list label? jika belu tambahkan
sm1.classList.toggle('label');//mengecek sm1ada list label? jika ada hapus, lihat di console
// - element.classList.item() = mengetahui list kelas tertentu
sm1.classList.add('satu');
sm1.classList.add('dua');//hasil: sm1 satu dua
sm1.classList.item(1);//mencari item
// - element.classList.contains() = bertanya apakah ada kelas tersebut
sm1.classList.contains('dua');//hasil: true
sm1.classList.contains('empat');//hasil: false
// - element.classList.replace() = menggantikan kelas yang baru
sm1.classList.replace('dua', 'tiga');//menggantikan kelas dua menjadi tiga 
// nb:
document.body.classList.toggle('birumuda');//cara cepat menambahkan kelas biru muda 
// bisa untuk light/dark mode

 
