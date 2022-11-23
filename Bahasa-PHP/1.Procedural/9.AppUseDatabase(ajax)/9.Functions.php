<?php 
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_latihan"); 


//fungsi untuk menampilkan isi setiap baris database
function tampil($query_tampil){
    // menaruh variabel global ke dalam function 
    global $conn;

    //mysqli_query = jalankan instruksi atau argumen ke mysql, ini untuk melihat data
    $result = mysqli_query($conn, $query_tampil);

    //membuat variabel array kosong
    $rows = [];

    //menambahkan setiap baris database ke variabel berbentuk array($row) ke variabel array $rows
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    //melihat database sudah terkoneksi atau belum
    echo mysqli_error($conn);//jika benar tidak akan menampilkan infomasi, jika error akan menampilkan informasi yang lengkap

    // rows menjadi array multidimensi
    return $rows;
}


//fungsi untuk menambahkan data
function tambah($mhs){//anggap $mhs = $_POST
     // menaruh variabel global ke dalam function 
    global $conn;

    //ambil data dari tiap elemen dalam form ke tiap variabel
    //fungsi htmlspecialchars() untuk mengkonversi 4 karakter 'khusus' HTML menjadi named entity sehingga tidak akan di 'proses' oleh web browser(untuk keamanan agar ketika user memasukkan syntax html, syntax html tidak akan di eksekusi)
    $nim = htmlspecialchars($mhs["nim"]);
    $nama = htmlspecialchars($mhs["nama"]);
    $jurusan = htmlspecialchars($mhs["jurusan"]);
    $email = htmlspecialchars($mhs["email"]);
    $nilaiteori = htmlspecialchars($mhs["nilaiteori"]);
    $nilaipraktek = htmlspecialchars($mhs["nilaipraktek"]);
    // apload gambar
    $profil = upload_profil();//isinya akan berupa nama gambar dimasukkan ke database
    if(!$profil/*$gambar === false*/){
        return false;
    }

    //query insert data
    $query_tambah = "INSERT INTO tbl_mahasiswa
    VALUES(''/*id*/, '$nim', '$nama', '$jurusan', '$email','$nilaiteori', '$nilaipraktek', '$profil')";//memakai '' dikarenakan sudah memakai ""

    //mysqli_query = menjalankan instruksi atau argumen ke mysql, ini untuk menambahkan data
    mysqli_query($conn, $query_tambah);

    //cek apakah data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($conn);//hasilnya berupa int(-1) = jika error, int(1) = jika benar
} 

function upload_profil(){
    $nama_file = $_FILES['profil']['name'];//'profil ada di inputan yang memiliki atribut namenya 
    $ukuran_file = $_FILES['profil']['size'];
    $error_file = $_FILES['profil']['error'];
    $tmp_file = $_FILES['profil']['tmp_name'];

    // cek upload 
    if($error_file === 4){/*tidak ada gambar yang di apload*/
        echo "<p>Anda harus memasukkan gambar!</p>";
        return false;
    }

    //mengambil ekstensi yang hanya boleh di upload user
    $ekstensi_valid = ['jpg', 'jpeg', 'png'];

    //explode(): memisahkan text(string) menjadi sebuah array
    //co: "Miftahul.jpg" -> ['Miftahul', 'jpg'] 
    $ekstensi = explode('.', $nama_file);//pemisahnya titik(.)

    // end()= mengambil elemen array yang terakhir, karna bisa saja namanya berisi miftahul.ulya.jpeg
    // strtolower()= mengubah string menjadi huruf kecil semua, karna bisa saja nama berisi miftahul.JPG
    $ekstensi = strtolower(end($ekstensi));
    
    // cek ekstensi
    //in_array()=untuk mencari isi nya misalnya: mencari tahu apakah $ekstensi ada di dalam array $ekstensi_valid, akan menghasilkan true jika ada, false jika tidak ada 
    if(!in_array($ekstensi, $ekstensi_valid)){
        echo "<p>ekstensi yang anda upload harus berupa gambar!</p>";
        return false;
    }

    // cek ukuran
    if($ukuran_file > 1000000){/*1jt byte = 1 mb, 1000 byte = 1 kb */
        echo "<p>ukuran gambar terlalu besar!</p>";
        return false;
    }

    // mengubah nama file. gambar yang berbeda tetapi memiliki nama yang sama akan membuat gambarnya tertimpa dan menghasilkan gambar yang sama(hasil akhir) 
    // uniqid(): digunakan untuk menghasilkan ID unik berdasarkan waktu mikro (waktu saat ini dalam mikrodetik
    $nama_filebaru = uniqid();
    $nama_filebaru .= '.';
    $nama_filebaru .= $ekstensi; //hasilnya akan menjadi co: 1234f3231.jpg

    //gambar siap di upload
    //move_uploaded_file(): digunakan untuk memindahkan file yang diunggah ke tujuan baru
    move_uploaded_file($tmp_file, '../../0.img/' . $nama_filebaru);//$namatmp_file ditaro ke folder img dengan nama file yang sesuai dengan $nama_file

    //kembali ke nama file agar namanya bida dimasukkan ke database, namun gambar nya ada di folder htdocs/phpdasar/img
    return $nama_filebaru;
}


