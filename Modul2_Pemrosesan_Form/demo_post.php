<!DOCTYPE HTML>
<html>
	<head>
		<title>Metode GET</title>
	</head>
	<body>
		<form ation="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Nama <input type="text" name="nama" /><br/>
			<input type="submit" value="OK">
			<?php
			if (isset($_POST['nama'])){
				echo 'Hallo, ' . $_POST['nama'];
			}
			?>
		</form>
	</body>
</html>