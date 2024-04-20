<?php 
// file ini akan menampilkan jika ivent javascript dijalankan 
require("9.Functions.php");

// diambil dari 9.Script.js (ajax)
$keyword = $_GET["keyword"];

$query_cari = "SELECT * FROM tbl_mahasiswa 
    WHERE nim LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR email LIKE '%$keyword%'";

$para_mhs = tampil($query_cari);


?>

<table id="table" border="1" cellpadding="10" cellspacing="0">
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
    <?php foreach($para_mhs as $mhs):?>
    <tr>
        <td><?= $i++; ?></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["nilaiteori"]; ?></td>
        <td><?= $mhs["nilaipraktek"]; ?></td>
        <!-- gambar harus berada di dalam htdocs -->
        <td><img src="../../0.img/<?= $mhs["profil"];?>" alt="Profil Mahasiswa"></td>
        <td>
            <!-- mengirimkan data id menggunakan $_GET melalui link -->
            <a  href="9.Ubah_Mahasiswa.php?id=<?php echo $mhs['id']?>">Ubah</a> | 
            <!-- mengirimkan data id menggunakan $_GET melalui link -->
            <!-- menjalankan fungsi javascript confirm(), popup -->
            <a  href="9.Tampil&Hapus_Mahasiswa.php?id=<?php echo $mhs['id'];?>" 
                onclick="return confirm('Apakah anda yakin ingin menghapus <?php echo $mhs['nama'];?>');">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