//fungsi untuk menghapus data 
function hapus($id_mhs){
    global $conn;

    //query hapus data 
    $query_hapus = "DELETE FROM tbl_mahasiswa WHERE id = $id_mhs";

    //mysqli_query = menjalankan instruksi atau argumen ke mysql, ini untuk menghapus data
    mysqli_query($conn, $query_hapus);

    //cek apakah data berhasil dihapus atau tidak
    return mysqli_affected_rows($conn);//hasilnya berupa int(-1) = jika error, int(1) = jika benar
}


//fungsi untuk mengedit data
function ubah($mhs){//anggap $mhs = $_POST
    global $conn;
    //ambil data dari tiap elemen dalam form ke tiap variabel
    //fungsi htmlspecialchars() untuk mengkonversi 4 karakter 'khusus' HTML menjadi named entity sehingga tidak akan di 'proses' oleh web browser(untuk keamanan agar ketika user memasukkan syntax html, syntax html tidak akan di eksekusi)
    global $id;
    $nim = htmlspecialchars($mhs["nim"]);
    $nama = htmlspecialchars($mhs["nama"]);
    $jurusan = htmlspecialchars($mhs["jurusan"]);
    $email = htmlspecialchars($mhs["email"]);
    $nilaiteori = htmlspecialchars($mhs["nilaiteori"]);
    $nilaipraktek = htmlspecialchars($mhs["nilaipraktek"]);
    //ada di inputan baru bertype hidden
    $profillama = htmlspecialchars($mhs["profillama"]);

    //cek apakah user mengambil gambar baru atau tidak
    //jika inputan bertipe "file" dengan nama "profil" dan elemen error = 4
    if($_FILES['profil']['error'] === 4/*tidak ada file yang dimasukkan */){
        $profil = $profillama;
    }else{
        $profil = upload_profil();
    }

    //query insert data
    $query_ubah = "UPDATE tbl_mahasiswa 
    SET nim = '$nim', nama = '$nama', jurusan = '$jurusan', email = '$email', nilaiteori = '$nilaiteori', nilaipraktek = '$nilaipraktek', profil = '$profil'
    WHERE id = '$id'";//memakai '' dikarenakan sudah memakai ""

    //mysqli_query = menjalankan instruksi atau argumen ke mysql, ini untuk menambahkan data
    mysqli_query($conn, $query_ubah);

    //cek apakah data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($conn);//hasilnya berupa int(-1) = jika error, int(1) = jika benar
}


function cari($keyword){//$_POST["keyword"]
    // query % untuk mencari nama dengan huruf yang sama 
    // query LIKE untuk menampilkan nama yang mirip
    $query_cari = "SELECT * FROM tbl_mahasiswa 
    WHERE nim LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR email LIKE '%$keyword%'";
    
    //fungsi tampil() ada di file ini
    return tampil($query_cari);
}


