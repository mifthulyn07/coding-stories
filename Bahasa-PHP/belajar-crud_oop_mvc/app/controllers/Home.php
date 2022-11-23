<?php 
class Home extends Controller{
     public function index($nim = "0702192031", $jurusan="Sistem Informasi", $judul ="Home"){
          $data["nama"]       = $this->model("User_model")->getUser();
          $data["nim"]        = $nim;
          $data["jurusan"]    = $jurusan;
          $data["judul"]      = $judul;

          $this->view("templates/header", $data);
          $this->view("home/index", $data);
          $this->view("templates/footer");
     }
}

?>