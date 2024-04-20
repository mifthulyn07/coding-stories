<?php
// isset(): digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum
if (
    //cara baca: jika variabel $_GET belum diisi
    !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"][0]) ||
    !isset($_GET["nilai"][1])
) {
    //redirect : memindahkan halaman ke halaman lain
    header("Location: 7.GetPost.php");
    exit;
    //memaksa user untuk pindah halaman utama jika variable $_GET tidak berisi apapun
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="7.GetPost.php">Kembali</a>
    <h1>MENGAMBIL DETAIL MAHASISWA MELALUI VARIABLE $_GET MELEWATI LINK</h1>
    <ol>
        <li>Nama: <?php echo $_GET["nama"]; ?></li>
        <li>NIM: <?php echo $_GET["nim"]; ?></li>
        <li>Jurusan: <?php echo $_GET["jurusan"]; ?></li>
        <li>Email: <?php echo $_GET["email"]; ?></li>
        <li>Nilai: </li>
        <ul>
            <li>Teori: <?php echo $_GET["nilai"][0]; ?></li>
            <li>Praktek: <?php echo $_GET["nilai"][1]; ?></li>
        </ul>
    </ol>
</body>

</html>