// 1. Elemen:
// -getElementById
// -querySelector

// 2. HTML colllection:
// -getElementsByTagName
// -getElementsByClassName
// -querySelectorAll


// 1. getElementById(): mencari sebuah elemen, hasil: sebuah elemen
const bio = document.getElementById("bio");
bio.innerHTML = "Miftahul Ulyana Hutabarat";//mengganti text judul


// 2. getElementsByTagName(): mencari HTMLCollection, hasil: HTML colllection
const p = document.getElementsByTagName("p");//mencari <p>
p[0].innerHTML = "21 Juli 2001";
p[1].innerHTML = "Jl. Pancing 5 Link III"; //harus ada indeks biar bisa mengubah elemen
p[2].innerHTML = "0702192031";
//jika mau semua diwarnai, maka memakai looping
for(let i=0; i<p.length; i++){
	p[i].style.backgroundColor = "lightblue";
}
const h1 = document.getElementsByTagName("h1")[0];//langsung menyeleksi indeks 0
h1.style.fontSize = '30px';


// 3. getElementsByClassName(): menghasilkan HTMLCollection
const bio3 = document.getElementsByClassName('bio3');
bio3[0].style.backgroundColor = "yellow";


// 4. querySelector(): mencari elemen berdasarkan selector, menghasilkan sebuah elemen
const li1 = document.querySelector('#b h3');
li1.style.backgroundColor = "orange";


// 5. querySelectorAll(): mencari elemen bedasarkan selector, menhasilkan nodeList
const li = document.querySelectorAll('li a');
for(let i=0; i<li.length; i++){
	li[i].innerHTML = "mifthulyn07";
}

// nb
const sectionB = document.getElementById('b');
const pB = sectionB.querySelector(".sm1 a");//mencari di sekitar sectionB
pB.style.color = "red";









