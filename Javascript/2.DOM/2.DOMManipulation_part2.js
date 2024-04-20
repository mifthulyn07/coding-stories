// 2.manipulasi node
// 2a. document.createElement()=membuat elemen baru
const pbaru = document.createElement('p');
// 2b. document.createTextNode() = membuat tulisan di dalam elemen
const ptext = document.createTextNode('ini paragraf baru');
// 2c. node.appendChild()=simpan tulisan ke dalam paragraf
pbaru.appendChild(ptext);
const sectionA = document.getElementById('a');
sectionA.appendChild(pbaru);//simpan p baru di akhir section a



// 2d. node.insertBefore() = menambahkan elemen baru di tengah, awal atau akhir
const libaru = document.createElement('li');
const litext = document.createTextNode('ini li baru');
libaru.appendChild(litext);
const ul = document.querySelector('#b ul');
const li = ul.querySelector('li:nth-child(2)');
ul.insertBefore(libaru, li);//libaru diletakkan ke li



// 2e. parentNode.removeChild()= menghapus child
const parentlink = document.querySelector('#b ul li:nth-child(3)');
const hapuslink = parentlink.getElementsByTagName('a')[0];
parentlink.removeChild(hapuslink);



// 2f. parentNode.replaceChild() = menggantikan child
const sectionB = document.querySelector('#b');
const h3 = sectionB.querySelector('h3');

const h2baru = document.createElement('h2');
const h2replace = document.createTextNode("ini replace");
h2baru.appendChild(h2replace);

sectionB.replaceChild(h2baru, h3);



// menandai mana saja yang baru
pbaru.style.backgroundColor = 'lightgreen';
h2baru.style.backgroundColor = 'lightgreen';
libaru.style.backgroundColor = 'lightgreen';
parentlink.style.backgroundColor = 'lightgreen';