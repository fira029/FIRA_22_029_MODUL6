<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<h2>Kalkulator Sederhana</h2>
	<form method="post">
		<input type="number" name="angka1">
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="number" name="angka2">
		<input type="submit" name="submit" value="Hitung">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$operator = $_POST['operator'];

			switch ($operator) {
				case '+':
					$hasil = $angka1 + $angka2;
					break;
				case '-':
					$hasil = $angka1 - $angka2;
					break;
				case '*':
					$hasil = $angka1 * $angka2;
					break;
				case '/':
					$hasil = $angka1 / $angka2;
					break;
				
				default:
					echo "Operator tidak valid";
					break;
			}

			echo "<br>Hasil: ".$hasil;
		}
	?>
</body>
</html>