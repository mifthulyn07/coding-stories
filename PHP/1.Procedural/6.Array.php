<?php
//array: sebuah variabel yang dapat memiliki banyak nilai
// pembuatan array dengan cara lama 
$bulan = array("january", "february", "maret");
// pembuatan array dengan cara baru 
$hari = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu"];
$arr = [12, "tulisan", false];

echo "menampilkan semua elemen array tidak bisa memakai echo!!! melainkan memakai print_r()/var_dump() <br>";
echo "echo: hanya menampilkan 1 elemen pada array <br>";
echo 'contohnya: $hari[2] = ', $hari[2], "<br><br>";

echo "var_dump(): menyebutkan tipe datanya <br>";
var_dump($arr);

echo "<br><br>print_r(): lebih ringkas dan tidak menyebutkan tipe datanya<br>";
print_r($hari);

echo "<br><br><br>===MANIPULASI PADA ARRAY <br>";
echo 'hari = ';
print_r($hari);

echo '<br><br>1. Menambahkan elemen baru pada array:<br>';
$hari[] = "minggu"; //menambahkan elemen baru di akhir array
echo 'hari[] = minggu <br> hari = ';
print_r($hari);

echo '<br><br>2. Mengganti isi dari index array:<br>';
$hari[5] = "ultahku"; //menambahkan elemen baru di akhir array
echo 'hari[5]  = ultahku <br> hari = ';
print_r($hari);

echo "<br><br><br>===MENAMPILKAN ARRAY MENGGUNAKAN PENGULANGAN (FOR/FOREACH) <br>";
$books = ["gambar", "tulis", "agama", "penjas", "biologi"];
echo "1.Menampilkan data menggunakan for <br>";
for ($i = 0; $i < count($books); $i++) {
	echo "$books[$i] <br>";
}
echo "<br> 2.Menampilkan data menggunakan foreach <br>";
foreach ($books as $book) {
	echo "$book <br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Mahasiswa</title>
	<style>
		.container {
			display: flex;
		}

		.container div {
			width: 100px;
			height: 50px;
			background-color: tomato;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 5px;
		}
	</style>
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
	<h1>MENAMPILKAN DATA MAHASISWA DENGAN MULTIDIMENSI ARRAY DAN ARRAY ASSOCIATIVE</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th rowspan="2">Nama Mahasiswa</th>
			<th rowspan="2">NIM</th>
			<th rowspan="2">Jurusan</th>
			<th rowspan="2">Email</th>
			<th colspan="2">Nilai</th>
		</tr>
		<tr>
			<th>Teori</th>
			<th>Praktek</th>
		</tr>
		<?php foreach ($paramahasiswa as $mahasiswa) : ?>
			<tr>
				<td><?php echo $mahasiswa["nama"]; ?></td>
				<td><?php echo $mahasiswa["nim"]; ?></td>
				<td><?php echo $mahasiswa["jurusan"]; ?></td>
				<td><?php echo $mahasiswa["email"]; ?></td>
				<td><?php echo $mahasiswa["nilai"][0] ?></td>
				<td><?php echo $mahasiswa["nilai"][1] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>

</html>