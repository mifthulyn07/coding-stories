<?php 
// ===MENJUAL KOMIK DAN GAME===

// hak akses variabel(visibility)
//     1. public = bisa di akses class yang sama dan class lain 
//     2. private = bisa di akses hanya dalam class yang sama 
//     3. protected = bisa di akses dalam class parent dan class child

//membuat class dan object, biasanya class menggunakan huruf besar diawal penciptaan
class Produk{
    // property = variabel di dalam objek, harus memakai visibility
    public  $judul = "judul", 
            $pencipta = "pencipta", 
            $penerbit = "penerbit", 
            $harga = "harga"; 
            
    //method =  fungsi yang ada di dalam object, harus memakai visibility
    public function getLabel(){
        // $this untuk mengambil property yang di luar method, nulis "->" harus berdempetan
        return "$this->pencipta, $this->penerbit";
    }
}

// Instance = memanggil nama class disertakan new
$komik1 = new Produk();

// mereplace isi property judul di dalam class object menjadi Naruto 
$komik1->judul = "Naruto";

// melihat isi property 
echo "judul: $komik1->judul, pencipta: $komik1->pencipta";

echo "<br><br>";

// menambah property baru di luar class 
$komik1->propertyBaru = "property baru";
var_dump($komik1);

echo "<br><br>";

// memanggil fungsi di dalam class 
echo $komik1->getLabel();

?>