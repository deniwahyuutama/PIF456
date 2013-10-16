<!DOCTYPE HTML>
<html>
	<head>
		<title>Metode GET</title>
	</head>
	<body>
		<form ation="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Nama <input type="text" name="nama" /><br/>
			<input type="submit" value="OK">
			<?php
			if (isset($_GET['nama'])){
				echo 'Hallo, ' . $_GET['nama'];
			}
			?>
		</form>
	</body>
</html>