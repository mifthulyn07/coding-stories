<?php
//menyatukan file dengan file yang lain 
require("9.Functions.php");

// fungsi ada di file "9.Functions.php" 
session_keamanan();

function info_tambah_mhs(){
    // isset(): mengembalikan false jika variabel pengujian berisi nilai NULL. 
    if(isset($_POST["submit"])){
        // var_dump($_POST); //melihat isi inputan kecuali inputan file
        // var_dump($_FILES); //melihat isi dari inputan file, dengan atribut enctype="multipart/form-data" di form tambah
        // die();//die untuk tidak menjalankan script yang berada di bawahnya

        // fungsi ada di file "9.Functions.php" 
        $tambah_mhs = tambah($_POST);

        //dibagian function tambah(), terdapat return berupa int(-1) jika error, int(1) jika data sukses dimasukkan
        if($tambah_mhs > 0){
            echo "<p style='color:red';>Data berhasil di masukkan!</p>";
            header("refresh:2; url=  9.Tambah_Mahasiswa.php");
        }else if($tambah_mhs < 0){
            echo "<p style='color:red';>Data gagal dimasukkan!</p>";
            header("refresh:2; url=  9.Tambah_Mahasiswa.php");
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <a href="9.Tampil&Hapus_Mahasiswa.php">Kembali</a>

    <h1>TAMBAH DATA MAHASISWA</h1>

    <!-- melihat informasi apakah data berhasil atau tidak ditambahkan -->
    <?php info_tambah_mhs(); ?>

    <!-- memilih method post agar datanya tidak tampil di url  -->
    <!-- atribut multipart/form-data akan mengelola inputan dengan type="file"  -->
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <!-- isi atribut dari for dan id harus sama  -->
                <td><label for="nim">NIM: </label></td>
                <!-- required artinya inputan nama tidak boleh kosong -->
                <td><input type="text" name="nim" id="nim" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan: </label></td>
                <td><input type="text" name="jurusan" id="jurusan"></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Nilai: </td>
            </tr>
            <tr>
                <td></td>
                <td><li><label for="nilaiteori">Nilai Teori: </label></li></td>
                <td><input type="numberic" name="nilaiteori" id="nilaiteori"></td>
            </tr>
            <tr>
                <td></td>
                <td><li><label for="nilaipraktek">Nilai Praktek: </label></li></td>
                <td><input type="text" name="nilaipraktek" id="nilaipraktek"></td>
            </tr>
            <tr>
                <td><label for="profil">Foto Profil: </label></td>
                <td><input type="file" name="profil" id="profil"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form>
</body>
</html>