<?php
// isset(): digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum
if ($_POST["username"] != "mifthulyn07@gmail.com" && $_POST["password"] != "admin") {
    //redirect : memindahkan halaman ke halaman sebelumnya
    //memaksa user untuk pindah halaman awal jika username dan password tidak benar
    header("Location: 7.GetPost.php");
    exit;
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
    <a href="7.GetPost.php">Logout</a>
    <h1>Selamat Datang, <?php echo $_POST["username"]; ?></h1>
</body>

</html>