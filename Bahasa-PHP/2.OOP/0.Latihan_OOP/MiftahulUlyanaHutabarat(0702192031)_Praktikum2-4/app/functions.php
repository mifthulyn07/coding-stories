<?php 
//menampilkan informasi php
// phpinfo(); 

// class parent 
class KoneksiDatabase{
    // method 
    protected function Koneksi(){
        // error handling 
        try{
            //menggunakan PDO untuk pemrograman object
            return new PDO("mysql:host=localhost;dbname=dbcommerce", "root", "");
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

// class child 
class TampilDatabase extends KoneksiDatabase{
    // property 
    public $rows;

    // constructor 
    public function __construct($queryTampil){        
        try {
            // Prepare(): menyiapkan instruksi atau argumen ke mysql.
            // result(): menjalankan query prepared(). 
            $result = $this->Koneksi()->prepare($queryTampil);
            $result->execute();
            
            $rows = [];
            while($row = $result->fetch()){
                $rows[] = $row;
            }          
            $this->rows = $rows;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}


?>