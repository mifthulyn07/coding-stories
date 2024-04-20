<?php 
class Mahasiswa_model{
     private $table = 'tbl_mahasiswa';
     private $db;

     public function __construct(){
          $this->db = new Database;
     }

     public function getAllMahasiswa(){
          $this->db->query("SELECT * FROM " . $this->table);
          
          return $this->db->resultSet();
     }

     public function getMahasiswaById($id){
          $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
          
          $this->db->bind('id', $id);
          return $this->db->single();
     }

     public function tambahDataMahasiswa($data){
          $query = "INSERT INTO " . $this->table . " VALUES('', :nim, :nama, :jurusan, :email, '', '', '')";
          
          $this->db->query($query);
          $this->db->bind("nim", $data["nim"]);
          $this->db->bind("nama", $data["nama"]);
          $this->db->bind("jurusan", $data["jurusan"]);
          $this->db->bind("email", $data["email"]);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function hapusDataMahasiswa($id){
          $query = "DELETE FROM " . $this->table . " WHERE id = :id";
          
          $this->db->query($query);
          $this->db->bind("id", $id);

          $this->db->execute();

          return $this->db->rowCount();
          
     }

     public function ubahDataMahasiswa($data){
          $query = "UPDATE tbl_mahasiswa SET nim = :nim, nama = :nama, email = :email, jurusan = :jurusan WHERE id= :id";
          
          $this->db->query($query);
          $this->db->bind("nim", $data["nim"]);
          $this->db->bind("nama", $data["nama"]);
          $this->db->bind("jurusan", $data["jurusan"]);
          $this->db->bind("email", $data["email"]);
          $this->db->bind("id", $data["id"]);


          $this->db->execute();

          return $this->db->rowCount();
     }

     public function cariDataMahasiswa(){
          $keyword = $_POST['keyword'];
          $query = "SELECT * FROM tbl_mahasiswa WHERE nama LIKE :keyword";

          $this->db->query($query);
          $this->db->bind('keyword', "%$keyword%");

          return $this->db->resultSet();
     }
}
?>