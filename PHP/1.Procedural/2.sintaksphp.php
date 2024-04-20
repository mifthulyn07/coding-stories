<!-- standar output (echo, print, print_r, var_dump) -->
<?php 
// echo digunakan HANYA sekedar untuk mencetak output ke browser, tidak ada tujuan lain
echo  "1. echo: digunakan HANYA sekedar untuk mencetak output ke browser <br>";
// print hanya dapat menerima satu argumen, sehingga kita tidak bisa menulis: print: 'Nama ' , $nama
print "2. print: hanya dapat menerima satu argumen <br>";
// print_r sama seperti statement sebelumnya, ini ditujukan untuk mencetak nilai variabel dengan format yang lebih mudah dibaca 
print_r ("3. print_r: ditujukan untuk mencetak nilai variabel dengan format yang lebih mudah dibaca, biasanya untuk array <br>");
// var_dump digunakan hanya untuk proses debugging, dimana kita ingin mengetahui struktur informasi (nilai dan tipe data) dari suatu variabel
var_dump("4.var_dump: igunakan hanya untuk proses debugging, dimana kita ingin mengetahui struktur informasi (nilai dan tipe data) dari suatu variabel <br>");
?>


<!-- penulisan syntax php(php didalam html atau html di dalam php) -->
<!DOCTYPE html>
<html>
<head>
	<title>Belajarphp</title>
</head>
<body>
	<!-- 1.php di dalam html -->
	<h1>Halo, <?php echo "Ini merupakan php di dalamm HTML";?></h1>
	<!-- 2.html di dalam php (not recommended)-->
	<?php 
	echo "<h1>halo, Ini merupakan HTML di dalam php</h1>"
	?>
</body>
</html>


<?php 
echo "===PENGGABUNGAN STRING=== <br>";
$nama_depan = "Miftahul";
$nama_belakang ="Ulyana";
echo "$nama_depan $nama_belakang, bisa langsung pakai kutip dua. <br>";
echo $nama_depan . " " . $nama_belakang . ", pakai tanda titik agar menyatu<br>";
echo '$nama_depan $nama_belakang, ini pakai tanda kutip satu <br><br><br>';
?>


<?php 
echo "===OPERATOR=== <br>"; 
echo "1. Aritmatika (+, -, /, *, %) <br>";
$x=8; $y=5;
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x % $y = " . ($x % $y) . "<br><br>";
?>


<?php  
echo "2. Operator Assignment(=, +=, -=, *=, /=, %=, .=) <br>";
$a = 1;
echo "a = $a <br>";
echo "a += 5 = " . ($a += 5) . "<br>";
echo "a -= 5 = " . ($a -= 5) . "<br>";
echo "a *= 5 = " . ($a *= 5) . "<br>";
echo "a /= 5 = " . ($a /= 5) . "<br>";
echo "a %= 5 = " . ($a %= 5) . "<br>";
$nama = "Miftahul";
$nama .= " ";
$nama .= "Ulyana Hutabarat";
echo "$nama <br><br>";

?>


<?php 
echo "3. Operator Perbandingan(<, >, <=, >=, == ) <br>";
echo "1 < 5 = "; var_dump(1<5); echo "<br>";
echo "1 > 5 = "; var_dump(1>5); echo "<br>";
echo "1 <= 5 = "; var_dump(1<=5); echo "<br>";
echo "1 >= 5 = "; var_dump(1>=5); echo "<br>";
echo "1 == 5 = "; var_dump(1==5); echo "<br><br>";
?>


<?php 
echo "4. Operator Identitas(===, !==): mengecek tipe data <br>";
echo "1 === '1' = "; var_dump(1 === "1"); echo "<br>";
echo "1 !== '1' = "; var_dump(1 !== "1"); echo "<br><br>";
?>


<?php 
echo "5. Operator Logika(&&, ||, !, xor) <br>";
echo "1 && 1 = "; var_dump(1 && 1); echo "<br>";
echo "1 || 0 = "; var_dump(1 || 0); echo "<br>";
echo "0 xor 0 = "; var_dump(0 xor 0); echo "<br>";
echo "!1 = "; var_dump(!1); echo "<br>";
?>