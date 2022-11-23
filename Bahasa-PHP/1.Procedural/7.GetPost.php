<?php
echo "===VARIABEL SCOPE <br>";
$x = "ini variabel x di luar function <br>";
function tampilx()
{
    $x = "ini variabel x di dalam function <br>"; //ini variabel local 
    global $x; //mencari variabel yang ada diluar lingkup function
    echo $x;
}
echo $x;
tampilx();

// variabel superglobal = merupakan array assosiative
// 1. $_GET = array yang tidak berisi
// 2. $_POST
// 3. $_REQUEST
// 4. $_SESSION
// 5. $_COOKIE
// 6. $_SERVER = array yang berisi
// 7. $_ENV
// 8. dll

// var_dump($_SERVER);
echo "<br>Melihat nama server: ", $_SERVER["SERVER_NAME"];
echo '<br>melihat isi $_GET: ';
var_dump($_GET);

echo '<br><br><br>===$_GET <br>';
echo '1. mengisi array $_GET di file php: <br>';
$_GET["nama"] = "Miftahul Ulyana Hutabarat"; //mengisi array $_GET
var_dump($_GET);
echo '<br><br>2. mengisi array $_GET di alamat link dengan menambahkan di akhir link "?nim=0702192031&jurusan=Sistem Informasi" <br>';
var_dump($_GET);

echo '<br><br><br>===$_POST <br>';
echo '1. mengisi array $_GET di file php: <br>';
$_GET["nama"] = "Miftahul Ulyana Hutabarat"; //mengisi array $_GET
var_dump($_GET);
echo '<br><br>2. mengisi array $_GET di alamat link dengan menambahkan di akhir link "?nim=0702192031&jurusan=Sistem Informasi" <br>';
var_dump($_GET);
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
    <?php
    //memakai array associative untuk menandai
    $paramahasiswa = [
        [
            "nama" => "Miftahul Ulyana Hutabarat",
            "nim" => "0702192031",
            "jurusan" => "Sistem Infomasi",
            "email" => "mifthulyn07@gmail.com",
            "nilai" => [90, 95]
        ],
        [
            "nama" => "Nurli Masito Lubis",
            "jurusan" => "Sistem Informatika",
            "nim" => "0702192032",
            "email" => "nurlilubis04@gmail.com",
            "nilai" => [90, 85]
        ],
        [
            "nama" => "Husnida Putriyana",
            "jurusan" => "Ilmu Komputer",
            "email" => "mrshph03@gmail.com",
            "nim" => "0702192033",
            "nilai" => [95, 80]
        ],
        [
            "nim" => "0702192034",
            "nama" => "Husnul Khotimah",
            "email" => "husnulkhotimah@gmail.com",
            "jurusan" => "Teknik Informatika",
            "nilai" => [80, 95]
        ]
    ];
    ?>
    <h1>DATA MAHASISWA MENGIRIM LEWAT $_GET</h1>
    <ol>
        <?php foreach ($paramahasiswa as $mahasiswa) : ?>
            <li>
                <!-- memasukkan data array paramahasiswa ke $_GET melalui link  -->
                <a href="7.Get_DetailMahasiswa.php?
                nama=<?php echo $mahasiswa["nama"]; ?>&
                nim=<?php echo $mahasiswa["nim"]; ?>&
                jurusan=<?php echo $mahasiswa["jurusan"]; ?>&
                email=<?php echo $mahasiswa["email"]; ?>&
                nilai[0]=<?php echo $mahasiswa["nilai"][0]; ?>&
                nilai[1]=<?php echo $mahasiswa["nilai"][1]; ?>">
                    <!-- hanya menampilkan nama saja -->
                    <?php echo $mahasiswa["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>



    <?php
    // isset(): digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum
    if (isset($_POST["submit"])) { //mengecek apakah tombol submit sudah ditekan atau tidak
        if ($_POST["username"] != "mifthulyn07@gmail.com" && $_POST["password"] != "admin") {
            $error = true;
        }
    }
    ?>
    <h1>FORM LOGIN MENGGUNAKAN VARIABEL $_POST</h1>
    <!-- tidak bisa run karna telah d restart ulang ke halaman ini kembali lewat syntax di 7.Post_Home.php  -->
    <?php if (isset($error)) : ?>
        <p style="color:red;">Username atau Password salah!</p>
    <?php endif; ?>

    <!-- method bisa berupa post maupun get(not recommended) -->
    <!-- jangan pernah membuat login form memakai get, karna data bisa diambil melewati link  -->
    <form action="7.Post_Home.php" method="post">
        <!-- atribute name di input sangat penting untuk ditangkap oleh variabel $_POST menjadi nama index(array assosiative) -->
        <table border="1">
            <tr>
                <!-- atribut "for" di label harus sama dengan "id" di input -->
                <!-- kita bisa lihat perubahan "for" dan "id" ketika mengklik label nama, maka langsund fokus ke inputan(inputan bewarna biru) -->
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <th colspan="2"><button type="submit" name="submit">Login</button></th>
            </tr>
        </table>
    </form>
</body>

</html>