<?php 
require("9.functions.php");

// cek apakah ada cookie atau tidak 
cookie_diterima(); 

// cek apakah ada session atau tidak 
session_diterima();

function info_login(){
    global $conn;

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        //cek username apakah ada di database atau tidak
        $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username'");
        if(mysqli_num_rows($result) === 1){//mengembalikan nilai int(1) jika benar, int(0) jika salah
            //mengambil 1 baris yang password nya sesuai dengan yang ada di database 
            $row = mysqli_fetch_assoc($result);
            // mengecek isi $password sesuai dengan $row['password'] 
            if(password_verify($password, $row["password"])){
                //===masuk memakai cookie
                if(isset($_POST["remember"])){
                    // buat coookie setcookie("nama index", "value", "masa berlaku")
                    setcookie("id", $row['id'], time() + 60);
                    // hash(): untuk mengacak string dengan syntax hash("algoritma pengacakan", "variabel yang ingin di acak"); 
                    setcookie("username", hash("sha256", $row['username']), time() + 60);
                    // fungsi refresh untuk membaca cookie yang masuk 
                    header("Refresh:0");
                }else{
                    //===masuk tidak memakai cookie
                    // jika/ $password sesuai dengan $row['password'] maka masukkan nilai ke session_diterima();
                    $_SESSION["login"] = true;
                    // fungsi refresh untuk membaca session yang masuk 
                    header("Refresh:0");
                }
            }
        }else{
            echo "<p style='color: red;'>Username atau Password yang anda masukkan salah!</p>";
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
    <title>Document</title>
</head>
<body>
    <p>Belum punya akun? <a href="9.Registrasi.php">Registrasi</a></p>
    <h1>HALAMAN LOGIN</h1>

    <?php info_login(); ?>

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
                <td colspan="2"><input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label></td>
            </tr>
            <tr>
                <th><button type="submit" name="login">Login</button></th>
            </tr>
        </table>
    </form>
</body>
</html>