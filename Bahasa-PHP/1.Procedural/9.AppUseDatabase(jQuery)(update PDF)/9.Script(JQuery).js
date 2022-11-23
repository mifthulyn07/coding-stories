// $(document) = jQuery(document) = syntax untuk memulai jQuery
$(document).ready(function(){
    //membuat event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        
        // memanggil ajax dengan jQuery hanya dengan 1 baris saja 
        // fungsi load() hanya bisa menggunakan get saja, post tidak bisa
        $('#table').load('9.Cari(jQuery).php?keyword=' + $('#keyword').val());
    });
});