function registrasi($user){//$user = $_POST
    global $conn;

    // stripslashes(): menghilangkan karakter backslashes tanda garis miring terbalik ("\")
    // strtolower(): membuat tulisan menjadi huruf kecil 
    $username = htmlspecialchars(strtolower(stripslashes($user["username"])));
    // mysqli_real_escape_string(): digunakan untuk memberi backslash di beberapa kode untuk ditampilkan pada halaman, namun saat menyimpan menuju sql, kode akan tetap normal tanpa ada backslash
    $password = mysqli_real_escape_string($conn, $user["password"]);
    $password2 = mysqli_real_escape_string($conn, $user["password2"]);

    // cek duplicate username
    $query_cari_kesamaan_username = "SELECT username FROM tbl_user WHERE username='$username'";
    $result = mysqli_query($conn,$query_cari_kesamaan_username);

    if(mysqli_fetch_assoc($result)){
        echo "<p>Username yang dipilih sudah terdaftar!</p>";
        return false;//memberhentikan function
    }else if($password !== $password2){
        echo "<p>konfirmasi password tidak sesuai!</p>";
        return false;//memberhentikan function
    }else{
        //enskripsi password (jangan memakai MD5), karna sudah bisa di copy dan di lihat di google
        $password = password_hash($password, PASSWORD_DEFAULT); //mengacak $password dengan algoritma PASSWORD_DEFAULT
        
        $query_tambah_user = "INSERT INTO tbl_user
        VALUES(''/* id */, '$username', '$password')";

        mysqli_query($conn, $query_tambah_user);

        return mysqli_affected_rows($conn);
    }
}


function session_diterima(){
    // session adalah sebuah variabel array kosong untuk digunakan di beberapa halaman
    // nilai akan terus tersimpan ke dalam server sampai komputer mati/terestart/web browser ter close 
    session_start();//saat memakai session harus menjalankan fungsinya dahulu
    
    // pengecekan session login 
    if( isset($_SESSION["login"])){
        header("Location: 9.Tampil&Hapus_Mahasiswa.php");
        exit();
    }
}

function session_keamanan(){
    session_start();//saat memakai session harus menjalankan fungsinya dahulu

    // pengecekan session login 
    if( !isset($_SESSION["login"]) ){
        header("Location: 9.Login.php");
        exit;
    }
}

function session_hapus(){
    session_start();//saat memakai session harus menjalankan fungsinya dahulu

    //membuat session benar benar kosong
    // $_SESSION = [];
    // hanya untuk memastikan bahwa session kosong /
    // session_unset();
    //session_destroy();// fungsi untuk menghapus session yang ada
    session_destroy();
    
    // hapus cookie 
    setcookie("id", "", time() - 3600);
    setcookie("username", "", time() - 3600);


    header("Location: 9.Login.php");
    exit;
}

function cookie_diterima(){
    //cookie(): adalah sebuah variabel array kosong 
    // nilai akan terus tersimpan ke dalam client sampai komputer mati/terestart/web browser ter close(jika tidak di set waktu berlaku)/sesuai waktu berlaku
    if( isset($_COOKIE['id']) && isset($_COOKIE['username']) ){
        $id = $_COOKIE['id'];
        $username = $_COOKIE['username'];

        //menggunakan fungsi tampil dengan filter id, kemudian tampilkan index pertama, fungsi ini hanya untuk menampilkan nilai dari form ubah mahasiswa
        $tampil_user_byid = tampil("SELECT * FROM tbl_user WHERE id = $id")[0];
        
        // cek kesamaan usernamedengan yang ada di database 
        if( $username === hash("sha256", $tampil_user_byid["username"])){
            //memberi izin masuk ke halaman
            session_start();
            $_SESSION['login'] = true;
        }
    }
}


?>