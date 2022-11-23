// jquery
$(function(){
     $('.btnTambahData').on('click', function(){
          $('#exampleModalLabel').html("Tambah Mahasiswa");
          $(".modal-footer button[type=submit]").html("Tambah Data");
     });

     $('.btnUbahData').on('click', function(){
          $('#exampleModalLabel').html("Ubah Mahasiswa");
          $(".modal-footer button[type=submit]").html("Ubah Data");
          $(".modal-content form").attr("action", "http://localhost/PROJECT/LatihanPHP/belajar-crud_oop_mvc/public/mahasiswa/ubah");

          const id = $(this).data("id");//mengambil data yang namanya id
          
          // ajax
          $.ajax({
               url: 'http://localhost/PROJECT/LatihanPHP/belajar-crud_oop_mvc/public/mahasiswa/getUbah',
               data: {id : id},
               type: 'POST',
               dataType: 'json',
               success: function(data){
                    $("#nama").val(data.nama);
                    $("#nim").val(data.nim);
                    $("#email").val(data.email);
                    $("#jurusan").val(data.jurusan);
                    $("#id").val(data.id);
               }
          });
     });
});
