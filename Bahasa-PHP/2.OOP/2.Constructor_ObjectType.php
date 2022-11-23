<?php 
// ===MENJUAL KOMIK DAN GAME===

//membuat class dan object
class Produk{
    // property
    public  $judul, 
            $pencipta, 
            $penerbit, 
            $harga; 
    
    //method
    public function getLabel(){
        // $this untuk mengambil property yang di luar method, nulis "->" harus berdempetan
        return "$this->pencipta, $this->penerbit";
    }

    //constructor = method yang khusus yang berada di dalam class 
    public function __construct($judul = "judul", $pencipta = "pencipta", $penerbit = "penerbit", $harga = "harga"){
        //berjalan otomatis ketika object di buat
        // constructor mengandung scope
        $this->judul = $judul;
        $this->pencipta = $pencipta;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

        echo    "===HASIL CONSTUCTOR DI CLASS PRODUK<br> 
                Judul: $judul <br>
                pencipta: $pencipta <br>
                Penerbit: $penerbit <br>
                Harga: $harga <br><br>";
    }
}

// membuat class 
class CetakInfoProduk{
    // method, 
    public function cetakInfo(Produk $produk){//parameter hanya menerima class Produk
        echo    "===HASIL METHOD DI CLASS CETAK <BR>
                Judul: {$produk->judul} <br>
                pencipta & Penertbit: {$produk->getLabel()} <br>
                Harga: {$produk->harga}";
    }
}

// instance, jika ada constructor maka constructor otomatis di jalankan 
$game1 = new Produk("Among Us", "Forest Willard", "InnerSloth", 30000);//parameternya itu bentuk dari constructor
$komik1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 45000);
$komik2 = new Produk("Back to me");

// instance
$CetakInfoProduk1 = new CetakInfoProduk();//tidak memakai parameter karna tidak ada constructor
$CetakInfoProduk1->cetakInfo($game1);
?>