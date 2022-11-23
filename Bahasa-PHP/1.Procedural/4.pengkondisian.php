<?php
//pengkondisian(if-else, if-elseif-else, ternary, switch)
$x = 6;
echo '$x = 6 <br>';
echo "jawabannya: ";
if ($x < 4) {
	echo "$x < 4 = benar";
} else if ($x == 6) {
	echo "$x == $x";
} else {
	echo "$x < 4 = salah";
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
	<h1>MEMBUAT TABLE MENGGUNAKAN FOR LOOP DAN IF ELSE</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($a = 1; $a <= 5; $a++) : ?>
			<tr>
				<?php for ($b = 1; $b <= 5; $b++) :
					if ($a % 2 == 0) : ?>
						<td bgcolor="pink">
						<?php else : ?>
						<td bgcolor="yellow">
						<?php endif; ?>
						<?= "$a,$b"; ?>
						</td>
					<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>

</html>