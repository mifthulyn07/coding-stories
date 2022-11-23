<!-- mengunci histori login, memvalidasi login, artinya ini harus login dulu baru ke halaman home -->
<?php 
session_start();

if(!isset($_SESSION['username'])){//jika tidak ada session username yang disimpan maka akn menuju ke halaman login
	header("location:login.php");
}
?> 