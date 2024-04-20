<?php  
//menyatukan file dengan file yang lain
require("9.functions.php");

function info_registrasi(){
    // isset(): mengembalikan false jika variabel pengujian berisi nilai NULL. 
    if(isset($_POST["register"])){
        // var_dump($_POST); //melihat isi inputan kecuali inputan file
        // var_dump($_FILES); //melihat isi dari inputan file, dengan atribut enctype="multipart/form-data" di form tambah
        // die();//die untuk tidak menjalankan script yang berada di bawahnya

        // memanggil fungsi yang ada di file 9.Functions.php 
        $registrasi = registrasi($_POST);

        // dibagian function registrasi(), terdapat return berupa int(-1) jika error, int(1) jika data sukses dimasukkan
        if($registrasi > 0){
            echo "<p style='color:red';>registrasi anda berhasil!</p>";
            header("refresh:2; url=  9.Registrasi.php");
        }else if($registrasi < 0){
            echo "<p style='color:red';>anda gagal meregistrasi!</p>";
            header("refresh:2; url=  9.Registrasi.php");
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
    <title>Halaman Registrasi</title>
</head>
<body>
    <p>Sudah punya akun? <a href="9.Login.php">Login</a></p>

    <h1>HALAMAN REGISTRASI</h1>
    
    <?php info_registrasi(); ?>

    <form action="" method="POST">
        <table>
            <tr>
                <!-- isi atribut dari for dan id harus sama  -->
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <!-- required artinya inputan password tidak boleh kosong -->
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="password2">Konfirmasi Password: </label></td>
                <td><input type="password" name="password2" id="password2"></td>
            </tr>
            <tr>
                <td><button type="submit" name="register">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>