<?php 
// ===MENJUAL KOMIK DAN GAME===

// inheritace = pewarisan, mempunyai
// 1.Parent = class awal yang di buat
// 2.child class = mewarisi property dan method dari parentnya, memperluas fungsional dari parent nya

//overriding = membuat method di class child yang nama methodnya sama dengan class parent, dengan artian menimpa method parent ke method child 

// visibilty= konsep untuk mengatur akses property dan method pada sebuah object 
// keyword visibility: 
// 1. public = property & method bisa di akses ke mana saja, bahkan diluar class 
// 2. protected = property & method hanya bisa di akses oleh class parent dan class child saja   
// 3. private = property & method hanya bisa di akses ke dalam sebuah class tertentu saja

// setter & getter= method yang tugasnya untuk mengambil dan mengisi data ke dalam objek yang visibilitynya private/protected


//class parent
class Produk{
    // property
    protected   $judul = "judul", 
                $pencipta = "pencipta", 
                $penerbit = "penerbit",
                $harga = "harga",
                $diskon = 0;

    //method
    protected function getLabel(){
        return  "===CLASS PARENT(PRODUK) <br>
                Judul: $this->judul <br>
                Pencipta: $this->pencipta <br>
                Penerbit: $this->penerbit <br>
                Harga: $this->harga <br><br><hr>";
    }

    //constructor 
    protected function __construct($judul, $pencipta, $penerbit, $harga){
        $this->judul = $judul;
        $this->pencipta = $pencipta;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

// class child Komik dengan parent Produk
class Komik extends Produk{
    // property 
    private $halaman = 0;

    //method getter 
    public function getLabel(){
        return  "===CLASS CHILD(KOMIK) <br>
                Judul: $this->judul <br>
                Pencipta: $this->pencipta <br>
                Penerbit: $this->penerbit <br>
                Harga: $this->harga <br>
                Halaman: $this->halaman <br><br>";
    }

    //method setter
    public function setLabel($judul, $pencipta, $penerbit, $harga, $halaman){
        parent::__construct($judul, $pencipta, $penerbit, $harga);
        $this->halaman = $halaman;
        
        echo $this->getLabel();
    }

    // constuctor
    public function __construct($judul, $pencipta, $penerbit, $harga, $halaman){
        // overriding -> memanggil constructor dari parent 
        parent::__construct($judul, $pencipta, $penerbit, $harga);
        $this->halaman = $halaman;

        echo "Ini memakai method class child:<br>" . $this->getLabel();
        // overriding -> memanggil method dari parent
        echo "Ini memakai method class parent:<br>" . parent::getLabel();

    }
    
}

// class child Game dengan parent Produk 
class Game extends Produk{
    //Property
    private $waktu = 0;

    //method getter
    public function getLabel(){
        return  "===CLASS CHILD(GAME) <br>
                Judul: $this->judul <br>
                Pencipta: $this->pencipta <br>
                Penerbit: $this->penerbit <br>
                Harga: $this->harga <br>
                Waktu: $this->waktu <br><br>";
    }

    //method setter
    public function setLabel($judul, $pencipta, $penerbit, $harga, $waktu){
        parent::__construct($judul, $pencipta, $penerbit, $harga);
        $this->waktu = $waktu;
        
        echo $this->getLabel();
    }

    //constuctor
    public function __construct($judul, $pencipta, $penerbit, $harga, $waktu){
        // overriding -> memanggil constructor dari parent 
        parent::__construct($judul, $pencipta, $penerbit, $harga);
        $this->waktu = $waktu;

        echo "Ini memakai method class child:<br>" . $this->getLabel();
        // overriding -> memanggil method dari parent
        echo "Ini memakai method class parent:<br>" . parent::getLabel();
    }
}

// object 
$komik1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 45000, 100 . " Halaman");
$game1 = new Game("Among Us", "Forest Willard", "InnerSloth", 30000, 1 . " Jam");


//setter & getter
echo "menggunakan method setter untuk mengeset property/method yang memiliki visibility protected/private<br>";
$komik1->setLabel("Naruto", "Didin Madidin", "Shonen Jump", 45000, 100 . " Halaman");
echo "menggunakan method setter untuk mengeset property/method yang memiliki visibility protected/private<br>";
$game1->setLabel("Among Us", "Cina Loleng", "InnerSloth", 40000, 2 . " Jam");


?>