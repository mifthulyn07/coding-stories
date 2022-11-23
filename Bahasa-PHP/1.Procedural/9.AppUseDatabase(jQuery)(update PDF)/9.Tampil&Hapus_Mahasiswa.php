<?php 
//menyatukan file dengan file yang lain
require("9.Functions.php");//memproduksi fatal error yang akan memberhentikan alur kerja program yang artinya kode program selanjutnya tidak akan pernah dieksekusi.
//include "9.Functions.php";//memproduksi error warning, yang mana kode program selanjutnya masih akan tetap dieksekusi

// fungsi ada di file "9.Functions.php" 
session_keamanan();

function pagination(){
    // Pagination adalah proses membagi konten, atau bagian dari konten yang ada di situs web, menjadi beberapa halaman terpisah 
    
    $jmlDataPerPage = 3;

    // menghitung jumlah data yang ada di database 
    // cara 1
    // $result = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
    // $jmlMhs = mysqli_num_rows($result);//menghasilkan berapa banyak data di table database
    // cara 2 
    $jmlMhs = count(tampil("SELECT * FROM tbl_mahasiswa"));
    
    // round(): membulatkan pecahan ke bilangan terdekat 
    // floor(): membulatkan pecahan ke bawah 
    // ceil(): membulatkan ke atas 
    global $jmlPage;
    $jmlPage = ceil($jmlMhs / $jmlDataPerPage);
    
    // mengganti halaman menggunakan $_GET 
    // cara 1 menggunakan if else biasa 
    // if(isset($_GET["page"])){
    //     $pageAktif = $_GET["page"];
    // }else{
    //     $pageAktif = 1;
    // }
    // cara 2 menggunakan pengkondisian ternary
    global $pageAktif; 
    $pageAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;

    $awalData = ($jmlDataPerPage * $pageAktif) - $jmlDataPerPage;
    
    global $para_mhs;
    // fungsi ada di file "9.Functions.php" 
    // ASC = kecil ke besar, DESC = besar ke kecil
    // LIMIT 1, 2 = tampilkan 2 data mulai dari indeks ke 1 
    return $para_mhs = tampil("SELECT * FROM tbl_mahasiswa ORDER BY id DESC LIMIT $awalData, $jmlDataPerPage");
}
pagination();

function info_hapus_mhs(){
    // isset(): mengembalikan false jika variabel pengujian berisi nilai NULL. 
    if(isset($_GET["id"])){
        // fungsi ada di file "9.Functions.php" 
        $hapus_mhs = hapus($_GET["id"]);
        
        //di function hapus_mhs, terdapat return berupa int(-1) jika error, int(1) jika data sukses dihapus
        if($hapus_mhs > 0){
            echo "<p style='color:red';>Data berhasil di hapus!</p>";
            header("refresh:1; url= 9.Tampil&Hapus_Mahasiswa.php");// merefresh kembali halaman setelah 1 detik
        }else{
            echo "<p style='color:red';>Data gagal dihapus!</p>";
            header("refresh:1; url= 9.Tampil&Hapus_Mahasiswa.php");
        }
    }
}

// isset(): mengembalikan false jika variabel pengujian berisi nilai NULL. 
if(isset($_POST["search"])){
    // fungsi ada di file "9.Functions.php" 
    $para_mhs = cari($_POST["keyword"]);
}
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

        /* untuk mengeprint data berbentuk pdf melalui web browser*/
        @media print{
            .hideForPDF{
                display: none;
            }
        }
    </style>
</head>
<body>
    <a href="9.Logout.php" class="hideForPDF">Logout</a>

    <h1>DAFTAR MAHASISWA</h1>

    <!-- melihat informasi apakah data berhasil atau tidak dihapus -->
    <?php info_hapus_mhs(); ?>

    <a href="9.Tambah_Mahasiswa.php" class="hideForPDF">Tambah</a>
    <br><br>

    <form action="" method="POST" class="hideForPDF">
        <!-- autocomplte untuk mematikan histori pencarian -->
        <input type="text" name="keyword" id="keyword" size="30" autofocus placeholder="Masukkan keyword" autocomplete="off">
        <button type="submit" name="search" id="search">Cari</button>
    </form>

    <br>
    
    <!-- untuk pagination  -->
    <?php if ($pageAktif > 1) :?>
        <a class="pagination" href="?page=<?= $pageAktif - 1;?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i=1; $i<=$jmlPage; $i++): ?>
        <?php if ($pageAktif == $i):?>
            <a class="pagination" style="color: red;" href="?page=<?= $i ?>"><?= $i ?></a>
        <?php else: ?>
            <a class="pagination" href="?page=<?= $i ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($pageAktif < $jmlPage) :?>
        <a class="pagination" href="?page=<?= $pageAktif + 1;?>">&raquo;</a>
    <?php endif; ?>


    <br>
    <table id="table" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Jurusan</th>
            <th rowspan="2">Email</th>
            <th colspan="2">Nilai</th>
            <th rowspan="2">Profil</th>
            <th rowspan="2" class="hideForPDF">Aksi</th>
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
            <td class="hideForPDF">
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

    <!-- jQuery harus sebelum script file kita -->
    <script src="9.jQuery-3.6.0.js"></script>
    <script src="9.Script(jQuery).js"></script>
</body>
</html>