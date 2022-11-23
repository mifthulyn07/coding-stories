<div style="max-width:800px; margin:10px auto;">

     <!-- flasher  -->
     <div class="row">
          <div class="col-lg-6">
               <?php Flasher::flash(); ?>
          </div>
     </div>

     <center style="margin:50px 0px; font-weight:bold;"><h3>DAFTAR MAHASISWA</h3></center>
     
     <!-- button modal  -->
     <button style="margin: 20px 0;" type="button" class="btn btn-primary btnTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Launch demo modal
     </button>

     <!-- search  -->
     <form action="<?php echo BASEURL; ?>/mahasiswa/cari" method="POST">
          <div class="input-group mb-3">
               <input name="keyword" id="keyword" type="text" class="form-control" autocomplete="off" placeholder="Cari Mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2">
               <button class="btn btn-outline-secondary" type="submit" id="bntCari">Cari</button>
          </div>
     </form>

     <ul class="list-group">
     <?php $i=1; foreach($data["mhs"] as $mhs): ?>
          <li class="list-group-item d-flex justify-content-between align-items-start">
               <?php echo $mhs["nama"];?>
               <div>
                    <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs["id"];?>" class="btn btn-info">Detail</a>
                    <a href="http://localhost/PROJECT/LatihanPHP/belajar-crud_oop_mvc/public/mahasiswa/ubah" data-id="<?php echo $mhs["id"];?>" class="btn btn-warning btnUbahData" data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah</a>
                    <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs["id"];?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
               </div>
          </li>
     <?php $i++; endforeach; ?>
</div> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true" >
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="POST">
                    <div class="modal-body">
                    <input type="hidden" class="form-control" id="id" name="id" aria-describedby="emailHelp">
                    <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">NIM</label>
                              <input type="text" class="form-control" id="nim" name="nim" aria-describedby="emailHelp">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                              <input type="text" class="form-control" id="jurusan" name="jurusan" aria-describedby="emailHelp">
                         </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
               </form>
          </div>
     </div>
</div>