<?php 
class About extends Controller{
     public function index($nama = "Miftahul Ulyana Hutabarat", $nim = "0702192031", $jurusan="Sistem Informasi", $judul ="About"){//digunakan untuk method default di app
          $data["nama"]       = $nama;
          $data["nim"]        = $nim;
          $data["jurusan"]    = $jurusan;
          $data["judul"]      = $judul;
          
          $this->view("templates/header", $data);
          $this->view("about/index", $data);
          $this->view("templates/footer");
     }

     public function page($nama = "Miftahul Ulyana Hutabarat", $nim = "0702192031", $jurusan="Sistem Informasi", $judul ="About"){
          $data["nama"]       = $nama;
          $data["nim"]        = $nim;
          $data["jurusan"]    = $jurusan;
          $data["judul"]      = $judul;

          $this->view("templates/header", $data);
          $this->view("about/page", $data);
          $this->view("templates/footer");
     }
}
?>