<?php
//menyatukan file dengan file yang lain
require("9.Functions.php");

// fungsi ada di file "9.Functions.php" 
session_keamanan();

//mangabil id dari variabel $_GET melalui link ubah yang ada di 9.Tampil$Hapus_Mahasiswa.php
// isset(): mengembalikan false jika variabel pengujian berisi nilai NULL. 
if(isset($_GET["id"])){
    $id = $_GET["id"];

    //menggunakan fungsi tampil() dengan filter id, kemudian tampilkan index pertama, fungsi ini hanya untuk menampilkan nilai dari form ubah mahasiswa
    $tampil_mhs_byid = tampil("SELECT * FROM tbl_mahasiswa WHERE id = $id")[0];
}else{
    header("Location: 9.Tampil&Hapus_Mahasiswa.php");
} 

function info_ubah_mhs(){
    // isset(): mengembalikan false jika variabel pengujian berisi nilai NULL. 
    if(isset($_POST["submit"])){
        // fungsi ada di file "9.Functions.php" 
        $ubah_mhs = ubah($_POST);

        //dibagian function ubah(), terdapat return berupa int(-1) jika error, int(1) jika data sukses dimasukkan
        if($ubah_mhs > 0){
            header("refresh:1; url=  9.Tampil&Hapus_Mahasiswa.php");
            echo "<p style='color:red';>Data berhasil di ubah!</p>";
        }else if($ubah_mhs === 0){
            header("refresh:1; url=  9.Tampil&Hapus_Mahasiswa.php");
            echo "<p style='color:red';>Tidak ada data yang diubah!</p>";
        }else if($ubah_mhs < 0){
            header("refresh:1; url=  9.Tampil&Hapus_Mahasiswa.php");
            echo "<p style='color:red';>Data gagal di ubah!</p>";
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
    <title>Ubah Mahasiswa</title>
</head>
<body>
    <a href=" 9.Tampil&Hapus_Mahasiswa.php">Kembali</a>

    <h1>UBAH DATA MAHASISWA</h1>

    <!-- melihat informasi apakah data berhasil atau tidak diubah -->
    <?php info_ubah_mhs(); ?>

    <!-- memilih method post agar datanya tidak tampil di url  -->
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="profillama" value="<?= $tampil_mhs_byid['profil']?>" >
        <table>
            <tr>
                <!-- isi atribut dari for dan id harus sama  -->
                <td><label for="nim">NIM: </label></td>
                <td><input type="text" name="nim" id="nim" required value="<?php echo $tampil_mhs_byid["nim"];?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <!-- required artinya inputan nama tidak boleh kosong -->
                <td><input type="text" name="nama" id="nama" required value="<?php echo $tampil_mhs_byid["nama"];?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan: </label></td>
                <td><input type="text" name="jurusan" id="jurusan" value="<?php echo $tampil_mhs_byid["jurusan"];?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="text" name="email" id="email" value="<?php echo $tampil_mhs_byid["email"];?>"></td>
            </tr>
            <tr>
                <td>Nilai: </td>
            </tr>
            <tr>
                <td></td>
                <td><li><label for="nilaiteori">Nilai Teori: </label></li></td>
                <td><input type="numberic" name="nilaiteori" id="nilaiteori" value="<?php echo $tampil_mhs_byid["nilaiteori"];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><li><label for="nilaipraktek">Nilai Praktek: </label></li></td>
                <td><input type="text" name="nilaipraktek" id="nilaipraktek" value="<?php echo $tampil_mhs_byid["nilaipraktek"];?>"></td>
            </tr>
            <tr>
                <td><label for="profil">Foto Profil: </label></td>
                <td><img width="130px" src="../../0.img/<?= $tampil_mhs_byid["profil"]; ?>" alt="profil"></td>
                <td><input type="file" name="profil" id="profil"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form>
</body>
</html>