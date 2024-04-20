<?php
//pengulangan (for, while, do..while, foreach(khusus array))
//1.for
for ($i = 0; $i < 3; $i++) {
	echo $i, ".This is for <br>";
}
echo "<br><br>";

//2.while
$a = 0;
while ($a < 3) {
	echo $a, ".This is while <br>";
	$a++;
}
echo "<br><br>";

// 3.do..while
$b = 0;
do {
	echo $b, ".This is do...while <br>";
	$b++;
} while ($b < 3);
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
	<h1>MEMBUAT TABLE MENGGUNAKAN FOR LOOPING</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i = 1; $i <= 3; $i++) : ?>
			<tr>
				<?php for ($j = 1; $j <= 3; $j++) : ?>
					<th><?= "r$i,c$j"; ?></th>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>

</html>