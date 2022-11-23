<?php 
// menghubungkan php dengan database
// 1. Ekstensi MySQL = fungsi2 yang ada di php untuk memanipulasi database(versi lama)
// 2. Ekstensi Mysqli = fungsi2 yang ada di php untuk memanipulasi database(versi yang telah di perbarui)
// 3. PDO (Php Data Object) = untuk terhubung ke banyak database 
//koneksi ke database
// syntax: mysqli_connect("Host", "username", "password", "database");
$conn = mysqli_connect("localhost", "root", "", "db_latihan");



//melakukan query terhadap database, memasukkan database dan tablenya
// syntax: mysqli_query("koneksiDatabase", "sytax sql untuk melihat table") 
$result = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");



// melihat informasi database bisa di jalankan atau tidak
// cara1
echo "1. Informasi Database: <br>";
var_dump($result);//hasil berupa array jika benar, dan boleean jika salah
// cara2
echo "<br><br>2. Informasi Database: <br>";
echo mysqli_error($conn);//jika benar tidak akan menampilkan infomasi, jika salah akan menampilkan informasi yang lengkap 



//ambil data dari table mahasiswa(fetch): hanya mengambil perbaris
// 1.mysqli_fetch_row(): hasilnya berbentuk array numeric(array berindex angka)
// echo '<hr>1. mengambil data mahasiswa menggunakan mysqli_fetch_row(): <br>';
// $mhs1 = mysqli_fetch_row($result);
// var_dump($mhs1);
// echo '<br>(*) Melihat data mahasiswa $mhs1[2]: ' , $mhs1[2];
// // 2.mysqli_fetch_assoc(): hasilnya berbentuk array assosiative(array berinde string)
// echo '<br><br>2. mengambil data mahasiswa menggunakan mysqli_fetch_assoc(): <br>';
// $mhs2 = mysqli_fetch_assoc($result);
// var_dump($mhs2);
// echo '<br>(*) Melihat data mahasiswa $mhs2["nama]: ' , $mhs2["nama"];
// // 3.mysqli_fetch_array(): hasilnya berbentuk array numeric & arrau assosiative
// echo '<br><br>3. mengambil data mahasiswa menggunakan mysqli_fetch_array(): <br>';
// $mhs3 = mysqli_fetch_array($result);
// var_dump($mhs3);
// echo '<br>(*) Melihat data mahasiswa $mhs3[2]: ' , $mhs3[2];
// echo '<br>(*) Melihat data mahasiswa $mhs3["nama"]: ' , $mhs3["nama"];
// // 4.mysqli_fetch_object(): hasilnya berbentuk object
// echo '<br><br>4. mengambil data mahasiswa menggunakan mysqli_fetch_object(): <br>';
// $mhs4 = mysqli_fetch_object($result);
// var_dump($mhs4);
// echo '<br>(*) Melihat data mahasiswa $mhs4->nama: ' , $mhs4->nama;

// echo "<br><br>menampilkan semua data mahasiswa: <br>";
// while($paramhs = mysqli_fetch_assoc($result)){
//     var_dump($paramhs);
// }
// nb: dimatikan menjadi comment dikarenakan dia tidak bisa membuka 2x


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Jurusan</th>
            <th rowspan="2">Email</th>
            <th colspan="2">Nilai</th>
            <th rowspan="2">Profil</th>
            <th rowspan="2">Aksi</th>
        </tr>
        <tr>
            <th>Teori</th>
            <th>Praktek</th>
        </tr>
        <?php $i=1; ?>
        <?php while($mhs = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["nilaiteori"]; ?></td>
            <td><?= $mhs["nilaipraktek"]; ?></td>
            <!-- gambar harus berada dalam htdocs -->
            <td><img src="../0.img/<?= $mhs["profil"];?>" alt="Profil Mahasiswa"></td>
            <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>