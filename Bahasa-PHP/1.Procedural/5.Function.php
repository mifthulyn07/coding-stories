<?php
echo "===1.BUILD IN FANCTION <br>";
echo "1. date() <br>";
// date untuk menampilkan tanggal tertentu
// l=hari
// d(date)=tanggal angka
// m(month)=bulan(angka)
// y(year)=tahun
echo 'date("l, d-m-y"): ', date("l, d-m-y"), "<br>";
echo 'date("l, D-M-Y"): ', date("l, D-M-Y"), "<br><br>";

echo "2. time(): <br>";
echo 'time(): ', time(), ", detik yang sudah berlalu sejak 1 januari 1970 (UNIX TIMESTAMP/EPOCH TIME) <br>";
echo "contoh: mengetahui hari ini: ", date("l", time()), "<br>";
echo "contoh: menghitung seratus hari dari hari ini: ", date("l", time() + (60/*detik*/ * 60/*menit*/ * 24/*jam*/ * 10/*hari yang kita prediksi*/)), "<br><br>";

echo "3. mktime(): <br>";
echo "mktime(jam, menit, detik, bulan, tanggal, tahun): membuat sendiri detik yang  sudah berlalu dari 1 januari 1970 sampai 21 juli 2001 <br>";
echo "contoh: melihat detik yang sudah berlalu dari 1/1/1970 - 21/7/2001: ", mktime(0, 0, 0, 7, 21, 2001), "<br>";
echo "contoh: cek hari kelahiran saya yaitu: ", date("l", mktime(0, 0, 0, 7, 21, 2001)), "<br><br>";

echo "3. strtotime(): <br>";
echo 'strtotime("tanggal bulan tahun"): sama seperti mktime() namun masukkannya berbentuk string <br>';
echo "contoh: melihat detik yang sudah berlalu dari 1/1/1970 - 21/7/2001: ", strtotime("21 july 2001"), "<br>";
echo "contoh: cek hari kelahiran saya yaitu: ", date("l", strtotime("21 july 2001")), "<br><br>";

//fungsi string
// strlen(): menghitung panjang sebuah string
// strcmp(): membandingkan 2 buah string
// explode(): memecah sebuah string menjadi array
// htmlspecialchars(): untuk menjaga dari hacker


// utility: fungsi bantuan
// var_dump(): mencetak isi dari variable, objek, array
// isset(): mengecek apakah sebuah variabel sudah pernah dibuat
// empty(): apakah variabel yang ada, kosong atau tidak
// die(): memberhentikan program kita
// sleep(): memberhentikn program sementara

// nb: jika ingin tahu lebih tentang build in function, lihat di website php documentation

echo "===2.USER-DEFINED FUNCTION"; //fungsi yang kita buat sendiri

function salam()
{
	return "assalamu'alaikum";
}
function salam1($waktu, $nama)
{
	return "selamat $waktu, $nama";
}
function salam2($waktu = "Ulang Tahun", $nama = "Miftahul")
{
	return "selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>LATIHAN FUNCTION</h1>
	<p><?= salam(); ?> </p>
	<p><?= salam1("pagi", "miftah"); ?> </p>
	<p><?= salam2(); ?> </p>
</body>

</html>