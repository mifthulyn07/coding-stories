var keyword = document.getElementById('keyword');
var search = document.getElementById('search');
var table = document.getElementById('table');
var pagination = document.querySelectorAll('.pagination');

// ini untuk search 
search.onclick = function(){
    for(i=0; i<pagination.length; i++){
        pagination[i].style.display = 'none';
    }
}

//ini untuk pertambahan ajax
keyword.addEventListener('keypress', function(){
    for(i=0; i<pagination.length; i++){
        pagination[i].style.display = 'none';
    }
});

// ini ajax 
keyword.addEventListener("keyup", function(){
    // buat object ajax 
    var ajax = new XMLHttpRequest();

    //cek kesiapan ajax
    ajax.onreadystatechange = function(){
        // readystate nilainya 0-4 
        // status yaitu status code 200 yaitu ready 
        if(ajax.readyState == 4 && ajax.status == 200){
            //untuk mengecek ajax siap
            // console.log('ajax ok');
            
            // mengambil apapun yang ada di File 9.Tampil&Hapus_Mahasiswa.php 
            table.innerHTML = ajax.responseText;
        }
    }

    // eksekusi ajax 
    // ajax bisa memakai get/post 
    //false = syncronus, true=asyncronus
    ajax.open('GET', '9.Cari(Ajax).php?keyword=' + keyword.value, true);
    ajax.send();
});